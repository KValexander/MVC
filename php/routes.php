<?php
	// Start page
	Router::get("/", function() {
		return view("welcome");
	});

?>