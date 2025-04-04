<?php
$cart_id = isset($_GET["cart_id"]) ? intval($_GET["cart_id"]) : 0;
$product_id = isset($_GET["product_id"]) ? intval($_GET["product_id"]) : 0;
if ($cart_id == 0) {
    echo "Cart not found 1!";
    exit;
}

if ($product_id == 0) {
    echo "Product not found 1!";
    exit;
}
include "../config/db.php";

$query = "DELETE FROM gio_hang_chua_san_pham WHERE cart_id = ? AND product_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $cart_id, $product_id);
$stmt->execute();

header("Location: cart.php?id=" . $cart_id);
