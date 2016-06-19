<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
/* 
 *   Logic to edit and add a product to the database is here
 */

require('database.php');

if (isset($_POST['btnAddProduct'])) {
    
    //
    //edit the data
    $txtName = $_POST['txtName'];
    $txtPrice = $_POST['txtPrice'];
    $errorMsg = "";
   
    $name;
    $price;


    //
    //if data is ok add a product to the database 
   //
    if (trim($txtName) && trim($txtPrice) != "") {
    	$name = trim($txtName);
    	$price = trim($txtPrice);
    	$query = "insert into products
    				(productName, productPrice)
    			values
    				('$name', '$price')";
    	$success = $db->query($query);

    	include 'ProductList.php';
    	return;
    }
    
   //
   //if data is NOT ok - show error message and redisplay form
   //
       if (trim($txtName) || trim($txtPrice) == "") {
    	$errorMsg = $errorMsg."Please Enter Data in all Fields";
    	include 'AddProductForm.php';
    	return;
    }
    
}

//we should get here only if data was ok and added to the database
//include 'index.php'; //This will take you to the index.php for product_manager or the product list
 header("Location: ProductList.php");

?>
