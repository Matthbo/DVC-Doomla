<?php 
require "../common/config.php";
require "../common/crud.php";
require "access.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
	$pagecontent = NULL;
	if(isset($_GET["id"])){
		checkAccess();

		$id = $db->escape_string($_GET["id"]);
		
		$pagecontent = read("pagecontent", "id='$id'", null, "assoc");

		$page = $pagecontent["page"];
		$menu = $pagecontent["menuoption"];
		$content = $pagecontent["content"];
		$pagecontent_id = $pagecontent["pagecontent_id"];

		$under = read("pagecontent", "id='$pagecontent_id'", null, "assoc")["menuoption"];
	}
	if($pagecontent == NULL){
		header("Location: ./");
		exit();
	}
}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["confirmed"])){
		checkAccess();

		$id = $db->escape_string($_POST["id"]);

		delete("pagecontent", "id='$id'");
	}
	header("Location: ./");
	exit();
}