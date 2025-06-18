<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Order placed! Thank you.";
    $_SESSION['cart'] = [];
    exit();
}
?>
<h1>Checkout</h1>
<form method="post">
    Shipping Address:<br>
    <textarea name="address" required></textarea><br>
    <input type="submit" value="Place Order">
</form>