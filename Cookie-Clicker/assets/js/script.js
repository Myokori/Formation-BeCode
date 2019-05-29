//Définition des variables //

let click = document.getElementById('canvas');
let multi = document.getElementById('multiplier');
let autoclick = document.getElementById('autoclick');
let bonus = document.getElementById('bonus');
let display = document.getElementById('affichage');

//Définition des variables numériques//

let score = 0;
let clickvalue = 1;
let multiplicateur = 1;
let multiPrice = 50;
let autoPrice = 500;
let bonusPrice = 5000;
let bonusTime = 30;

//Définition des valeurs Boléennes pour vérification des boutons//

let bonusOn = false;
let multiplyOn = false;
let aclickOn = false;


// Fonction d'affichage //

function displayAll(){
    click.innerHTML = "Get Cookies !";
    display.innerHTML = score + " Cookies";
    multi.innerHTML = "Multiplicateur x " + multiplicateur + " (Coûte " + multiPrice + " Cookies)";
    autoclick.innerHTML = "Auto Clicker (Coûte " + autoPrice + " Cookies)";
}

bonus.innerHTML = "Bonus 200% (Coûte " + bonusPrice + " Cookies)";


// Fonctions gameplay //

function Score(){
    score += clickvalue;
    displayAll();
    enableButtons();
}

function augMultiply(){
    multiplicateur += 1;
    score -= multiPrice;
    clickvalue *= multiplicateur;
    multiPrice *= multiplicateur;
    displayAll();
    enableButtons();
}

function autoClick(){
        score -= autoPrice;
        aclickOn = true;
        autoclick.disabled = true;
        function auto(){
            score += 1;
            displayAll();
        }
        auto();
        setInterval(auto, 1000);
    enableButtons();
}

function enableBonus(){
    score -= bonusPrice;
    bonusOn = true;
    clickvalue *= 2;
    bonus.innerHTML = "Il vous reste " + bonusTime + " secondes de Bonus";
    bonus.disabled = true;
    displayAll();
    enableButtons();
}

function disableBonus(){
    bonusOn = false;
    bonusTime = 30;
    clickvalue /= 2;
    bonus.innerHTML = "Bonus 200% (Coûte " + bonusPrice + " Cookies)";
    displayAll();
    enableButtons();
}

function bonusT(){
    if(bonusOn){
        --bonusTime;
        bonus.innerHTML = "Il vous reste " + bonusTime + " secondes de Bonus";
        if (bonusTime === 0){
            disableBonus();
        }
    }
}


// Fonction check Boutons (Link aux Boléennes) //

function enableButtons(){
        if(!multiplyOn && score >= multiPrice){
            multi.disabled = false;
            multi.style.backgroundColor = "#290505";
        }
        else {
            multi.disabled = true;
            multi.style.backgroundColor = "grey";
        }
    
        if(!bonusOn && score >= bonusPrice){
            bonus.disabled = false;
            bonus.style.backgroundColor = "#290505";
        }
        else{
            bonus.disabled = true;
            bonus.style.backgroundColor = "grey";
        }
    
        if(!aclickOn && score >= autoPrice){
            autoclick.disabled = false;
            autoclick.style.backgroundColor = "#290505";
        }
        else{
            autoclick.disabled = true;
            autoclick.style.backgroundColor = "grey";
        }
}
// Appel des fonctions d'affichage et de vérification des boutons //

displayAll();
enableButtons();

// Ajout d'eventListener sur les boutons affin de lancer les fonctions correspondantes //

click.addEventListener('click', Score);
bonus.addEventListener('click', enableBonus);
multi.addEventListener('click', augMultiply);
autoclick.addEventListener('click', autoClick);

bonusInterval = window.setInterval(bonusT, 1000);

// Canvas Cookie //

let a = document.getElementById("canvas");
let ctl = a.getContext("2d");

ctl.shadowOffsetX = 0;
ctl.shadowOffsetY = 0;
ctl.shadowColor = "black"
ctl.shadowBlur = 50;

ctl.beginPath();
ctl.arc(200, 200, 200, 0, 2 * Math.PI);
ctl.fillStyle = "#d8ad6a";
ctl.fill();
ctl.strokeStyle="#331805"
ctl.stroke();

ctl.shadowOffsetX = 0;
ctl.shadowOffsetY = 0;
ctl.shadowColor = "#331805"
ctl.shadowBlur = 0;

ctl.beginPath();
ctl.arc(50, 150, 15, 0, 2 * Math.PI);
ctl.fillStyle = "#331805";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.arc(115, 280, 15, 0, 2 * Math.PI);
ctl.fillStyle = "#331805";
ctl.fill();
ctl.stroke();


ctl.beginPath();
ctl.arc(215, 170, 15, 0, 2 * Math.PI);
ctl.fillStyle = "#331805";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.arc(200, 25, 15, 0, 2 * Math.PI);
ctl.fillStyle = "#331805";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.arc(350, 220, 15, 0, 2 * Math.PI);
ctl.fillStyle = "#331805";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.arc(255, 350, 15, 0, 2 * Math.PI);
ctl.fillStyle = "#331805";
ctl.fill();
ctl.stroke();
