import './style.css'

const darkModeBtn = document.getElementById("darkModeBtn");
const body = document.body;

darkModeBtn.addEventListener("click", () => {
    body.classList.toggle("darkMode");    
})