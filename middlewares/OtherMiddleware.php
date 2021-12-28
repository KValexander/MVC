<?php
// Other middleware
class OtherMiddleware extends Middleware {
	// Handling
	public function handle() {
		// var_dump("side_middleware");
		response_share(["other" => "completed"]);
		return true;
	}
}