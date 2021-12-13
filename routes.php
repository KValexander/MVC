<?php
	// Api route
	Router::get("/api/main", function() {
		return response(200, "Home page");
	});

	Router::get("/api/main/{id}", function() {
		$request = new Request();
		return response(200, "ID received - ". $request->route("id") ."!");
	});