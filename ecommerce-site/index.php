<?php include 'includes/db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - E-commerce</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Welcome to the Store</h1>
<div class="products">
<?php
$result = $conn->query("SELECT * FROM products");
while($row = $result->fetch_assoc()) {
    echo "<div class='product'>
            <img src='products/product-images/{$row['image']}' alt='{$row['name']}'>
            <h3>{$row['name']}</h3>
            <p>Price: $ {$row['price']}</p>
            <a href='cart.php?add={$row['id']}'>Add to Cart</a>
          </div>";
}
?>
</div>
<a href="cart.php">View Cart</a>
</body>
</html>