let character = {
    name : "God",
    level : 100,
    life : 5000,
    weapon : Fist ={
        name : "Le Justicier",
        damage : 5000,
    },
    attack : function(){},
    receiveDamage : function(){},
}

let opponentCharacter = {
    name : "Abaddon",
    level : 100,
    life : 100000,
    weapon : Sword ={
        name : "La Pourfendeuse",
        damage : 500,
    },
    attack : function(){},
    receiveDamage : function(){},
}

let mainCharacter = {
    name : "Arthur",
    level : 100,
    life : 500,
    weapon : Sword ={
        name : "Excalibur",
        damage : 500,
    },
    attack : function (){
        console.log(mainCharacter.name + " attaque " + opponentCharacter.name + '\n' + "avec " + Sword.name + '\n' + "et lui inflige " + Sword.damage * mainCharacter.level + " de dégâts " + '\n' + opponentCharacter.name + " à maintenant " + (opponentCharacter.life - (Sword.damage * mainCharacter.level)) + " de vie")
    },
    receiveDamage : function(){},
}

mainCharacter.attack()
