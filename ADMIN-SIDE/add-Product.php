<!DOCTYPE html>
<html lang="en">
  <!--=============== HEADER ===============-->
  <?php include 'head.php'; ?>

  <body>
    <!--=============== HEADER ===============-->
    <?php include 'header.php'; ?>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== Product Management ===============-->
      <section class="products container section--lg">
        <!-- Form to add a new product -->
        <div id="productForm">
          <h2 style="text-align: center;">Thêm sản phẩm</h2>
          <br />
          <form id="add-product" method="POST" action="">
            <label for="product-id">Mã sản phẩm:</label>
            <input type="text" id="product-id" name="product-id" required />

            <label for="product-name">Tên sản phẩm:</label>
            <input type="text" id="product-name" name="product-name" required />

            <label for="product-supplier">Nhà cung cấp:</label>
            <input type="text" id="product-supplier" name="product-supplier" required />

            <label for="product-category">Danh mục:</label>
            <select id="filter-input" name="product-category" required>
              <option value="" disabled selected>Chọn</option>
              <option value="vo-xe-ruot-xe">Vỏ xe và ruột xe</option>
              <option value="nhong-sen-dia">Nhông sên dĩa</option>
              <option value="bac-dan">Bạc đạn</option>
              <option value="nhot">Nhớt</option>
              <option value="ac-quy">Ắc quy</option>
              <option value="bo-dia-bo-thang">Bố đĩa và bố thắng</option>
              <option value="phu-kien-khac">Các phụ kiện khác</option>
            </select>

            <label for="product-info">Mô tả:</label>
            <textarea id="product-info" name="product-info" required></textarea>

            <label for="product-function">Công dụng:</label>
            <input type="text" id="product-function" name="product-function" required />

            <label for="product-quantity">Tồn kho:</label>
            <input type="number" id="product-quantity" name="product-quantity" required />

            <label for="product-unit">Đơn vị tính:</label>
            <input type="text" id="product-unit" name="product-unit" required />

            <div id="product-prices">
              <div>
                <label for="product-original-price">Giá gốc:</label>
                <input type="number" id="product-original-price" name="product-original-price" required />
              </div>
              <div>
                <label for="product-price">Giá bán:</label>
                <input type="number" id="product-price" name="product-price" required />
              </div>
            </div>

            <label for="product-image">Product image:</label>
            <input type="file" id="product-image" accept="image/*" required />

            <label for="product-note">Ghi chú:</label>
            <textarea id="product-note" name="product-note" required></textarea>

            <br />
            <button type="submit">Thêm</button>
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
