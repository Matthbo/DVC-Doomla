<?php require "index.logic.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin - Doomla</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style>
		body{width:1280px;margin:0 auto;background-color:#f2f2f2;}.table{margin-top:10px;margin-bottom:0;background-color:white;}thead th:first-child{width:70%;}tbody tr td:last-child{width: 15%;}tbody tr td{text-align:center;}tbody tr td:first-child{text-align:left;}#add{float:right;}
	</style>
</head>
<body>
	<h1>Users</h1>
	<a href="create.php" id="add"><button>+ Add user</button></a>
	<a href=".."><button>Back</button></a>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>User</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?=getTableRows()?>
		</tbody>
	</table>
</body>
</html>