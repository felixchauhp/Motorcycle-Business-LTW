<?php
$input = file_get_contents('php://input');
$data = json_decode($input, true);
if (!isset($data['cart'])) {
    echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ.']);
    exit;
}


// Kết nối cơ sở dữ liệu
include "../config/db.php";

$cartItems = $data['cart'];
$success = true;

$cart_id = $cartItems[0]['cart_id'];

foreach ($cartItems as $item) {
    $productId = intval($item['product_id']);
    $quantity = intval($item['quantity']);
    $cartId = intval($item['cart_id']);

    // Cập nhật số lượng trong cơ sở dữ liệu
    $query = "UPDATE gio_hang_chua_san_pham SET quantity = ? WHERE cart_id = ? AND product_id = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt->bind_param("iii", $quantity, $cartId, $productId) || !$stmt->execute()) {
        $success = false;
        break;
    }
}

// Gửi phản hồi về client
echo json_encode(['success' => $success, 'cart_id' => $cart_id]);
