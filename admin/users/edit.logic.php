<?php 
require "../../common/config.php";
require "../../common/crud.php";
require "../access.php";

$error = "";

if($_SERVER["REQUEST_METHOD"] == "GET"){
	$user = NULL;
	if(isset($_GET["name"])){
		checkUserAccess();

		$name = $db->escape_string($_GET["name"]);
		
		$user = read("user", "username='$name'", null, "assoc");
	}
	if($user == NULL){
		header("Location: ./");
		exit();
	}
}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["confirmed"])){
		checkUserAccess();

		$name = $db->escape_string($_POST["name"]);
		$old = $db->escape_string($_POST["old"]);
		$new = $db->escape_string($_POST["new"]);

		$user = read("user", "username='$name' and password='$old'", null, "assoc");

		if($user != null){
			update("user", "password='$new'", "username='$name'");

			header("Location: ./");
			exit();
		}

		$error = "Wrong password!";
	}
	header("Location: ./");
	exit();
}