<?php
// Main middleware
class MainMiddleware extends Middleware {
	// Handling
	public function handle() {
		// var_dump("main_middleware");
		response_share(["main" => "completed"]);
		return true;
	}
}