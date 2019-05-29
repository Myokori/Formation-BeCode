// Drapeau //

/*

let a = document.getElementById('canvas');
let ctl = a.getContext("2d");
ctl.moveTo(200, -200);
ctl.lineTo(200, 600);
ctl.fillStyle = "rgb(0,0,0)";
ctl.fillRect (0, 0, 200, 400);
ctl.stroke();

ctl.moveTo(400, -200);
ctl.lineTo(400, 600);
ctl.fillStyle = "rgb(255,255,0)";
ctl.fillRect (200, 0, 200, 400);
ctl.stroke();

ctl.fillStyle = "rgb(255,0,0)";
ctl.fillRect (400, 0, 200, 400);

*/

// Bateau //

/*
let a = document.getElementById('canvas');
let ctl = a.getContext("2d");
ctl.moveTo(305, -200);
ctl.lineTo(305, 200);
ctl.stroke();

ctl.moveTo(300, -200);
ctl.lineTo(300, 200);
ctl.stroke();

ctl.moveTo(490, -200);
ctl.lineTo(110, 200);
ctl.stroke();

ctl.moveTo(200, -110);
ctl.lineTo(500, 200);
ctl.stroke();

ctl.moveTo(50, 200);
ctl.lineTo(550, 200);
ctl.stroke();

ctl.moveTo(150, 300);
ctl.lineTo(50, 200);
ctl.stroke();

ctl.moveTo(450, 300);
ctl.lineTo(550, 200);
ctl.stroke();

ctl.moveTo(150, 300);
ctl.lineTo(450, 300);
ctl.stroke();
*/

// Maison //

/*
let a = document.getElementById('canvas');
let ctl = a.getContext("2d");

// Toit gauche //

ctl.moveTo(300, 10);
ctl.lineTo(200, 150);
ctl.stroke();

// Toit droite //

ctl.moveTo(300, 10);
ctl.lineTo(400, 150);
ctl.stroke();

// Horizontal Toit //

ctl.moveTo(200, 150);
ctl.lineTo(400, 150);
ctl.stroke();

// Gauche //

ctl.moveTo(200, 150);
ctl.lineTo(200, 350);
ctl.stroke();

// Droite //

ctl.moveTo(400, 150);
ctl.lineTo(400, 350);
ctl.stroke();

// Horizontal Bas //

ctl.moveTo(400, 350);
ctl.lineTo(200, 350);
ctl.stroke();

// Porte //

ctl.moveTo(285, 300);
ctl.lineTo(285, 350);
ctl.stroke();

ctl.moveTo(315, 300);
ctl.lineTo(315, 350);
ctl.stroke();

ctl.moveTo(285, 300);
ctl.lineTo(315, 300);
ctl.stroke();

// Fenêtre bas gauche //

ctl.moveTo(215, 300);
ctl.lineTo(265, 300);
ctl.stroke();

ctl.moveTo(215, 335);
ctl.lineTo(265, 335);
ctl.stroke();

ctl.moveTo(215, 300);
ctl.lineTo(215, 335);
ctl.stroke();

ctl.moveTo(265, 335);
ctl.lineTo(265, 300);
ctl.stroke();

// Fenêtre bas droite //

ctl.moveTo(335, 300);
ctl.lineTo(385, 300);
ctl.stroke();

ctl.moveTo(335, 335);
ctl.lineTo(385, 335);
ctl.stroke();

ctl.moveTo(335, 300);
ctl.lineTo(335, 335);
ctl.stroke();

ctl.moveTo(385, 335);
ctl.lineTo(385, 300);
ctl.stroke();

// Fenêtre haut droite //

ctl.moveTo(385, 175);
ctl.lineTo(385, 225);
ctl.stroke();

ctl.moveTo(335, 175);
ctl.lineTo(385, 175);
ctl.stroke();

ctl.moveTo(335, 175);
ctl.lineTo(335, 225);
ctl.stroke();

ctl.moveTo(335, 225);
ctl.lineTo(385, 225);
ctl.stroke();

// Fenêtre haut gauche //

ctl.moveTo(215, 175);
ctl.lineTo(215, 225);
ctl.stroke();

ctl.moveTo(215, 175);
ctl.lineTo(265, 175);
ctl.stroke();

ctl.moveTo(265, 175);
ctl.lineTo(265, 225);
ctl.stroke();

ctl.moveTo(215, 225);
ctl.lineTo(265, 225);
ctl.stroke();
*/

// Bonhomme //

/*
let a = document.getElementById('canvas');
let ctl = a.getContext("2d");

ctl.beginPath();
ctl.arc(300, 100, 50, 0, 2 * Math.PI);
ctl.stroke();

ctl.moveTo(300, 300);
ctl.lineTo(300, 150);
ctl.stroke();

ctl.moveTo(300, 200);
ctl.lineTo(250, 150);
ctl.stroke();

ctl.moveTo(300, 200);
ctl.lineTo(350, 150);
ctl.stroke();

ctl.moveTo(300, 300);
ctl.lineTo(250, 350);
ctl.stroke();

ctl.moveTo(300, 300);
ctl.lineTo(350, 350);
ctl.stroke();
*/

// Bonus : Android ! //

let a = document.getElementById("canvas");
let ctl = a.getContext("2d");

ctl.beginPath();
ctl.moveTo(200, 100);
ctl.bezierCurveTo(200, 5, 400, 5, 400, 100);
ctl.closePath();
ctl.strokeStyle = "#A4C639";
ctl.stroke();
ctl.fillStyle = "#A4C639";
ctl.fill();

ctl.beginPath();
ctl.arc(250, 75, 10, 0, 2 * Math.PI);
ctl.fillStyle = "white";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.arc(350, 75, 10, 0, 2 * Math.PI);
ctl.fillStyle = "white";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.moveTo(200, 100);
ctl.lineTo(400, 100);
ctl.stroke();

ctl.rect(200, 110, 200, 125);
ctl.stroke();

ctl.rect(200, 225, 200, 50);
ctl.fillStyle = "#A4C639";
ctl.fill();
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 7;
ctl.lineCap = "round";
ctl.moveTo(205, 10);
ctl.lineTo(230, 50);
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 7;
ctl.lineCap = "round";
ctl.moveTo(395, 10);
ctl.lineTo(370, 50);
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 25;
ctl.moveTo(212, 275);
ctl.lineTo(388, 275);
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 50;
ctl.moveTo(250, 275);
ctl.lineTo(250, 350);
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 50;
ctl.moveTo(350, 275);
ctl.lineTo(350, 350);
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 50;
ctl.moveTo(160, 140);
ctl.lineTo(160, 260);
ctl.stroke();

ctl.beginPath();
ctl.lineWidth = 50;
ctl.moveTo(440, 140);
ctl.lineTo(440, 260);
ctl.stroke();
