<?php
session_start();
include("includes/db.php");

if (isset($_POST['id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['id'];
    $quantity = $_POST['quantity'];

    // Validasi jika quantity adalah angka positif
    if (!is_numeric($quantity) || $quantity <= 0) {
        echo "Quantity harus menjadi angka positif.";
        exit();
    }

    $ip_add = getRealUserIp();

    $update_cart = "UPDATE cart SET qty='$quantity' WHERE p_id='$product_id' AND ip_add='$ip_add'";
    $run_update = mysqli_query($con, $update_cart);

    if ($run_update) {
        echo "Cart updated successfully";
        exit();
    } else {
        echo "Failed to update cart";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>
