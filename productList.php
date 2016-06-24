<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

include_once 'database.php';

//
// Write code to access the database and retrieve all products sorted by name
//
//
// Build a table of products with a delete button in last colum containing a hidden field
//  for the product id and an action that goes to DeleteProduct.php
//


$query = 'select * from products';
$products = $db->query($query);

include 'header.php';
?>
<div id="main">
<h1>Hello <?php echo $_SESSION['username']; ?></h1>
<table>
	<th>Name</th>
	<th>Price</th>
	<th></th>
	<?php foreach ($products as $product) { ?>
	<form action="DeleteProduct.php" method="post">
		<tr>
			<td><?php echo $product['productName']; ?></td>
			<td><?php echo $product['productPrice']; ?></td>
			<td>
					<input type="submit" name="btnDeleteProduct" value="Delete"></input>
					<input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>"></input>
			</td>
		</tr>
	</form>	
	<?php }; ?>
</table>

<a href="AddProductForm.php">Add Product</a>
<a href="logout.php"></a>

</div>
<?php
include 'footer.php';
?>