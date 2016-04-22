<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/simplesimon.css">
	<meta charset="UTF-8">
	<title>Simple Simon</title>
</head>
<body>
<h1>Simple Simon</h1>	
<div class="simonPieces">
	<div class="pieces" id="piece-1"></div>
	<div class="pieces" id="piece-2"></div>
	<div class="pieces" id="piece-3"></div>
	<div class="pieces" id="piece-4"></div>
	<div class="score" id="gameSet"></div>
	<button id="0" class="button button-1"></button>
	<button id="1" class="button button-2"></button>
	<button id="2" class="button button-3"></button>
	<button id="3" class="button button-4"></button>
	<button class="start" id="start">start</button>
</div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
<script>
"use strict";

(function() {	
		
//Need: 4 variables: buttons, start button, user-pressed buttons, simon

var buttons = document.getElementsByClassName('button');
var startGame = document.getElementById('start');

startGame.addEventListener('click', start, false);

var userPressed = [];
var simonSays = [];



function start () {
	simonSays = [];
	next();
	//console.log(this);
};

function next () {
	userPressed = [];
	randomButton();
	animation();
	allowUserClick();
	//console.log(allowUserClick);
	
};

function randomButton() {
	var random = Math.floor(Math.random()*4);
	simonSays.push(buttons[random].id);
	
};

function animation() {
	
	var i = 0; 

	var interval = setInterval(function(){
		flashingLights(document.getElementById(simonSays[i]));
		i++;

		if (i >= simonSays.length) {
			clearInterval(interval);
		}

	}, 500);
};

function flashingLights (element) {
	element.style.opacity ="0.3";
	var fade = setTimeout(function(){
	element.style.opacity ="1";
	},300);
};

function compare () {
	var wrongChoice = false;

	for (var i = 0; i < userPressed.length; i++) {
		console.log(userPressed.length,simonSays[i] != userPressed[i],i,simonSays[i], userPressed[i])
		if (simonSays[i] != userPressed[i]) {
			wrongChoice = true;
			alert("you done messed up!");
			break;
		}
	}
	console.log(userPressed, simonSays);
	if (wrongChoice) {
	} else if (userPressed.length == simonSays.length){
		next();
	} 
		
};

function userClick (element) {
	//console.log(element, this);
	var usersChoice = this.id;
	userPressed.push(usersChoice);	
	compare();
	

};

function allowUserClick () {
	document.getElementById('0').addEventListener('click', userClick, false);
	document.getElementById('1').addEventListener('click', userClick, false);
	//$('#1').click(function () { userClick(this) });
	document.getElementById('2').addEventListener('click', userClick, false);
	document.getElementById('3').addEventListener('click', userClick, false);	

};


//Need: start function, Next color function, Random button selector, animation sequence, light up function, compare the simon and user sequences (keeping score), game-over, users-choice click, game over button

}());	
</script>
</body>
</html>