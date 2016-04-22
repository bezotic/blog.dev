<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/blog.css">
	@yield('top-script')
	<style>
		.img {
			display:none;
		}

	</style>
</head>

<body>
	@include('partials.navbar')
	<div class="page-wrap">
	@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	<img class='img img1' id='img1' src='/image/flying_lotus.jpg'>
	@yield('content')
	
	@include('partials.footer')
	</div>
	<script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
	 "use strict";

	
var simplemde = new SimpleMDE({ element: document.getElementById("body") });


	 var images = document.getElementsByClassName('img');

	 var randomImages = [];

	 function randomImages() {
		var random = Math.floor(Math.random()*4);
		randomImages.push(images[random].class);
	
	};	


		
		setTimeout(function() {
		$('.alert').hide(1000);
		},1000);



       // Up, up, down, down, left, right, left, right, b, a
		var key = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
		 a = 0;
		$(document).keydown(function (event) {
    		if (event.keyCode == key[a++]) {
        	if (a == key.length) {
           

            setTimeout(function() {
			$('.img').show(100);
			},100);

			 setTimeout(function() {
			$('.img').hide(100);
			},100);



           
            a = 0;
		            return false;
		        }
		    }
		    else {
		        a = 0;
		    }
		});


	</script>
	@yield('bottom-script')
</body>
</html>