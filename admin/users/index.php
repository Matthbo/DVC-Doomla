<?php require "index.logic.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin - Doomla</title>
	<link rel="stylesheet" href="../css/users.css">
</head>
<body>
	<h1>Users</h1>
	<a href="create.php"><button id="add">+ Add user</button></a>
	<a href=".."><button>Back</button></a>
	<table>
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