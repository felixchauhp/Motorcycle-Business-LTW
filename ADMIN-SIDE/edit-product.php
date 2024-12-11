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
        <div id="productForm">
          <h2 style="text-align: center;">Chỉnh sửa sản phẩm</h2>
          <br>
          <form id="edit-product" method="POST">
            <label for="product-id">Mã sản phẩm:</label>
            <input type="text" id="product-id" name="product-id" value="" readonly />

            <label for="product-name">Tên sản phẩm:</label>
            <input type="text" id="product-name" name="product-name" value="" required />
<!-- 
            <label for="product-supplier">Nhà cung cấp:</label>
            <input type="text" id="product-supplier" name="product-supplier" value="" required />

            <label for="product-category">Danh mục:</label>
            <select id="filter-input" name="product-category" required>
              <option value="" disabled>Chọn</option>
              <option value="Ắc quy">Ắc quy</option>
              <option value="Bạc đạn">Bạc đạn</option>
              <option value="Bố đĩa và bố thắng">Bố đĩa và bố thắng</option>
              <option value="Nhông sên dĩa">Nhông sên dĩa</option>
              <option value="Nhớt">Nhớt</option>
              <option value="Vỏ xe và ruột xe">Vỏ xe và ruột xe</option>
              <option value="Các phụ kiện khác">Các phụ kiện khác</option>
            </select> -->

            <!-- <label for="product-info">Mô tả:</label>
            <textarea id="product-info" name="product-info" required></textarea>

            <label for="product-function">Công dụng:</label>
            <input type="text" id="product-function" name="product-function" value="" required />

            <label for="product-quantity">Tồn kho:</label>
            <input type="number" id="product-quantity" name="product-quantity" value="0" required />

            <label for="product-unit">Đơn vị tính:</label>
            <input type="text" id="product-unit" name="product-unit" value="" required /> -->

            <div id="product-prices">
              <div>
                <label for="product-original-price">Giá gốc:</label>
                <input type="number" id="product-original-price" name="product-original-price" value="0" required />
              </div>
              <div>
                <label for="product-price">Giá bán:</label>
                <input type="number" id="product-price" name="product-price" value="0" required />
              </div>
              <div>
                <label for="product-price">Giá giảm:</label>
                <input type="number" id="product-price" name="product-price" required />
              </div>
            </div>

            <label for="product-rate">Điểm đánh giá:</label>
            <textarea id="product-rate" name="product-rate" required></textarea>

            <label for="product-image-link">Link ảnh sản phẩm:</label>
            <textarea id="product-image-link" name="product-image-link" required></textarea>

            <!-- <label for="product-note">Ghi chú:</label>
            <textarea id="product-note" name="product-note"></textarea> -->

            <br>
            <button type="submit">Cập nhật</button>
          </form>
        </div>
      </section>
    </main>

     <!--=============== FOOTER ===============-->
  <?php include 'footer.php'; ?>

    <script src="assets/js/main.js"></script>
  </body>
</html>
