let nb_coup = 0;
let max = 80;
let min = 20;
let nb = Math.floor(Math.random() * max) + min;

//alert(nb); // pour voir la solution

function jeux (){
    let nombre = document.getElementById('solution').value;
    nb_coup++;
    
    if(nombre < nb) { // c'est plus 
        alert("c'est plus");
        document.getElementById('solution').value = '';
    }
    if(nombre > nb) { // c'est moins
        document.getElementById("moin").src="moin.png";
        alert("c'est moins");
        document.getElementById('solution').value = '';
    }
    if(nombre == nb) { // La personne a gagné 
        alert("Bravo , le nombre était "+ nb +" Tu as gagné en "+ nb_coup +" coup(s)");
        let image_gagne = document.getElementById("gagne");
        image_gagne.src = "http://m.memegen.com/pdufvo.jpg";
    }
}