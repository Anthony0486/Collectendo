import './style.css'
//VARIABLES
const darkModeBtn = document.getElementById("darkModeBtn");
const body = document.body;
const menuBtn = document.getElementById("menuBtn");
const dropdown = document.getElementById("myDropDown");
const aPropos = document.getElementsByClassName("aPropos");

//DARK MODE
darkModeBtn.addEventListener("click", () => {
    body.classList.toggle("darkMode");  
});

//DROPDOWN MENUS
menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("show");
});

// aPropos.addEventListener("click", ()=>{
//     dropdown.classList.toggle("show");
// });

window.onclick = function(event) {
    if (!event.target.matches(".dropBtn")){
        const dropdowns = document.getElementsByClassName("dropdownContent");
        for (let i=0; i < dropdowns.length; i++ ) {
            const openDropdown = dropdowns[i];
            if(openDropdown.classList.contains("show")){
                openDropdown.classList.remove("show");
            };
        };
    };
};