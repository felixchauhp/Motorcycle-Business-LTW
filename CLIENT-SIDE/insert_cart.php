<?php
session_start();
include '../config/db.php';
$product_id = isset($_POST["product_id"]) ? intval($_POST["product_id"]) : 0;
$quantity = isset($_POST["quantity"]) ? intval($_POST["quantity"]) : 0;
if ($product_id == 0) {
    echo "Product not found!";
    exit;
}

$user_id = isset($_POST["user_id"]) ? intval($_POST["user_id"]) : 0;

if ($user_id == 0) {
    echo "User not found!";
    exit;
}

$query = "SELECT * FROM gio_hang WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    //gio hang
    $cart_id = $result->fetch_assoc()["ID"];


    //check current product in cart

    $query = "SELECT * FROM gio_hang_chua_san_pham WHERE product_id = ? AND cart_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $product_id, $cart_id);
    $stmt->execute();

    $result = $stmt->get_result();

    //current cart contain product

    if ($result->num_rows > 0) {
        $current_quantity = $result->fetch_assoc()["quantity"];
        $new_quantity = $current_quantity + $quantity;
        $query =  "UPDATE gio_hang_chua_san_pham SET quantity = ? WHERE product_id = ? AND cart_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iii", $new_quantity, $product_id, $cart_id);
        $stmt->execute();
        header("Location: cart.php?id=" . $cart_id);
        exit;
    } else {
        $query2 = "INSERT INTO gio_hang_chua_san_pham (cart_id,product_id,quantity) VALUES (?,?,?)";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bind_param("iii", $cart_id, $product_id, $quantity);
        $stmt2->execute();
        header("Location: cart.php?id=" . $cart_id);
        exit;
    }
} else {
    $query3 = "INSERT INTO gio_hang (user_id) VALUES (?)";
    $stmt3 = $conn->prepare($query3);
    $stmt3->bind_param("i", $user_id);
    $stmt3->execute();

    $cart_id = $conn->insert_id;

    $query4 = "INSERT INTO gio_hang_chua_san_pham (cart_id,product_id,quantity) VALUES (?,?,?)";
    $stmt4 = $conn->prepare($query4);
    $stmt4->bind_param("iii", $cart_id, $product_id, $quantity);
    $stmt4->execute();
    header("Location: cart.php?id=" . $cart_id);
}
