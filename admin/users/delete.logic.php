<?php 
require "../../common/config.php";
require "../../common/crud.php";
require "../access.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
	$user = NULL;
	if(isset($_GET["name"])){
		checkUserAccess();

		$name = $db->escape_string($_GET["name"]);
		
		$user = read("user", "username='$name'", null, "assoc");

		$username = $user["username"];
	}
	if($user == NULL){
		header("Location: ./");
		exit();
	}
}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["confirmed"])){
		checkUserAccess();

		$name = $db->escape_string($_POST["name"]);

		delete("user", "username='$name'");
	}
	header("Location: ./");
	exit();
}