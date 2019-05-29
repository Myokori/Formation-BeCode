let mainCharacter = {
    name : "Albert",
    level : 100,
    life : 50,
    weapon : Excalibur = {
        name : "Excalibur",
        damage : 47,
    }
}

function atk (){
    console.log(mainCharacter.name + " attaque avec " + Excalibur.name + " les dégâts sont de " + mainCharacter.level * Excalibur.damage)
}

atk()





class Character = {
    name : "John"
}