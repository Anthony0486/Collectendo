import './style.css'
//VARIABLES
const darkModeBtn = document.getElementById("darkModeBtn");
const body = document.body;
const menuBtn = document.getElementById("menuBtn");
const dropdown = document.getElementById("myDropDown");

//DARK MODE
darkModeBtn.addEventListener("click", () => {
    body.classList.toggle("darkMode");  
})

//DROPDOWN
menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("show");
});

window.onclick = function(event) {
    if (!event.target.matches(".dropBtn")){
        const dropdowns = document.getElementsByClassName("dropdownContent");
        for (let i=0; i < dropdowns.length; i++ ) {
            const openDropdown = dropdowns[i];
            if(openDropdown.classList.contains("show")){
                openDropdown.classList.remove("show");
            }
        }
    }
}