      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./src/style.css">
<script src="./src/header.js" defer></script>
<script src="./src/main.js" defer></script>
<!-- <script src="./src/comingSoon.js" defer></script> -->
<script src="./src/switch2games.js" defer></script>
</head>
<body>
      <!-- HEADER -->
    <div class="logo">
      <a href="/collectendo/home"><img src="./public/Assets/logo-red.svg" alt="logoRouge"></a>
      <!-- <h1>Full Set collection</h1>/texte sous le logo à valider/ -->
    </div>
    <nav class="navbar">
      <!--DROPDOWN MENU PRINCIPAL-->
      <div class="dropDown">
        <button id="menuBtn" class="dropBtn">Menu</button>
        <div id="myDropDown" class="dropdownContent">
          <a href="#">Consoles</a>
          <a href="/collectendo/console_category">Jeux</a>
          <a href="#">Accessoires</a>
        </div>
      </div>
      <!--DARK MODE-->
      <div class="darkContainer">
            <button id="darkModeBtn">Mode sombre</button>
          </div>
        <ul>
          <!--DROPDOWN A PROPOS/RECHERCHER/MON COMPTE-->
          <li> 
          <div class="dropDown">
            <a id="menuBtn1" class="aPropos" href="#" alt="lienAPropos">
            <img alt="aproposlogo" src="./public/Assets/aproposbtnWHITE.svg" alt="lienAPropos">A propos</a>
          <div id="myDropDown1" class="dropdownContent">
            <a class="lienquisuisje" href="#">Qui suis-je?</a>
            <a class="lienContact" href="#">Contact</a>
          </div>
        </div>
        </li>
        <li>
          <div class="dropDown">
          <a id="menuBtn2" class="search" href="#" alt="lienRecherche">
          <img alt="recherchelogo" src="./public/Assets/rechercherbtnWHITE.svg" alt="lienRecherche">Rechercher</a>
        <div id="myDropDown2" class="dropdownContent">
            <input class="inputSearch" type="text" placeholder=" Que recherchez vous?">
            <input class="btn-submit" type="submit" value="Envoyer">
          </div>
          </div>
        </li>
          <li>
            <div class="dropDown">
            <a id="menuBtn3" class="myAcount" href="#" alt="lienMonCompte">
          <img alt="moncomptelogo" src="./public/Assets/moncomptebtnWHITE.svg" alt="lienMonCompte">Mon compte</a>
              <div id="myDropDown3" class="dropdownContent">
            <a class="connexion" href="#">Me connecter</a>
            <a class="personalInformations" href="#">Mes informations personnelles</a>
            <a class="myLists" href="#">Mes Listes</a>
          </div>
        </div>
        </li>
      </ul>
    </nav>
    <!-- MODALE QUI SUIS JE? -->
    <div id="myModal1" class="modal">
      <div class="modal-content">
        <span class="close1">&times;</span>
        <img src="./public/Assets/logo-red.svg" alt="logoRouge">
          <h2>Qui suis-je?</h2><br>
    <div class="modal-body">
      <h4>Bonjour à vous ami collectionneur!</h4><br>
      <p>Bienvenue sur Collectendo, je m'appelle Anthony et je suis joueur de jeux vidéo depuis tout petit, je joue et collectionne principallement des jeux Nintendo rétros et actuels.</p>
      <p>Mon site à pour but d'heberger une base de données contenant les jeux et consoles de la marque NINTENDO.</p>
      <p>Il vous est possible de consulter cette base de données pour y trouver toutes les informations concernant un jeu, une console ou un accéssoire estampillé NINTENDO et commercialisé sur le territoire Européen (PAL EURO).</p>
      <p>Il vous est également possible de créer vos propres listes de jeux afin de vous aider à gérer votre collection.</p>
      <p>Je vous souhaite une bonne visite sur mon site!</p>
    </div>
    <div class="modal-footer">
    </div>
    </div>
    </div>
    <!-- MODALE CONTACT -->
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./public/Assets/logo-red.svg" alt="logoRouge">
          <h2>Me contacter</h2><br>
    <div class="modal-body">
      <h4>Bonjour à vous ami collectionneur!</h4><br>
      <p>Si vous souhaitez me contacter, veuillez entrer votre adresse email dans le champ ci dessous :</p><br>
      <input class="inputMail" type="email" placeholder=" Votre email">
      <input class="btn-submit" type="submit" value="Envoyer">
    </div>
    <div class="modal-footer">
    </div>
    </div>
    </div>