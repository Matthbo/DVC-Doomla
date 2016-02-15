<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin - Doomla</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<a href="logout.php">Logout</a>
	<a href="users" id="users">Users</a>
	<a href="create.php"><button id="add">+ Add page</button></a>
	<table>
		<thead>
			<tr>
				<th>Pages</th>
				<th>Content</th>
				<th>Template</th>
				<th>Menu-options</th>
				<th>Menu-order</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?=getTableRows()?>
		</tbody>
	</table>
</body>
</html>