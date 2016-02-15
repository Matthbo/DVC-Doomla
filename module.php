<?php

function getModule($page){
	GLOBAL $db;

	$query = "select * from pagecontent where page='$page'";
	$result = $db->query($query)->fetch_assoc();

	if($result != null) return $result["content"];
	return "";
}