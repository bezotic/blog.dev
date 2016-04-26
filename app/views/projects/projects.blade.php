@extends('layouts.master')

@section('top-script')
	<style>


	img {

    border: 10px solid #d3d3d3;
    box-shadow: 5px 5px 5px #dddddd;
	}

	.image-row {
		padding-left: 20px;
		padding-bottom: 20px;
	}

	.guac-image {
		margin-right: 15px;
		  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
	}

	.simon-image {
		margin-right: 15px;
		  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
	}

	.weather-image {
		margin-right: 15px;
		  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
	}

	.guac-image:hover {
		-webkit-filter: blur(2px);
	}

	.simon-image:hover {
		-webkit-filter: blur(2px);
	}

	.weather-image:hover {
		-webkit-filter: blur(2px);
	}

	@media (max-width: 400px) {
		img {
			width: 100%;
    		height: auto;
    	}
	}

	</style>

@stop

@section('content')
 <div class='container'>
	<h1>My Projects</h1>
	<h3>Clicking on the images takes you to the projects</h3>
	<div class="row">
		<div class="image-row">
			<span class="guac-image">
				<a href="{{{action('HomeController@whackamole')}}}" class="project" title="Whackamole"><img src="/image/guac.png" /></a>
			</span>
			<span class="simon-image">	
				<a href="{{{action('HomeController@simplesimon')}}}" class="project" title="Simple Simon"><img src="/image/simon.png" /></a>
			</span>
			<span class="weather-image">
				<a href="{{{action('HomeController@weathermap')}}}" class="project" title="Weather Map"><img src="/image/weather.png" /></a>
			</span>
		</div>
	</div>



 </div>
@stop

@section('bottom-script')

@stop