//VARIABLES
const darkModeBtn = document.querySelector(".darkModeBtn");
const allDropdowns = document.querySelectorAll(".dropDown"); //renvoie une nodelist (array)
const quisuisje = document.querySelector(".lienquisuisje");
const modal1 = document.querySelector("#myModal1");
const span1 = document.getElementsByClassName("close1")[0];// renvoie le 1er élément du html collection
const contact = document.querySelector(".liencontact");
const modal = document.querySelector("#myModal");
const span = document.getElementsByClassName("close")[0];

//DARK MODE
document.addEventListener("DOMContentLoaded", () => {
  const updateDarkModeBtn = (isDarkModeEnabled) => {
    darkModeBtn.textContent = isDarkModeEnabled ? "Mode clair" : "Mode sombre"; //Mettre à jour le texte du bouton au toggle
  };
  const saveMode = localStorage.getItem("darkMode"); //Verifier le mode au chargement de la page
  const isDarkModeEnabled = saveMode === "enabled"; 
  document.body.classList.toggle("darkMode", isDarkModeEnabled);
  updateDarkModeBtn(isDarkModeEnabled); 
  darkModeBtn.addEventListener("click", () => {
    const isDarkModeNow = document.body.classList.toggle("darkMode");
    localStorage.setItem("darkMode", isDarkModeNow ? "enabled" : "disabled");
    updateDarkModeBtn(isDarkModeNow);
  });  
});

//DROP DOWN LIST MENUS
allDropdowns.forEach(dropdown => { //boucle sur le tableau de dd
  const button = dropdown.querySelector(".menuBtn");
  const content = dropdown.querySelector(".dropdownContent");
  button.addEventListener("click", (e) => {
    e.preventDefault(); // bloque le comportement par defaut de <a
    e.stopPropagation(); // bloque le window.click
    // console.log(button, content);
    allDropdowns.forEach(dd => {    // Ferme les autres dd menus
      if (dd !== dropdown) {
        dd.querySelector(".dropdownContent").classList.remove("show");
      }
    });
    content.classList.toggle("show"); // Ouvre/ferme le menu cliqué
  });
});
window.addEventListener("click", () => { // ferme le menu au clic dans la fenêtre
  document.querySelectorAll(".dropdownContent").forEach(cl => cl.classList.remove("show"));
});


//MODALE QUI SUIS JE

quisuisje.addEventListener("click", () => {
  modal1.style.display = "block";
});
span1.addEventListener("click", () => {
  modal1.style.display = "none";
});
window.addEventListener("click", (event) => {
  if (event.target === modal1) {
    modal1.style.display = "none";
  }
});
//MODALE CONTACT

contact.addEventListener("click", () => {
  modal.style.display = "block";
});
span.addEventListener("click", () => {
  modal.style.display = "none";
});
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});


//TEST FETCH API IGDB DEPUIS PHP

// fetch("http://localhost:8888/collectendo/igdb.php") 
//   .then(res => res.json())
//   .then(data => {
//     console.log(data)
//     return data;
//   })
//   .catch(err => console.error(err));