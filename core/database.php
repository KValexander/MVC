<?php
class DB {
	public static $connect;

	// Constructor
	public static function connect($host, $login, $password, $name) {
		if($host == "" or $name == "") return;
		
		// Database connection
		self::$connect = new mysqli($host, $login, $password, $name);
		// Checking the connection
		if(self::$connect->onnect_error)
			die("Ошибка ". self::$connect->connect_error);
	}

	// Request to the base
	public static function query($sql) {
		return self::$connect->query($sql);
	}

}
?>