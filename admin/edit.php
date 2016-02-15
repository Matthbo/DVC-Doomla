<?php require_once "edit.logic.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit page - Doomla</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<h1>Edit page</h1>
	<form method="post">
		<div>
			<label>Page:</label>
			<input type="text" name="page" value="<?=$page?>" placeholder="<?=$page?>">
		</div>
		<div>
			<label>Menu-option:</label>
			<input type="text" name="menu" value="<?=$menu?>" placeholder="<?=$menu?>">
		</div>
		<div>
			<label>Menu-order:</label>
			<input type="number" name="order" value="<?=$order?>">
		</div>
		<div>
			<label>Content:</label>
			<textarea name="content" placeholder="<?=$content?>"><?=$content?></textarea>
		</div>
		<div>
			<label>Onder:</label>
			<select name="under">
				<?=getUnderOptions($pages)?>
			</select>
		</div>
		<div>
			<label>Template:</label>
			<input type="text" name="template" value="<?=$template?>" placeholder="Leave empty for default">
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Save">
			<input type="submit" name="cancelled" value="Cancel">
			<input type="hidden" name="id" value="<?=$id?>">
		</div>
	</form>
</body>
</html>