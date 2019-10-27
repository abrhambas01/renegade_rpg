<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-gray-800 h-20">
	<a class="navbar-brand text-lg font-bold text-white hover:text-gray-300" href="#">Renegade RPG</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link text text-white text-md" href="/browse-missions">Campaigns<span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-white text-md" href="">Walkthroughs</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white text-md" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Game Guides
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Guides</a>
					<a class="dropdown-item" href="#">Wikis</a>
					<a class="dropdown-item" href="#">Walkthroughs</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white text-md" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Factions
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Join a Faction</a>
					<a class="dropdown-item" href="#">Create a New Faction</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white text-md" href="#" tabindex="-1">Player Rankings</a>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white text-md" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					John Doe
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Add a Weapon</a>
					<a class="dropdown-item" href="#">Submit a Guide</a>
					<a class="dropdown-item" href="#">Submit a Walkthrough</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Account Settings</a>
					<a class="dropdown-item" href="#">Payment Options</a>
					<a class="dropdown-item" href="#">Logout</a>
				</div>
			</li>
		</ul>

		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2 p-4" type="search" placeholder="Username / Email" aria-label="">
			<button class="btn btn-outline-success border-black-1 my-2 my-sm-0" type="submit">Search for a Player.</button>
		</form>
	</div>
</nav>

<div class="container mt-2">
	<!-- <ul class="list-group list-group-flush  w-1/3">
		<li class="list-group-item rounded-none active">
			<a class="text-white text-lg " href="/browse-missions">Setup your Account</a>
		</li>

		<li class="list-group-item rounded-none"><a class="text-gray-600 text-lg rounded-none" href="/browse-missions">Buy Weapons</a>
		</li>
	</ul>
-->

<!-- <ul class="list-group list-group-horizontal text-black text-right">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
</ul>
-->

<div class="flex w-full">
	<div class="list-group w-1/3 mr-2">
		<a href="#" class="list-group-item list-group-item-action active">
			<div class="d-flex w-100 justify-content-between">
				<svg class="text-black h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
				<h5 class="mb-1">Setup Account</h5>
			</div>
			<small>Setting up your character is necessary for you to have a persona in game, it involves setting up your character name, you can pay for ssome perks in game.</small>
		</a>
		<a href="#" class="list-group-item list-group-item-action">
			<div class="d-flex w-100 justify-content-between">
				<svg class="text-black h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8.4 12H2.8L1 15H0V5h1l1.8 3h5.6L6 0h2l4.8 8H18a2 2 0 1 1 0 4h-5.2L8 20H6l2.4-8z"/></svg>
				<h5 class="mb-1">Browse Missions</h5>
			</div>
			<small>Setting up your account is very necessary, it involves setting up your character name</small>
		</a>
		<a href="#" class="list-group-item list-group-item-action">
			<div class="d-flex w-100 justify-content-between">
				<svg class="text-black h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 0l6 4 8-4 6 4v16l-6-4-8 4-6-4V0zm7 6v11l6-3V3L7 6z"/></svg>
				<h5 class="mb-1">View Game Map</h5>
			</div>
			<small>A bird's eye of the continent, wherein you can show the map and your position in the map.</small>
		</a>
		<a href="#" class="list-group-item list-group-item-action">
			<div class="d-flex w-100 justify-content-between">
				<svg class="h-6 w-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"><path fill-rule="evenodd" d="M7 0L0 2v6.02C0 12.69 5.31 16 7 16c1.69 0 7-3.31 7-7.98V2L7 0zM5 11l1.14-2.8a.568.568 0 0 0-.25-.59C5.33 7.25 5 6.66 5 6c0-1.09.89-2 1.98-2C8.06 4 9 4.91 9 6c0 .66-.33 1.25-.89 1.61-.19.13-.3.36-.25.59L9 11H5z"/></svg>
				<h5 class="mb-1t">Weapons</h5>
			</div>
			<small>Browse all weapons that were listed in game. From Helms to Shields to Bladed Weapons, you can find it here.</small>
		</a>
		<a href="#" class="list-group-item list-group-item-action">
			<div class="d-flex w-100 justify-content-between">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"/></svg>
				<h5 class="mb-1t">Browse Wikis</h5>
			</div>
			<small>Game wikis for you</small>
		</a>
	</div>

<!-- 
	<div class="jumbotron text-gray-900 w-3/4">
		<h1 class="display-4">Hello, John Doe</h1>
		<p class="lead">Setting up your account is easy as 1,2,3. Specify your character name, character type, avatar, your faction and your overall persona in-game </p>
		<hr class="my-4">
		<p>The game needs your basic credentials in order for you to play your game. </p>
		<a class="p-4 btn btn-success btn-lg" href="#" role="button">Redirect me to account setup page</a>

		<a class="btn btn-primary btn-lg" href="#" role="button">Log me out for the meantime</a>
	</div> -->

