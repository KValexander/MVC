<?php
	// Core include
	include "core/server.php";
	include "core/database.php";
	include "core/router.php";
	include "core/model.php";

	// Helpers include
	include "helpers/view.php";
	include "helpers/response.php";

	// Models include
	$files = scandir("models"); unset($files[0]); unset($files[1]);
	foreach($files as $file) include "models/". $file;

	// Other include
	include "routes.php";

	// Server
	$server = new Server();
	// Connect to database
	DB::connect("localhost", "root", "root", "music");

	// Check and processing route in case of availability
	if(!$server->search_route($_SERVER["REQUEST_URI"]))
		echo "Route not found";

?>