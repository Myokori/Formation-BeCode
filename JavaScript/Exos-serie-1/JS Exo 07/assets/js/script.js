window.onload=function(){
document.getElementById("valider").addEventListener("click", function()
{
    alert((document.getElementById('pointure').value*2+5*50) - document.getElementById('annee').value+1766);
});
}