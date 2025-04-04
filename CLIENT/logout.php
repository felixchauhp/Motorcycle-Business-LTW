<?php
session_start(); // Bắt đầu phiên

// Hủy toàn bộ dữ liệu phiên
session_unset();
session_destroy();

// Chuyển hướng về trang đăng nhập hoặc trang chủ
header("Location: login.php");
exit;
