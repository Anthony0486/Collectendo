<?php

// Import des identifiants 
include "config.php";


// Endpoint IGDB 
$url = "https://api.igdb.com/v4/games";

// Body
$data = "fields *; where platforms = 508; limit 500;";

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

// Autorisation
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

echo $response;