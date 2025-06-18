<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    header('Location: cart.php');
    exit();
}
?>
<h1>Your Cart</h1>
<ul>
<?php
foreach ($_SESSION['cart'] as $id => $qty) {
    echo "<li>Product ID: $id | Quantity: $qty</li>";
}
?>
</ul>
<a href="checkout.php">Checkout</a>