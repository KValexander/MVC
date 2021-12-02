<?php
	// Core include
	include "core/server.php";
	include "core/database.php";
	include "core/router.php";
	include "core/model.php";

	// Helpers include
	include "core/helpers/view.php";
	include "core/helpers/response.php";
	include "core/helpers/include.php";

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
	if(!$server->search_route($_SERVER["REDIRECT_URL"]))
		echo "<h1>This path doesn't exist</h1>";
		// or return view("404"); in view

?>