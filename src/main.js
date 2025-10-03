import './style.css'
//VARIABLES
const darkModeBtn = document.getElementById("darkModeBtn");
const body = document.body;
const menuBtn = document.getElementById("menuBtn");
const dropdown = document.getElementById("myDropDown");
const menuBtn1 = document.getElementById("menuBtn1");
const dropdown1 = document.getElementById("myDropDown1");



//DARK MODE
darkModeBtn.addEventListener("click", () => {
    body.classList.toggle("darkMode");  
});

//DROPDOWN MENUS
menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("show");
});
menuBtn1.addEventListener("click", () => {
    dropdown1.classList.toggle("show");
});
window.addEventListener("click", (event) => {
  if (!event.target.closest(".dropDown")) {
    dropdown.classList.remove("show");
  };
});
window.addEventListener("click", (event) => {
  if (!event.target.closest(".dropDown")) {
    dropdown1.classList.remove("show");
  };
});


//MODALE A PROPOS
const contact = document.querySelector(".lienContact");
const modal = document.getElementById("myModal");
const btn = document.getElementById("myBtn");
const span = document.getElementsByClassName("close")[0];

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