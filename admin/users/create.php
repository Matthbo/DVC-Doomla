<?php require "create.logic.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create user - Doomla</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<h1>Add user</h1>
	<form method="post">
		<div>
			<label>Username:</label>
			<input type="text" name="user">
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="pass">
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Save">
			<input type="submit" name="canceled" value="Cancel">
		</div>
	</form>
</body>
</html>