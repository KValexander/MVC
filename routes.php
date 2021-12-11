<?php
	// Api route
	Router::get("/api/main", function() {
		return response(200, "It's work!");
	});