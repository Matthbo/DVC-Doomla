<?php require 'login.logic.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login - Doomla</title>
	<style type="text/css">
		label {
			display : inline-block;
			width : 100px;
			vertical-align: top;
		}
		p{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<form method="post">
		<p><?=$error?></p>
		<div>
			<label>Username:</label>
			<input type="text" name="username">
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="password">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Login">
		</div>
	</form>
</body>
</html>