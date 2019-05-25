let character = {
    name : "John",
    age : 26,
    items_to_give : ["Sword", "Armor", "Bow", "Shield"],
}

for (name in character){
    console.log(name)
}
console.log(character.items_to_give)

function giveItem (){
    Math.floor(Math.random() * items_to_give);
}