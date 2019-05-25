window.onload=function(){
document.getElementById("valider").addEventListener("click", function()
{
    alert("La réponse est "+Math.trunc(document.getElementById('premier_nombre').value) * document.getElementById('deuxieme_nombre').value);
});
}