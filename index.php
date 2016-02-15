<?php 
require "common/config.php";
require "common/crud.php";

$page = isset($_GET["page"]) ? $_GET["page"] : "home";

$res = read("pagecontent", "page='$page'", null, "assoc");

$content = $res["content"];
$temp = $res["template"];
$menuoption = $res["menuoption"];

if($content == null)$content = "Couldn't find the page!";
$template = $temp != NULL ? $temp : "template.php";

function getTitle(){
	GLOBAL $menuoption;
	return $menuoption;
}

function getContent(){
	GLOBAL $content;
	return $content;
}

function getMenu(){
	GLOBAL $db;
	GLOBAL $page;

	$options = read("pagecontent", null, "menuorder", "all");

	$menu = "<ul>";

	foreach($options as $option){
		$class = $option["page"] == $page ? "class='active'" : "";
		if(empty($option["menuoption"]) || $option["pagecontent_id"] != null) continue;
		$menu .= "<li><a href='?page=". $option["page"] ."'". $class .">". $option["menuoption"] ."</a>";

		$id = $option["id"];
		$subpages = read("pagecontent", "pagecontent_id='$id'", null, "all");

		if($subpages != null){
			$menu .= "<ul class='submenu'>";

			foreach($subpages as $subpage){
				$spage = $subpage["page"];
				$class = $spage == $page ? "class='active'" : "";
				$menuoption = $subpage["menuoption"];

				$menu .= "<li><a href='?page=$spage' $class>$menuoption</a>";
			}

			$menu .= "</ul>";
		}

		$menu .= "</li>";
	}

	$menu .= "</ul>";

	return $menu;
}

require "module.php";
require "templates/$template";