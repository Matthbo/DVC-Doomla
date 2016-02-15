<?php

require "../common/config.php";
require "../common/crud.php";
require "access.php";

checkAccess();

$pagecontent = read("pagecontent", null, "menuorder", "all");

function getTableRows(){
	GLOBAL $pagecontent;

	$tableRows = "";
	foreach($pagecontent as $pcontent){
		$id = $pcontent["id"];
		$page = $pcontent['page'];
		$content = $pcontent['content'];
		$template = $pcontent['template'];
		$menuOption = $pcontent['menuoption'];
		$menuOrder = $pcontent['menuorder'];

		$template = $template != NULL ? $template : "Default";

		$tableRows .= "<tr><td>$page</td><td>$content</td><td>$template</td><td>$menuOption</td><td>$menuOrder</td><td><a href='edit.php?id=$id'><button>Edit</button></a><a href='delete.php?id=$id'><button>Delete</button></a></td></tr>";
	}
	return $tableRows;
}

require "../templates/admin.php";