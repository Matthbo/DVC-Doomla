<?php require_once "delete.logic.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete page - Doomla</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<h1>Delete page</h1>
	<p>Are you sure you want to remove the following page?</p>
	<form method="post" id="delform">
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="submit" name="confirmed" value="Yes">
		<input type="submit" name="cancelled" value="No">
	</form>

	<div>
		<label>Page:</label>
		<p><?=$page?></p>
	</div>
	<div>
		<label>Menu-option:</label>
		<p><?=$menu?></p>
	</div>
	<div>
		<label>Under:</label>
		<p><?=$under?></p>
	</div>
	<div>
		<label>Content:</label>
		<section><?=$content?></section>
	</div>
</body>
</html>