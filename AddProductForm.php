<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

/*
 * This page will edit and add product data to the database.
 */

require('database.php');

include 'header.php';
?>
<div id='main'>
<?php if (isset($errorMsg)) {
	echo ($errorMsg);
} ?>

<form action="AddProduct.php" method="Post">
	<table id="no_border">
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="txtName"></input>
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>
				<input type="text" name="txtPrice"></input>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnAddProduct" value="Add Product"></input>
			</td>
		</tr>
	</table>
	<br/>
	<br/>
     <a href="productList.php">View Product List</a>
     <a href="logout.php">Logout</a>
</form>
</div>

<?php

include "footer.php";
?>

