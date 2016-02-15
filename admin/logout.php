<?php 
require "../common/config.php";
require "../common/crud.php";
require "access.php";

$username = getAccessUsername();

if($username != false){
	update("user", "token='0', expiry='0'", "username='$username'");

	setcookie("username", "", 1);
	setcookie("token", "", 1);
}

header("Location: login.php");
exit();