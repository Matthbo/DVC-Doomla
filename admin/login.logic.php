<?php 
require "../common/config.php";
require "../common/crud.php";

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	require "access.php";

	$username = $db->escape_string($_POST["username"]);
	$password = $db->escape_string($_POST["password"]);

	$user = read("user", "username='$username' and password='$password'", null, "assoc");

	if($user != null){
		setAccess($username);
		header("Location: ./");
		exit();
	}

	$error = "Wrong username/password.";
}