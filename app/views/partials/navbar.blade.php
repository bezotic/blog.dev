<style>
	.navbar .navbar-default{
		background-color: #00D1B1;
		position:relative; 
		width:100%;
		margin-bottom: 0px !important;
		
	}

	.navbar-default {
		border: 0px !important;

	}

	.navbar-default .navbar-collapse, .navbar-default .navbar-form {
		border: 0px !important;
		margin-bottom: 1px;
	}

	.navbar-default .navbar-nav>li>a {
		color:white;
	}

	.navbar-default .navbar-nav>li>a:hover {
	    text-decoration: none;
	   	background-color: #00B69A;
		padding:0, 15;
		color:white;
		-webkit-transition: all 500ms ease;
		-moz-transition: all 500ms ease;
		-ms-transition: all 500ms ease;
		-o-transition: all 500ms ease;
		transition: all 500ms ease;
	}
	
	.nav-text {
		color:white;
		font-size: 1.2em;
	}

	.nav>li>a {
		
	}

	.user {
	    position: relative;
	    left: 50em;
	    top: 1em;

	}

	.search-bar {
		position:absolute;
	}

</style>

	    <!-- Brand and toggle get grouped for better mobile display -->
@if(Auth::user())
<nav class="navbar navbar-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
			<li><a class="nav-text" href="{{{action('PostsController@index')}}}" id='home'>Home</a></li>
			<li><a class="nav-text" href="{{{action('HomeController@projects')}}}"  id='projects' >Projects</a></li>
			<li><a class="nav-text" href="{{{action('UserController@edit')}}}"  id='projects' >Account</a></li>
			<li><a class="nav-text" href="{{{action('UserController@logout')}}}"  id='log-out' >Logout</a></li>
			<li><a class="nav-text" href="{{{action('UserController@showAbout')}}}"  id='about' >About</a></li>
	     
	    </div><!-- /.navbar-collapse -->
</nav>
@endif

@if(!Auth::user())
<nav class="navbar navbar-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
			<li><a class="nav-text" href="{{{action('UserController@showLogin')}}}"  id='log-out' >log-in</a></li>
			<li><a class="nav-text" href="{{{action('UserController@create')}}}"  id='log-out' >sign-up</a></li>
			<li><a class="nav-text" href="{{{action('UserController@showAbout')}}}"  id='about' >About</a></li>
			<li><a class="nav-text" href="{{{action('HomeController@projects')}}}"  id='projects' >Projects</a></li>
				     
	    </div><!-- /.navbar-collapse -->
</nav>
@endif