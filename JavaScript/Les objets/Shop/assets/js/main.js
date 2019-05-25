let items = [

Sword = {
    name : "Excalibur",
    physic : 150,
    magic : 75,
    minLevel : 50,
    available : true,
},

Axe = {
    name : "Gimli Axe",
    physic : 300,
    magic : 0,
    minLevel : 30,
    available : false,
},

Scepter = {
    name : "Gandalf Scepter",
    physic : 20,
    magic : 350,
    minLevel : 1,
    available : false,
},

Shield = {
    name : "Wood Shield",
    physic : 5,
    magic : 0,
    minLevel: 1,
    available : true,
},
]


// Afficher tout les objets
function showItems (){
    console.log(items)
}
showItems();

//Afficher les objets disponnibles
function showItemsAvailable(){
for(let i in items)
    if(items[i].available === true){
        console.log(items[i])
    }
}
showItemsAvailable();


//Afficher les items supérieur au level 10
function showItemsByLvl(){
for (let i in items){
if(items[i].minLevel >= 10){
    console.log(items[i])
}
}
}
showItemsByLvl();


