<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>All Products</title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div id="container">
			<h2>Products</h2>
			<div id="products">
				<table>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Actions</th>
					</tr>
<?php 			foreach ($this->session->userdata('data') as $product) {
					echo "<tr> 
							<td>". $product['name']. "</td>
							<td>". $product['description']. "</td>
							<td>". $product['price']. "</td>
							<td><a href='products/show/". $product['id']. "'>Show</a> | 
								<a href='products/edit/". $product['id']. "'>Edit</a> | 
								<form method='post' action='products/destroy/". $product['id']. "''>
									<input type='submit' name='". $product['id']. "' value='Remove'>
								</form>
							</td>
						</tr>";
				} 
?>						
					

					</tr>
					


				</table>
				

			</div>
			<a href="products/new_product">Add a new product</a>
		</div>
	</body>
</html>
