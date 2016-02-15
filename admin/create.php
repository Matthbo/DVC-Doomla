<?php require_once "create.logic.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create page - Doomla</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<h1>Add page</h1>
	<form method="post">
		<div>
			<label>Page:</label>
			<input type="text" name="page">
		</div>
		<div>
			<label>Menu-option:</label>
			<input type="text" name="menu">
		</div>
		<div>
			<label>Menu-order:</label>
			<input type="number" name="order" min="<?=$minOrder?>" value="<?=$minOrder?>">
		</div>
		<div>
			<label>Content:</label>
			<textarea name="content"></textarea>
		</div>
		<div>
			<label>Onder:</label>
			<select name="under">
				<?=getUnderOptions($pages)?>
			</select>
		</div>
		<div>
			<label>Template:</label>
			<input type="text" name="template" placeholder="Leave empty for default">
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Save">
			<input type="submit" name="canceled" value="Cancel">
		</div>
	</form>
</body>
</html>