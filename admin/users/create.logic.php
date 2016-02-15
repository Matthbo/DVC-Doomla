<?php 
require "../../common/config.php";
require "../../common/crud.php";
require "../access.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["confirmed"])){
		checkUserAccess();

		$username = $db->escape_string($_POST["user"]);
		$password = $db->escape_string($_POST["pass"]);

		create("user", "username, password, token, expiry", "'$username', '$password', 0, 0");
	}

	header("Location: ./");
	exit();
}