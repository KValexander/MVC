<?php
// Auth controller
class AuthController extends Controller {

	// Register page
	public function register_page() {
		return view("register");
	}

	// Login page
	public function login_page() {
		return view("login");
	}

	// Register
	public function register() {
		// Validator
		$validator = $this->validator->make($this->request->all(), [
			"username" => "required|string",
			"login" => "required|string|unique:user,login",
			"password" => "required|string",
		]);
		// Check validator
		if($validator->fails)
			return view("/register", ["errors" => $validator->errors]);

		// Get data
		$username = $this->request->input("username");
		$login = $this->request->input("login");
		$password = crypt($this->request->input("password"));

		// Adding data to the database
		$user = $this->db->table("user")->insert([
			"username" => $username,
			"login" => $login,
			"password" => $password,
		]);

		return redirect("/login");
	}

	// Login
	public function login() {
		$login = $this->request->input("login");
		$password = $this->request->input("password");

		if($this->auth->attempt(["login" => $login, "password" => $password], true)) {
			return redirect("/");
		} else return redirect("/login");
	}

}
?>