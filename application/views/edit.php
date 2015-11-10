<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Edit Product</title>
		<style type="text/css">
		</style>
		<base href="http://localhost:8888/">
	</head>
	<body>
		<div id="container">
			<h2>Edit Product <?= $id; ?></h2>
<?=			"<form method='post' action='products/update/". $id. "'>"
?>
				Name<input type="text" name="ename">
				Description<input type="text" name="edesc">
				Price<input type="text" name="eprice">
				<input type="submit" name="update" value="Update">
			</form>
<?=			"<a href='products/show/". $id. "'>Show</a> | "
?>
			<a href="/">Back</a>
		</div>
	</body>
</html>