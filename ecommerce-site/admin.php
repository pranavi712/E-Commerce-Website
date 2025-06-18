<?php
include 'includes/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $stmt = $conn->prepare("INSERT INTO products (name, price, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $image);
    $stmt->execute();
    echo "Product added.";
}
?>
<h2>Add Product</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Price: <input type="text" name="price" required><br>
    Image Filename: <input type="text" name="image" required><br>
    <input type="submit" value="Add Product">
</form>