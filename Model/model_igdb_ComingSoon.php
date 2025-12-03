<?php
//RECUPERATION DES DATAS POUR LA SECTION COMING SOON

// Import des identifiants 
include "./config.php";

// Endpoint IGDB 
$url = "https://api.igdb.com/v4/games";

// Body
$data = "fields name, release_dates.date, platforms.name, cover.image_id; where platforms = 508 & game_type = (0, 9, 11, 8) & release_dates.date > 1764630000; sort release_dates desc; limit 5;";

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

// Autorisation et format des données
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

echo $response;

?>