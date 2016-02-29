<?php 
require "../common/config.php";
require "../common/crud.php";
require "access.php";

function getUnderOptions($pages){
	GLOBAL $id;

	$options = "<option value='NULL'>None</option>";
	$current_id = read("pagecontent", "id='$id'", null, "assoc")["pagecontent_id"];

	foreach($pages as $page){
		$page_id = $page["id"];
		$menuoption = $page["menuoption"];
		$menuorder = $page["menuorder"];
		$pagecontent_id = $page["pagecontent_id"];

		$selected = "";

		if($pagecontent_id == null && $menuorder != -1 && $page_id != $id){
			if($page_id == $current_id) {$selected = "selected";}

			$options .= "<option value='$page_id' $selected>$menuoption</option>";
		}
	}
	return $options;
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
	$pagecontent = NULL;
	if(isset($_GET["id"])){
		checkAccess();

		$id = $db->escape_string($_GET["id"]);
		
		$pagecontent = read("pagecontent", "id=$id", null, "assoc");

		$page = $pagecontent["page"];
		$menu = $pagecontent["menuoption"];
		$order = $pagecontent["menuorder"];
		$content = $pagecontent["content"];
		$template = $pagecontent["template"];

		$pages = read("pagecontent", null, "menuorder", "all");
	}
	if($pagecontent == NULL){
		header("Location: ./");
		exit();
	}
}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["confirmed"])){
		checkAccess();

		$id = $db->escape_string($_POST["id"]);
		$page = $db->escape_string($_POST["page"]);
		$menu = $db->escape_string($_POST["menu"]);
		$order = $db->escape_string($_POST["order"]);
		$under = $db->escape_string($_POST["under"]);
		$content = $db->escape_string($_POST["content"]);
		$template = $db->escape_string($_POST["template"]);

		update("pagecontent", "page='$page', menuoption='$menu', menuorder='$order', content='$content', template='$template', pagecontent_id=$under", "id='$id'");
	}

	header("Location: ./");
	exit();
}