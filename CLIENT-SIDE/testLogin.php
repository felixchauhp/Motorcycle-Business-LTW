<?php
session_start();
// Kết nối tới cơ sở dữ liệu
include '../config/db.php';

// Biến để lưu trạng thái lỗi
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM nguoi_dung WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password == $user['Password']) {
            // Đăng nhập thành công

            $_SESSION["user_id"] = $user['ID']; // Sử dụng session để quản lý người dùng
            $_SESSION["username"] = $user['username'];
            header("Location: index.php");
            exit;
        } else {
            // Đăng nhập thất bại
            $error = "Sai tài khoản hoặc mật khẩu!";
        }
    } else {
        // Đăng nhập thất bại
        $error = "Sai tài khoản hoặc mật khẩu!";
    }

    if (!empty($error)) {
        echo "<script>alert('$error'); window.location.href='errorLogin.html';</script>";
    }
}
