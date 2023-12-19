<?php
// upload_image.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get order ID from the form
    $order_id = $_POST['order_id'];

    // Check if the file was uploaded without errors
    if ($_FILES['order_image']['error'] == UPLOAD_ERR_OK) {
        // Specify the directory where you want to store the uploaded images
        $upload_dir = "order_images/";

        // Create the directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        // Generate a unique filename
        $image_name = uniqid('order_image_') . '.' . pathinfo($_FILES['order_image']['name'], PATHINFO_EXTENSION);

        // Move the uploaded file to the specified directory
        move_uploaded_file($_FILES['order_image']['tmp_name'], $upload_dir . $image_name);

        // Save the image information to your database (you should have an 'order_images' table)
        $insert_image = "INSERT INTO order_images (order_id, image_name) VALUES ('$order_id', '$image_name')";
        $run_image = mysqli_query($con, $insert_image);

        if ($run_image) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error uploading image to the database.";
        }
    } else {
        echo "Error uploading image.";
    }
}
?>