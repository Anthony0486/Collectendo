<?php
// Import des identifiants et du modèle contenant les fonctions
include __DIR__ . '/../config.php';
include __DIR__ . '/../Model/model_igdb_ComingSoon.php'; 
//Création de l'objet bdd 
$bdd = new PDO("mysql:host=$bdd_host;dbname=$bdd_name", $bdd_login, 
$bdd_psswrd,array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//Appel de la fonction pour récuperer et enregistrer les produit dans la bdd
insertComingSoon($clientId, $token, $bdd);
//Variable contenant les produits à afficher grâce à la fonction 
$comingSoonGames = displayComingSoon($bdd);
//Boucle sur le tableau pour générer l'affichage de chaque card produit
$html = '';
foreach ($comingSoonGames as $game) {
    $coverUrl = $game['cover_product']
    ? "https://images.igdb.com/igdb/image/upload/t_cover_big/{$game['cover_product']}.jpg"
    : "/collectendo/public/Assets/nintendo-switch-2-box-art-templates.webp";
    $html .= '
        <article class="fiche">
            <img src="'.$coverUrl.'" alt="Image de '.$game['name_product'].'">
            <strong>'.$game['name_product'].'</strong>
            <p>'.$game['name_platform'].'</p>
            <em>'.$game['release_date_product'].'</em>
            <input class="addListBtn" type="submit" value="Ajouter à ma liste">
            <input class="rmListBtn" type="submit" value="Retirer de ma liste">
        </article>
    ';
}
?>
