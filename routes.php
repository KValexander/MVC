<?php
	// Api route
	Router::get("/api/main", function() {
		return response(200, "It's work!");
	});

	Router::get("/api/main/{id}", function() {
		$request = new Request();
		return response(200, "ID received!");
	});