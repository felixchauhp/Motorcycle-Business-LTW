<!DOCTYPE html>
<html lang="en">
 <!--=============== HEAD ===============-->
 <?php include 'head.php'; ?>
<body>
  <!--=============== HEADER ===============-->
  <?php include 'header.php'; ?>

    <!--=============== MAIN ===============-->
    <main class="main">
        <section class="promotions container section--lg">
            <div id="promotionForm">
                <h2 style="text-align: center;">Chi tiết mã giảm giá</h2>
                <br>
                <form id="view-promotion" method="POST" action="">
                    <label for="promo-name">Tên mã:</label>
                    <input 
                        type="text" 
                        id="promo-name" 
                        value="Tên mã giảm giá" 
                        readonly
                    />

                    <label for="promo-code">Mã khuyến mãi:</label>
                    <input 
                        type="text" 
                        id="promo-code" 
                        value="Mã giảm giá" 
                        readonly
                    />

                    <div id="promotion-dates">
                        <div>
                            <label for="promotion-start-date">Ngày bắt đầu:</label>
                            <input 
                                type="date" 
                                id="promotion-start-date" 
                                value="2024-01-01" 
                                readonly
                            />
                        </div>
                        <div>
                            <label for="promotion-end-date">Ngày kết thúc:</label>
                            <input 
                                type="date" 
                                id="promotion-end-date" 
                                value="2024-12-31" 
                                readonly
                            />
                        </div>
                    </div>

                    <div class="percent-input">
                        <label for="percent-discount">Giá trị giảm (%):</label>
                        <input 
                            type="number" 
                            id="percent-discount" 
                            value="10" 
                            readonly
                        />
                    </div>

                    <label for="min-order">Giá trị đơn hàng tối thiểu:</label>
                    <input 
                        type="number" 
                        id="min-order" 
                        value="50000" 
                        readonly
                    />

                    <label for="max-discount">Số tiền giảm tối đa:</label>
                    <input 
                        type="number" 
                        id="max-discount" 
                        value="100000" 
                        readonly
                    />

                    <label for="quantity">Số lượng:</label>
                    <input 
                        type="number" 
                        id="quantity" 
                        value="100" 
                        readonly
                    />

                    <br>
                    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <!-- Nút quay lại -->
                    <button
                        type="button" 
                        class="btn flex btn__md" 
                        onclick="window.location.href='discount.php'">
                        Quay lại
                    </button>

                    <!-- Nút chỉnh sửa -->
                    <button 
                        type="button" 
                        class="btn flex btn__md" 
                        onclick="window.location.href='edit-discount.php?promoCode=promoCodeExample'">
                        Chỉnh sửa
                    </button>
                </div>

                </form>
            </div>
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
