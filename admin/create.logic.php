<?php 
require "../common/config.php";
require "../common/crud.php";
require "access.php";

function getUnderOptions($pages){
	$options = "<option value='NULL'>None</option>";
	foreach($pages as $page){
		$id = $page["id"];
		$menuoption = $page["menuoption"];
		$menuorder = $page["menuorder"];
		$pagecontent_id = $page["pagecontent_id"];

		if($pagecontent_id == null && $menuorder != -1){
			$options .= "<option value='$id'>$menuoption</option>";
		}
	}
	return $options;
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
	checkAccess();

	$query = "select MAX(menuorder) AS max from pagecontent";
	$result = $db->query($query)->fetch_assoc();

	$minOrder = (int) $result["max"] + 1;

	$pages = read("pagecontent", null, "menuorder", "all");

}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["confirmed"])){
		checkAccess();

		$page = $db->escape_string($_POST["page"]);
		$menu = $db->escape_string($_POST["menu"]);
		$order = $db->escape_string($_POST["order"]);
		$under = $db->escape_string($_POST["under"]);
		$content = $db->escape_string($_POST["content"]);
		$template = $db->escape_string($_POST["template"]);

		if(empty($menu)){
			$order = $db->escape_string(-1);
			$under = NULL;
		}
		
		create("pagecontent", "page, content, template, menuoption, menuorder, pagecontent_id", "'$page', '$content', '$template', '$menu', '$order', $under");
	}

	header("Location: ./");
	exit();
}