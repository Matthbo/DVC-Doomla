<?php require_once "delete.logic.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete page - Doomla</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<h1>Delete user</h1>
	<p>Are you sure you want to remove the following user?</p>
	<form method="post" id="delform">
		<div>
			<label>Username:</label>
			<p><?=$username?></p>
		</div>
		<div>
			<input type="hidden" name="name" value="<?=$name?>">
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="cancelled" value="No">
		</div>
	</form>
	
</body>
</html>