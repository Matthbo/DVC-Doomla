<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=getTitle()?> - Doomla</title>
	<link rel="stylesheet" href="templates/css/template.css">
</head>
<body>
	<section>
		<nav>
			<?=getMenu()?>
		</nav>
		<header>
			<h1>Doomla</h1>
		</header>
		<article>
			<?=getContent()?>
		</article>
		<aside>
			<?=getModule('contact')?>
		</aside>
		<footer>
			<p>Made by Matthijs Booman - 2016</p>
		</footer>
	</section>
</body>
</html>