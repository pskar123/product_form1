<?php
// Connect to the database (replace with your database credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'your_database';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$title = $_POST['title'];
$description = $_POST['description'];
$sale_price = $_POST['sale_price'];
$regular_price = $_POST['regular_price'];
$status = $_POST['status'];
$sku_code = $_POST['sku_code'];
$category = $_POST['category'];

// Upload image
$image_name = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_path = "images/" . $image_name;
move_uploaded_file($image_tmp, $image_path);

// Insert data into the products table
$sql = "INSERT INTO products (title, description, sale_price, regular_price, status, sku_code, category, image)
        VALUES ('$title', '$description', '$sale_price', '$regular_price', '$status', '$sku_code', '$category', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
