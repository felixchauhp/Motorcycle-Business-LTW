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
      <section class="promotions container section--lg">
        <!-- Button to add a new promotion -->
        <div id="promotionForm">
          <h2 style="text-align: center;">Thêm mã khuyến mãi</h2>
          <br />
          <form id="add-promotion" method="POST" action="add-Discount.php">
            <label for="promo-name">Tên mã:</label>
            <input type="text" id="promo-name" name="promo-name" required />


            <label for="promo-code">Mã khuyến mãi:</label>
            <input type="text" id="promo-code" name="promo-code" required />


            <div id="promotion-dates">
              <div>
                <label for="promotion-start-date">Ngày bắt đầu:</label>
                <input type="date" id="promotion-start-date" name="promotion-start-date" required />

              </div>
              <div>
                <label for="promotion-end-date">Ngày kết thúc:</label>
                <input type="date" id="promotion-end-date" name="promotion-end-date" required />

              </div>
            </div>

            <div class="percent-input">
              <label for="percent-discount">Giá trị giảm (%):</label>
              <input type="number" id="percent-discount" name="percent-discount" />
  
            </div>

            <label for="min-input">Giá trị đơn hàng tối thiểu:</label>
            <input type="number" id="min_order" name="min_order" required />


            <label for="max-input">Số tiền giảm tối đa:</label>
            <input type="number" id="max_discount" name="max_discount" required />


            <label for="quantity">Số lượng:</label>
            <input type="number" id="quantity" name="quantity" required />

            <br />
            <button type="submit" class="btn flex btn__md">Thêm</button>
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
