<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
/* 
 *   Logic to delete a product from the database is here
 */


    
require('database.php');

if (isset($_POST['btnDeleteProduct'])) {
    $productCode = $_POST['productCode'];
    $query = "delete from products where productCode = '$productCode';";
    //
    //write the SQL to delete a product from the database\
    // wrap it in a try-catch block and use the database error page to display any 
    // errors

    try {
        $delete = $db->query($query);
    } catch (Exception $e) {
        echo "$error_message";
        include 'database_error.php';
    }

    //
    //if the product is successfully deleted from the database
    //  navigate to the product list page by uncommenting the following line
    
        include 'productList.php';
    
    
     
}

    //the following line will navigate to the product list
     header("Location: productList.php");


?>