<?php
	// SessionMiddleware
	Router::group("SessionMiddleware", function() {
		// Main page
		Router::get("/", "MainController@main_page");
		// Register page
		Router::get("/register", "AuthController@register_page");
		// Login page
		Router::get("/login", "AuthController@login_page");

		// Register
		Router::post("/register", "AuthController@register");
		// Login
		Router::post("/login", "AuthController@login");

		// Logout
		Router::get("/logout", function() {
			$auth = new Authenticate();
			$auth->logout();
			return redirect("/");
		});
	});

?>