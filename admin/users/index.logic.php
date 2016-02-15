<?php
require "../../common/config.php";
require "../../common/crud.php";
require "../access.php";

$db = new mysqli('localhost', 'root', '', 'doomla');

checkUserAccess();

$query = "select * from user order by username";
$result = $db->query($query);

$users = $result->fetch_all(MYSQLI_ASSOC);

function getTableRows(){
	GLOBAL $users;

	$tableRows = "";
	foreach($users as $user){
		$username = $user["username"];
		$tableRows .= "<tr><td>$username</td><td><a href='edit.php?name=$username'><button>Change password</button></a></td><td><a href='delete.php?name=$username'><button>Delete</button></a></td></tr>";
	}

	return $tableRows;
}