<?php
// Import des identifiants de l'API et de la BDD
include __DIR__ . '/../config.php';
//Création de l'objet bdd 
$bdd = new PDO("mysql:host=$bdd_host;dbname=$bdd_name", $bdd_login, 
$bdd_psswrd,array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//Fonction pour recuperer les datas pour la section coming soon:
function insertComingSoon($clientId, $token, $bdd){
    $url = "https://api.igdb.com/v4/games";
// Préparation de la requête API avec Curl
    $timestamp = time();
    $data = "
    fields name, release_dates.date, release_dates.platform, cover.image_id;
    where release_dates != null & release_dates.platform = 508 & release_dates.date > $timestamp & game_type = (0,9,11,8);
    sort release_dates.date asc;
    limit 5;
    ";
// Initialisation cURL 
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => [
            "Client-ID: $clientId",
            "Authorization: $token"
    ],
    CURLOPT_RETURNTRANSFER => true,
]);
    $response = curl_exec($ch);
    if ($response === false) {
        throw new Exception("cURL Error: " . curl_error($ch));
    }
    curl_close($ch);
// Décodage de la réponse JSON
    $responseArray = json_decode($response, true);
// var_dump($responseArray);
// Boucle sur la réponse pour récupérer les données
    foreach ($responseArray as $game) {
        $name = $game['name'] ?? null;
        $cover = $game['cover']['image_id'] ?? null;
        $releaseDate = "TBA"; //Recherche de la bonne date pour Switch 2 TBA par défaut si aucune date
        if (!empty($game['release_dates'])) {
            foreach ($game['release_dates'] as $rd) {
                if (($rd['platform'] ?? null) == 508 && !empty($rd['date'])) {
                    $releaseDate = date("Y-m-d", $rd['date']);
                break; // on prend la première date valide pour Switch 2
            }
        }
    }
//Requete d'enregistrement (si les produits sont déja existant en bdd, on mets à jour uniquement la date et la cover)
    try {$req = $bdd->prepare("INSERT INTO product (name_product, release_date_product, cover_product) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE
    release_date_product = VALUES(release_date_product), cover_product = VALUES(cover_product);");
        $req->bindParam(1,$name,PDO::PARAM_STR);
        $req->bindParam(2,$releaseDate,PDO::PARAM_STR);
        $req->bindParam(3,$cover,PDO::PARAM_STR);
        // var_dump([$name, $date, $cover]);
        $req->execute();
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
}
//Fonction pour récuperer les data de la section coming soon
function displayComingSoon($bdd){
    $req = $bdd->prepare("SELECT p.name_product, p.release_date_product, p.cover_product, pl.name_platform 
    FROM product p INNER JOIN platform pl ON p.id_platform = pl.id_platform;");
    $req->execute();
    $comingSoonGames = $req->fetchAll();
    return $comingSoonGames;
}
// var_dump(displayComingSoon());
?>