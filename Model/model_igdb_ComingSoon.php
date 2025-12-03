<?php
//FONCTION POUR RECUPERER LES DATAS POUR LA SECTION COMING SOON:
function insertComingSoon($clientId, $token){

// Endpoint de la requete IGDB 
$url = "https://api.igdb.com/v4/games";

// Body de la requete IGDB
$data = "fields name, release_dates.date, platforms.name, cover.image_id; where platforms = 508 
& game_type = (0, 9, 11, 8) & release_dates.date > 1764630000; sort release_dates desc; limit 5;";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Client-ID: $clientId",
    "Authorization: $token"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$responseArray = json_decode($response, true);
// var_dump($responseArray);
//Création de l'objet bdd 
$bdd = new PDO("mysql:host=localhost;dbname=collectendo", "root", 
"root",array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// Enregistrement des produits contenus dans la reponse au sein de la bdd
foreach ($responseArray as $game) {
    $name = $game['name'] ?? null;
    $releaseTimestamp = $game['release_dates'][0]['date'] ?? null;
    $cover = isset($game['cover']) ? $game['cover']['image_id'] : null;
// Conversion du timestamp en date 
$date = $releaseTimestamp ? date("Y-m-d", $releaseTimestamp) : null;
//Requete d'enregistrement
    try {
        $req = $bdd->prepare("INSERT INTO product 
        (product_name, release_date, cover) VALUES (?, ?, ?)");
        $req->bindParam(1,$name,PDO::PARAM_STR);
        $req->bindParam(2,$date,PDO::PARAM_STR);
        $req->bindParam(3,$cover,PDO::PARAM_STR);
        // var_dump([$name, $date, $cover]);
        $req->execute();
    } catch (Exception $error) {
        die($error->getMessage());
    }
}   
}
//FONCTION POUR RECUPERER LES JEUX A VENIR
function displayComingSoon(){
    $bdd = new PDO("mysql:host=localhost;dbname=collectendo", "root", 
    "root",array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $req = $bdd->prepare("SELECT p.product_name, p.release_date, p.cover, pl.platform 
    FROM product p INNER JOIN platform pl ON p.id_platform = pl.id_platform;");
    $req->execute();
    $comingSoonGames = $req->fetchAll();
    return $comingSoonGames;
}
// var_dump(displayComingSoon());

?>