<?php
	// Include include
	include "core/helpers/include.php";

	// Core and helpers include
	include_files("core/");

	// Models include
	include_files("models/");

	// Others include
	include "routes.php";

	// Data for connecting to the base
	define("LOCALHOST", "");
	define("USERNAME", 	"");
	define("PASSWORD", 	"");
	define("DBNAME", 	"");

	// Server
	$server = new Server();

	// Check and processing route in case of availability
	if(!$server->search_route($_SERVER["REQUEST_URI"]))
		echo "<h1>This path doesn't exist</h1>";
		// or return view("404"); in view

?>