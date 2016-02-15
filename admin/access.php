<?php 

function getAccessUsername(){
	GLOBAL $db;
	if(isset($_COOKIE["token"]) && isset($_COOKIE["username"])){
		$username = $_COOKIE["username"];
		$token = $_COOKIE["token"];
		$now = time();

		$user = read("user", "username='$username' and token='$token'", null, "assoc");

		if($user != null && $user["expiry"] > $now){
			return $username;
		}
	}
	return false;
}

function setAccess($username){
	GLOBAL $db;
	$token = (string) rand(1, 9999999);
	$expiry = time() + 600;

	setcookie("token", $token, $expiry, "/");
	setcookie("username", $username, $expiry, "/");

	update("user", "token='$token', expiry='$expiry'", "username='$username'");
}

function checkAccess(){
	$username = getAccessUsername();

	if($username == false){
		header("Location: login.php");
		exit();
	}
	setAccess($username);
}

function checkUserAccess(){
	$username = getAccessUsername();

	if($username == false){
		header("Location: ../login.php");
		exit();
	}
	setAccess($username);
}