<?php
session_start();
include("includes/db.php");

if (isset($_POST['id'])) {
    $product_id = $_POST['id'];

    $ip_add = getRealUserIp();

    $delete_product = "DELETE FROM cart WHERE p_id='$product_id' AND ip_add='$ip_add'";
    $run_delete = mysqli_query($con, $delete_product);

    if ($run_delete) {
        echo "Item deleted successfully";
        exit();
    } else {
        echo "Failed to delete item";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>
