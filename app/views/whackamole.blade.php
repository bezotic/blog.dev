@extends('layouts.master')

	@section('top-script')
	<link rel="stylesheet" href="/css/whackamole.css">
   	<title>Whackamole</title>

   	@stop

   	@section('content')
		<div class="container">
		<h1>Guackamole</h1>	
		<h3>Get dat Guap</h3>

		<div class="divRow1">
			<button id="button1" class="button button-1"> 
				<img src="\image\avocado.png" class="avocado" id="a1" alt=""></button>
			<button id="button2" class="button button-2">
				<img src="\image\avocado.png" class="avocado" id="a2" alt=""></button>
			</button>

			<button id="button3" class="button button-3">
				<img src="\image\avocado.png" class="avocado" id="a3" alt=""></button>
			</button>
		</div>
		<div class="divRow2">
			<button id="button4" class="button button-4">
				<img src="\image\avocado.png" class="avocado" id="a4" alt=""></button>
			</button>
			<button id="button5" class="button button-5">
				<img src="\image\avocado.png" class="avocado" id="a5" alt=""></button>
			</button>
			<button id="button6" class="button button-6">
				<img src="\image\avocado.png" class="avocado" id="a6" alt=""></button>
			</button>
		</div>

		<div class="divRow3">
			<button id="button7" class="button button-7">	
			<img src="\image\avocado.png" class="avocado" id="a7" alt="">
			</button>
			<button id="button8" class="button button-8">
				<img src="\image\avocado.png" class="avocado" id="a8" alt=""></button>
			</button>
			<button id="button9" class="button button-9">
				<img src="\image\avocado.png" class="avocado" id="a9" alt=""></button>
			</button>

			<div class="startGame">
			<button type="button" id="start" class="btn btn-default">Start</button>
			<textarea class="control" id="score" placeholder="your score"></textarea>
			<textarea class="control" id="timer" placeholder="time left"></textarea>
			</div>
		</div>
		</div>
		<div class="animatedImages">
			<img src="/image/swagacado.jpeg" class="swacado"></img>
			<img src="/image/chipotle.jpeg" class="chipotle"></img>
			<img src="/image/gucci.gif" class="gucci" id="guap"></img>
		</div>
		<h3 id="theme">Get That Guap</h3>

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
		<script>
		"use strict";
		
		(function(){
		var gameRound = 1;

		var counter = 30;

		var interval = 1500; 

		var score = 0;

		var buttons = document.getElementsByClassName('button');

		var scoreBox = document.getElementById('score');

		var startButton = document.getElementById('start');

		var timerBox = document.getElementById('timer');

		startButton.addEventListener('click', gamePlay);

		var whackamole = [];

		$("#guap").hide()


		function gamePlay () {

			var giveMeAMole = setInterval(function(){

				if(counter == 0) {

					console.log("gameRound: "+gameRound);
					clearInterval(giveMeAMole);
					
				} else {

					counter--;
					timerBox.innerHTML = "Seconds left to play: "+counter;


					console.log("Seconds left to play: "+counter);
					var random = Math.floor((Math.random()*9) + 1);
					whackamole.push(random);
					console.log(whackamole);
					animationMole(random);

				}


			}, interval);

		} //end startGame

		function animationMole(random) {

			$("#a"+random).slideDown(interval).slideUp(interval);
			
		};

		var userChoice = document.getElementsByClassName("avocado");

		for (var i=0; i<userChoice.length; i++) {

			userChoice[i].addEventListener('click',function(){
		  	
			score++;

			console.log("My score: "+score);

			scoreBox.innerHTML ="Score: " + score;


			});


		} 

		  $(".avocado").click(function(){
		        $(".swacado").animate({"left":"+=50px"})
		        $("#guap").show();



		  })


		})();

   	</script>
   	@stop	