<?php
// Root directories
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
define('APP_DOMEN', $_SERVER['REQUEST_SCHEME']. '://' .$_SERVER['HTTP_HOST'] . '/');

// Data for connecting to the base
define("DBHOST", 	 "localhost");
define("DBUSERNAME", "root");
define("DBPASSWORD", "root");
define("DBNAME", 	 "music");

// Data for authorization
define("AUTH_TABLE", 		"user");
define("AUTH_PRIMARY_KEY", 	"user_id");
define("AUTH_PASSWORD", 	"password");
define("AUTH_TOKEN", 		"token");
define("AUTH_HEADER", 		"AUTH-TOKEN");

// Global Variables
$view_views_args = array();