//VARIABLES
const darkModeBtn = document.getElementById("darkModeBtn");
const body = document.body;
const menuBtn = document.getElementById("menuBtn");
const dropdown = document.getElementById("myDropDown");
const menuBtn1 = document.getElementById("menuBtn1");
const dropdown1 = document.getElementById("myDropDown1");
const menuBtn2 = document.getElementById("menuBtn2");
const dropdown2 = document.getElementById("myDropDown2");
const menuBtn3 = document.getElementById("menuBtn3");
const dropdown3 = document.getElementById("myDropDown3");



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
menuBtn2.addEventListener("click", () => {
    dropdown2.classList.toggle("show");
});
menuBtn3.addEventListener("click", () => {
    dropdown3.classList.toggle("show");
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
window.addEventListener("click", (event) => {
  if (!event.target.closest(".dropDown")) {
    dropdown2.classList.remove("show");
  };
});
window.addEventListener("click", (event) => {
  if (!event.target.closest(".dropDown")) {
    dropdown3.classList.remove("show");
  };
});


//MODALE QUI SUIS JE
const quisuisje = document.querySelector(".lienquisuisje");
const modal1 = document.getElementById("myModal1");
const span1 = document.getElementsByClassName("close1")[0];

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
const contact = document.querySelector(".lienContact");
const modal = document.getElementById("myModal");
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