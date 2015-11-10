<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Create a new product</title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div id="container">
			<h2>Add a new product</h2>
				<form method="post" action="/products/create">
					Name <input type="text" name="name">
					Description <input type="text" name="desc">
					Price <input type="text" name="price">
					<input type="submit" name="create" value="Create">
				</form>
				<a href="/">Go back</a>
			</div>
		</div>
	</body>
</html>