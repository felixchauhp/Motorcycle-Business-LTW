<!DOCTYPE html>
<html lang="en">
<!--=============== HEAD ===============-->
<?php include 'head.php'; ?>
<body>
<!--=============== HEADER ===============-->
<?php include 'header.php'; ?>

<!--=============== MAIN ===============-->
<main class="main">
    <section class="wishlist section--lg container">
        <h2 style="text-align: center;">Chi tiết đơn hàng</h2>
        <div class="order-detail-container">
            <p><strong>Mã đơn hàng:</strong> OrderIDExample</p>
            <p><strong>Ngày đặt hàng:</strong> 2024-12-06</p>
            <p><strong>Tên khách hàng:</strong> Nguyen Thi Mai</p>
            <p><strong>Email:</strong> example@mail.com</p>
            <p><strong>Số điện thoại:</strong> 0901234567</p>
            <p><strong>Địa chỉ giao hàng:</strong> 123 Street, City</p>
            <p><strong>Trạng thái thanh toán:</strong> Đã thanh toán</p>
            <p><strong>Trạng thái đơn hàng:</strong> Đang xử lý</p>
        </div>

        <table class="product-table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Sản phẩm A</td>
                    <td>2</td>
                    <td>500,000 VND</td>
                    <td>1,000,000 VND</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Sản phẩm B</td>
                    <td>1</td>
                    <td>300,000 VND</td>
                    <td>300,000 VND</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align: right; font-weight: bold;">Tổng cộng:</td>
                    <td>1,300,000 VND</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right; font-weight: bold;">Giảm giá:</td>
                    <td>100,000 VND</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right; font-weight: bold;">Tổng thanh toán:</td>
                    <td>1,200,000 VND</td>
                </tr>
            </tfoot>
        </table>

        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
            <!-- Nút quay lại -->
            <button
                type="button" 
                class="btn flex btn__md" 
                onclick="window.location.href='orders.php'">
                Quay lại
            </button>

            <!-- Nút chỉnh sửa -->
            <button 
                type="button" 
                class="btn flex btn__md" 
                onclick="window.location.href='edit-order.php?OrderID=OrderIDExample'">
                Chỉnh sửa
            </button>
        </div>

    </section>
</main>

<!--=============== FOOTER ===============-->
<?php include 'footer.php'; ?>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>
</body>
</html>
