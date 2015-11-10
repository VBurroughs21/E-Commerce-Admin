<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Product Info</title>
		<style type="text/css">
			ul {
				list-style-type: none;
			}
		</style>
		<base href="http://localhost:8888/">
	</head>
	<body>
		<div id="container">
			<h2>Product <?= $id; ?></h2>
			<ul>
				<li>Name: <?= $name; ?></li>
				<li>Description: <?= $description; ?></li>
				<li>Price: <?= $price; ?></li>
			</ul>
<?= 			
			"<a href='products/edit/". $id. "'>Edit</a> |
			<a href='/'>Back</a>";
?>
		</div>
	</body>
</html>