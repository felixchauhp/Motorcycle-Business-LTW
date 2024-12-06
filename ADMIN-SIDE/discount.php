<!DOCTYPE html>
<html lang="en">
<!--=============== HEADER ===============-->
<?php include 'head.php'; ?>
<body>
    <!--=============== HEADER ===============-->
    <?php include 'header.php'; ?>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== Promotion Management ===============-->
        <section class="products container section--lg">
            <div class="search-container">
                <a href="add-Discount.php" class="btn flex btn__md">
                    <i class="fi fi-rs-plus"></i> Thêm 1 mã khuyến mãi mới
                </a>
                <form method="GET" action="discount.php" class="right-actions">
                    <input type="text" id="search-input" name="search" placeholder="Tìm kiếm..." />
                    <input type="date" id="start-date" name="start_date">
                    <input type="date" id="end-date" name="end_date">
                    <button type="submit" class="btn flex btn__md" style="cursor: pointer;">Áp dụng</button>
                    <a href="discount.php" class="btn flex btn__md">Nhập lại</a>
                </form>
            </div>
            <table class="discount-table">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Code</th>
                        <th>Số lượng</th>
                        <th>Phần trăm (%)</th>
                        <th>Đơn hàng tối thiểu (VND)</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="edit-discount.php">
                                <i class="fi fi-rs-edit table__trash"></i>
                            </a>
                            <a href="show-discount.php">
                                <i class="fi fi-rs-menu-dots table__trash"></i>
                            </a>
                            <a href="#" class="delete-btn">
                                <i class="fi fi-rs-trash table__trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Popup xác nhận xóa -->
            <div id="confirmDelete" style="display:none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 9999;">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <p>Bạn có chắc chắn muốn xóa mã khuyến mãi này?</p>
                    <button type="submit" class="btn btn__md" id="confirmDeleteBtn">Xóa</button>
                    <button type="submit" class="btn btn__md" id="cancelDeleteBtn">Hủy</button>
                </div>
            </div>

            <!-- JavaScript để xử lý popup xác nhận -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const deleteButtons = document.querySelectorAll('.delete-btn');
                    const confirmDeletePopup = document.getElementById('confirmDelete');
                    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
                    const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
                    let promoCodeToDelete = null;

                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();
                            promoCodeToDelete = button.getAttribute('data-code');
                            confirmDeletePopup.style.display = 'block';
                        });
                    });

                    cancelDeleteBtn.addEventListener('click', function() {
                        confirmDeletePopup.style.display = 'none';
                    });

                    confirmDeleteBtn.addEventListener('click', function() {
                        if (promoCodeToDelete) {
                            window.location.href = 'delete_discount.php?promo_code=' + promoCodeToDelete;
                        }
                    });
                });
            </script>
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <?php include 'footer.php'; ?>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>
