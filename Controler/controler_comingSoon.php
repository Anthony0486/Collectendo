<?php
// Import des identifiants 
include __DIR__ . '/../config.php';

//Inclusion du modèle contenant les fonctions
include __DIR__ . '/../Model/model_igdb_ComingSoon.php'; 

//Appel de la fonction pour enregistrer les produit dans la bdd
insertComingSoon($clientId, $token);

//Variable contenant les produits a afficher
$comingSoonGames = displayComingSoon();

$html = '';

foreach ($comingSoonGames as $game) {
    $coverUrl = $game['cover']
    ? "https://images.igdb.com/igdb/image/upload/t_cover_big/{$game['cover']}.jpg"
    : "/collectendo/public/Assets/nintendo-switch-2-box-art-templates.webp";

    $html .= '
        <div class="fiche">
            <img src="'.$coverUrl.'" alt="'.$game['product_name'].'">
            <strong>'.$game['product_name'].'</strong>
            <p>'.$game['platform'].'</p>
            <em>'.$game['release_date'].'</em>
        </div>
    ';
}
?>
