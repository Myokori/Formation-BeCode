window.onload=function(){
document.getElementById("valider").addEventListener("click", function()
{
    if(document.getElementById('age').value <=17){alert("Vous êtes mineur !")}
    else{alert("Vous êtes majeur !")}
});
}