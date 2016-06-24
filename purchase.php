
 <?php
require('database.php');

//
// Write code to access the database and retrieve all products sorted by name
//

$query = 'select * from products';
$products = $db->query($query);

include 'header.php';
?>
<section>
	<table id="purchaseMaterials">
		<tr>
			<td>
				<h1>Product</h1>
			</td>
			<td>
				<h1>Price</h1>
			</td>
		</tr>
		<?php foreach ($products as $product) { ?>
		<tr>
			<td><?php echo $product['productName']; ?></td>
			<td><?php echo $product['productPrice']; ?></td>
		</tr>
		<?php }; ?>
	</table>
	<p>Free delivery on orders over five yards</p>
</section>
 <?php 
include 'footer.php';
 ?>