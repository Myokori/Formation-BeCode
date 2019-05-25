// Définir les variables

let mot = ['B', 'O', 'N', 'J', 'O', 'U', 'R'];
let clear = [" ", " ", " ", " ", " ", " ", " "];

// Définir les fonctions

document.getElementById('start').addEventListener("click", guessLetter);
let txt;
function guessLetter() {
    txt = prompt("Veuillez entrer une lettre").toUpperCase();
    console.log(txt);
    for (let i = 0; i <= mot.length; i++) {
        if (txt === mot[i]) {
            clear[i] = mot[i];
            console.log(clear);
        }

        else if (clear.toString() === mot.toString()) {
            return alert("Bonne réponse")
        }
    }
    if (clear.toString() !== mot.toString()) {
        guessLetter();
    }
}

document.getElementById('reset').addEventListener("click", restart);

function restart() {
    clear = [];
    guessLetter();
}
