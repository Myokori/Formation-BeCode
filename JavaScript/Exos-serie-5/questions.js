/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire.
 */
var tailleString = function(texte) {
  return texte.length;
};
var remplaceECar = function(texte) {
  let a = texte.indexOf("e");
  let text = texte.substr(" ", a) + " " + texte.substr(a + 1, texte.length);
  return text;
};
var concatString = function(texte1, texte2) {
  concat = texte1.concat(texte2);
  return concat;
};
var afficherCar5 = function(texte) {
  txt = texte;
  return texte[6];
};
var afficher9Car = function(texte) {
  txt = texte.substring(0, 9);
  return txt;
};
var majusculeString = function(texte) {
  txt = texte.toUpperCase();
  return txt;
};
var minusculeString = function(texte) {
  txt = texte.toLowerCase();
  return txt;
};
var SupprEspaceString = function(texte) {
  txt = texte.trim();
  return txt;
};
var IsString = function(texte) {
  txt = texte;
  if (typeof txt === "string") {
    return true;
  }
};

var AfficherExtensionString = function(texte) {
  return texte.split(".").pop();
};
var NombreEspaceString = function(texte) {
  return texte.split(" ").length - 1;
};
var InverseString = function(texte) {
  return texte
    .split("")
    .reverse()
    .join("");
};

/**
 * Exercices sur les nombres et les caluls mathématiques
 */
var calculPuissance = function(x, y) {
  return x * y + x;
};
var valeurAbsolue = function(nombre) {
  return Math.abs(nombre);
};

var valeurAbsolueArray = function(array) {
  for (let i = 0; i < array.length; i++) {
    array[i] = Math.abs(array[i]);
  }
  return array;
};

var sufaceCercle = function(rayon) {
  return Math.round(rayon * rayon * Math.PI);
};
var hypothenuse = function(ab, ac) {
  return Math.hypot(ab, ac);
};
var calculIMC = function(poids, taille) {
  return Number((poids / (taille * taille)).toFixed(2));
};
