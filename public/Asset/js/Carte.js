import {CompareNom} from "./lienAssosRegion.js"

const carte_france = document.getElementById("carte");
let pathing = carte_france.querySelectorAll("path");

pathClick();

function pathClick(){
    pathing.forEach(el =>{
        el.addEventListener("click",() =>{
            CompareNom(el.getAttribute("data-numerodepartement"))
        });

    });
}

