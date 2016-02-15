<?php require_once "edit.logic.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit page - Doomla</title>
	<link rel="stylesheet" href="../css/admin.css">
	<style>
		p{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Change password</h1>
	<form method="post">
		<p><?=$error?></p>
		<div>
			<label>Old password:</label>
			<input type="password" name="old">
		</div>
		<div>
			<label>New password:</label>
			<input type="password" name="new">
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Save">
			<input type="submit" name="cancelled" value="Cancel">
			<input type="hidden" name="name" value="<?=$name?>">
		</div>
	</form>
</body>
</html>