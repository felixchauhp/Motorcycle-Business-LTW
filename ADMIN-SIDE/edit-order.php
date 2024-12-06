<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
<?php include 'header.php'; ?>

<main class="main">
    <section class="wishlist section--lg container">
        <h2 style="text-align: center;">Chỉnh sửa đơn hàng</h2>
        <div class="order-detail-container">
            <p><strong>Mã đơn hàng:</strong> [Order ID]</p>
            <p><strong>Ngày đặt hàng:</strong> [Order Date]</p>
            <p><strong>Tên khách hàng:</strong> [Customer Name]</p>
            <p><strong>Email:</strong> [Customer Email]</p>
            <p><strong>Số điện thoại:</strong> [Customer Phone]</p>
            <p><strong>Địa chỉ giao hàng:</strong> [Shipping Address]</p>
        </div>
        <br>
        <form method="POST" id="editOrderForm">
            <!-- Trạng thái đơn hàng và thanh toán -->
            <div class="status-container">
                <div class="status-item">
                    <i class="fas fa-box"></i>
                    <label for="order_status">Trạng thái đơn hàng:</label>
                    <select name="order_status" id="order_status" required>
                        <option value="Đã xác nhận">Đã xác nhận</option>
                        <option value="Đã đóng gói">Đã đóng gói</option>
                        <option value="Đã giao">Đã giao</option>
                        <option value="Đã hủy">Đã hủy</option>
                    </select>
                </div>
                <div class="status-item">
                    <i class="fas fa-wallet"></i>
                    <label for="payment_status">Trạng thái thanh toán:</label>
                    <select name="payment_status" id="payment_status" required>
                        <option value="Thành công">Thành công</option>
                        <option value="Thất bại">Thất bại</option>
                        <option value="Đang chờ">Đang chờ</option>
                    </select>
                </div>
            </div>

            <!-- Bảng sản phẩm -->
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
                    <!-- Example Product Row -->
                    <tr>
                        <td>[Product ID]</td>
                        <td>[Product Name]</td>
                        <td>
                            <input type="number" name="quantity[ProductID]" value="[Quantity]" min="0" class="quantity-input" data-price="[Sale Price]" required>
                        </td>
                        <td>[Sale Price] VND</td>
                        <td class="product-total">[Total Price] VND</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" style="text-align: right; font-weight: bold;">Tổng cộng:</td>
                        <td id="totalAmount">[Total Amount] VND</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right; font-weight: bold;">Giảm giá:</td>
                        <td>[Discount] VND</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right; font-weight: bold;">Tổng thanh toán:</td>
                        <td id="totalDue">[Total Due] VND</td>
                    </tr>
                </tfoot>
            </table>
            <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                <button type="submit" class="btn flex btn__md">Lưu thay đổi</button>
                <button type="button" class="btn flex btn__md" onclick="window.location.href='show-order.php?OrderID=[OrderID]'">Hủy</button>
            </div>
        </form>
    </section>
</main>

<script>
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const totalAmountEl = document.getElementById('totalAmount');
    const totalDueEl = document.getElementById('totalDue');
    const discount = 0; // Replace with discount value

    quantityInputs.forEach(input => {
        input.addEventListener('input', () => {
            const row = input.closest('tr');
            const price = parseFloat(input.dataset.price);
            const quantity = parseInt(input.value) || 0;
            const productTotalEl = row.querySelector('.product-total');

            // Update total price
            const total = price * quantity;
            productTotalEl.textContent = total.toLocaleString() + ' VND';

            // Update total amount
            let totalAmount = 0;
            document.querySelectorAll('.quantity-input').forEach(input => {
                const qty = parseInt(input.value) || 0;
                const prc = parseFloat(input.dataset.price);
                totalAmount += qty * prc;
            });
            totalAmountEl.textContent = totalAmount.toLocaleString() + ' VND';

            // Update total due
            totalDueEl.textContent = (totalAmount - discount).toLocaleString() + ' VND';
        });
    });
</script>

<?php include 'footer.php'; ?>
<!--=============== SWIPER JS ===============-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
