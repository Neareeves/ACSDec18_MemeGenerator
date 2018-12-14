//permet d'afficher l'image sur laquelle on clique
let imageAMemer = document.getElementsByClassName('imageAMemer');
for (let i = 0; i < imageAMemer.length;  i++) {
	imageAMemer[i].addEventListener('click', getTheImage);
}

let hauteurChosenPic;
var imageAMontrer;
var image;
var imageH;
function getTheImage(e) {
let chosenPic= document.getElementById('chosenPic');
		
	chosenPic.innerHTML = '<img class="image" style="width: 100%;" src="'+e.target.src+'">';
	imageAMontrer= e.target.src;
	let hauteurChosenPic = window.getComputedStyle(chosenPic).height;
	

	//le onload attend que l'image soit chargée avant de faire son calcul
image = document.querySelector('.image');

	image.onload = function() {

		
		imageH = image.height;
		;}
	
}

//envoyer nom du fichier avec ajax, ainsi que le contenu des inputs

// function loadDoc(){
// let textehaut = document.getElementById('textehaut').value;
// let textebas = document.getElementById('textebas').value;
// let nommeme = document.getElementById('nommeme').value;
        
//         var xhttp = new XMLHttpRequest();

//         xhttp.open("POST", "Meme", true);
//         xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//         xhttp.send('imageAMontrer='+imageAMontrer+'&textehaut='+textehaut+'&textebas='+textebas+'&nommeme='+nommeme+'&Xhaut='+Xhaut+'&Yhaut='+Yhaut+'&Xbas='+Xbas+'&Ybas='*Ybas);
//         //envoyer les post avec ajax?
        
//     }


/***********Visualiser en direct le texte écrit sur le formulaire.**************/
// Concerne le texte contenu dans le premier input.
// On récupère l'id de l'input.
var texteHaut = document.getElementById('textehaut');
var toptext = document.getElementById('affichetoptext');
// Le texte va s'afficher dans une div.
// On récupère l'id de la div texte.
texteHaut.onkeyup = function(){
 
    toptext.innerHTML= texteHaut.value;
    toptext.style.position = "absolute";
	toptext.style.top= 0 + 'px';
	toptext.style.fontSize= '2em';
	toptext.style.left = parseInt(chosenPic.style.left) + 'px';
}

/*texte du bas*/
var texteBas = document.getElementById('textebas');
var bottext = document.getElementById('affichebottext');
var hauteurBotTex = window.getComputedStyle(bottext);

bottext.style.position = "absolute";
bottext.style.bottom= '0px';
bottext.style.textShadow= '2 0 1 black';
texteBas.onkeyup = function() {
if (bottext.length < 25) {
	bottext.style.fontSize= '2em';
} else {
	bottext.style.fontSize= '2em';
}

	bottext.innerHTML = texteBas.value;
	
}

// function loadDocc(){
// let textehaut = document.getElementById('textehaut').value;
// let textebas= document.getElementById('textebas').value;
// let nommeme= document.getElementById('nommeme').value;
		
// 		var xhttp = new XMLHttpRequest();

// 		xhttp.open("POST", "ajax2.php", true);
// 		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
// 		xhttp.send('imageAMontrer='+imageAMontrer+'&textehaut='+textehaut+'&textebas='+textebas+'&nommeme='+nommeme);
// 		//envoyer les post avec ajax?
		
// 	}

/*faire bouger les blocs***/
// blocPrev = document.getElementById('blocpreview');
// blocprev.style.position = "relative";
//document.getElementById('blocpreview').appendchild('toptext');

var mousePosition;
 var offset = [0,0];
// var div;
var isDown = false;
var Xhaut;
var Yhaut;

// div = document.createElement("div");
 toptext.style.position = "absolute";
//
// toptext.style.top = "0px";
// toptext.style.width = "100px";
// toptext.style.height = "100px";
// toptext.style.background = "red";
toptext.style.color = "#FFF";

document.getElementById('blocpreview').appendChild(toptext);

toptext.addEventListener('mousedown', function(e) {
    isDown = true;
    offset = [
        toptext.offsetLeft - e.clientX,
        toptext.offsetTop - e.clientY
    ];

}, true);

document.addEventListener('mouseup', function() {
    isDown = false;
}, true);

document.addEventListener('mousemove', function(event) {

    event.preventDefault();
    if (isDown) {
        mousePosition = {

            x : event.clientX,
            y : event.clientY

        };
        toptext.style.left = (mousePosition.x + offset[0]) + 'px';
        toptext.style.top  = (mousePosition.y + offset[1]) + 'px';
     Xhaut = document.getElementById('Xhaut').value;
     Yhaut = document.getElementById('Yhaut').value;
Xhaut = (mousePosition.x + offset[0]);
  console.log(Xhaut);
Yhaut=(mousePosition.y + offset[1]);

    }
}, true);

/* bottom block*/
var mousePosition2;
var offset2 = [0,0];
// var div2;
var isDown2 = false;
let Xbas; 
let Ybas;

// div = document.createElement("div2");
bottext.style.position = "absolute";
// bottext.style.left = "0px";
// bottext.style.top = "0px";
// bottext.style.width = "100px";
// bottext.style.height = "100px";
// bottext.style.background = "red";
bottext.style.color = "#FFF";

document.getElementById('blocpreview').appendChild(bottext);

bottext.addEventListener('mousedown', function(e) {
    isDown2 = true;
    offset2 = [
        bottext.offsetLeft - e.clientX,
        bottext.offsetTop - e.clientY
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown2 = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown2) {
        mousePosition = {

            x : event.clientX,
            y : event.clientY

        };
        bottext.style.left = (mousePosition.x + offset2[0]) + 'px';
        bottext.style.top  = (mousePosition.y + offset2[1]) + 'px';
        Xbas= document.getElementById('Xbas').value;
        Ybas= document.getElementById('Ybas').value;
 Xbas=(mousePosition.x + offset2[0]); 
 Ybas=(mousePosition.y + offset2[1]);
console.log(Xbas);
    }
}, true);

function loadDoc(){
let textehaut = document.getElementById('textehaut').value;
let textebas = document.getElementById('textebas').value;
let nommeme = document.getElementById('nommeme').value;
        
        var xhttp = new XMLHttpRequest();

        xhttp.open("POST", "Meme", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('imageAMontrer='+imageAMontrer+'&textehaut='+textehaut+'&textebas='+textebas+'&nommeme='+nommeme+'&Xhaut='+Xhaut+'&Yhaut='+Yhaut+'&Xbas='+Xbas+'&Ybas='+Ybas);
        //envoyer les post avec ajax?
        
    }