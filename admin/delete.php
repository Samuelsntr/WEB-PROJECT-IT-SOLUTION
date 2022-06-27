<?php
require "../connection.php";
include "functions.php";
// include database connection file
 
// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM customers WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
