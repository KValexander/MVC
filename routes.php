<?php
	// Api route
	
	// Main middleware
	Router::group("MainMiddleware", function() {

		// Main page with other middleware
		Router::get("/api/main", function() {
			return response(200, "Home page");
		})->middleware("OtherMiddleware");

		Router::group("SideMiddleware", function() {

			Router::get("/api/main/{id}", function() {
				$request = new Request();
				return response(200, "ID received - ". $request->route("id") ."!");
			});

		});

	});