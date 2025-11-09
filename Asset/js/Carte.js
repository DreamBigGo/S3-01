const carte_france = document.getElementById("carte");
let nom = carte_france.getAttribute("data-nom")
let pathing = carte_france.querySelectorAll("path")
let liens = ["https://www.agirabcd.eu/776_p_48777/delegation-non-existante.html","https://www.agirabcd.eu/776_p_48536/rEunion-ile-de-la.html"]
pathClick();

function pathClick(){
 pathing.forEach(el =>{
     el.addEventListener("click",() =>{
         CompareNom(el.getAttribute("data-nom"))
     });

 });
}

function CompareNom(event){
    if(event === "La Réunion")
        window.location.href = liens[1];
    else
        window.location.href = liens[0];
}