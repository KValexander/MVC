<?php
// Session middleware
class SessionMiddleware extends Middleware {
	// Handling
	public function handle() {
		view_share(["auth" => $this->auth->check()]);
		return true;
	}
}