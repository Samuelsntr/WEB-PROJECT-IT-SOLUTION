<?php 
require "../connection.php";

function hapusData($ids) {
    global $conn;

    $delete = "DELETE FROM customers WHERE id = $ids";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}

?>