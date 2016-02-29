<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin - Doomla</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style>
		body{padding:10px;background-color:#f2f2f2;}.table{margin-top:10px;margin-bottom:0;background-color:white;}.table a button{width:52px; margin-bottom:5px;}#add{float:right;}#users{margin-left:10px;}
	</style>
</head>
<body>
	<a href="logout.php"><button>Logout</button></a>
	<a href="users" id="users"><button>Users</button></a>
	<a href="create.php" id="add"><button>+ Add page</button></a>
	<table class="table table-striped table-bordered">
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