<?php
// Side middleware
class SideMiddleware extends Middleware {
	// Handling
	public function handle() {
		// var_dump("side_middleware");
		response_share(["side" => "completed"]);
		return true;
	}
}