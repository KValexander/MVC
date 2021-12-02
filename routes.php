<?php
	// Starting route
	Router::get("/", function() {
		return view("welcome");
	});

?>