import './style.css'

const darkModeBtn = document.getElementById("darkModeBtn");
const body = document.body;
const dropDown = document.getElementById("myDropDown");

darkModeBtn.addEventListener("click", () => {
    body.classList.toggle("darkMode");  
})

function myFunction(){
    dropDown.classList.toggle("show");
}

window.onclick = function(event){
    if (!event.target.matches(".dropBtn")){
        var dropdown = document.getElementsByClassName("dropdownContent");
        var i;
        for (let i=0; i < dropdown.lenght; i++ ) {
            var openDropdown = dropdown[i];
            if(openDropdown.classList.contains("show")){
                openDropdown.classList.remove("show");
            }
        }
    }
}