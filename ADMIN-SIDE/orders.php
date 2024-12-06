<!DOCTYPE html>
<html lang="en">
<!--=============== HEAD ===============-->
  <?php include 'head.php' ?>
<body>
  <!--=============== HEADER ===============-->
<?php include 'header.php' ?>
  
  <!--=============== ORDER ===============-->   
  <main class="main">
    <section class="products section--lg container">
      <div class="search-container">
        <form class="right-actions">
          <input type="text" id="search-input" name="search" placeholder="Tìm kiếm..." style="margin-right: auto;" />
          <!-- Lọc trạng thái -->
          <select id="status-filter" name="status" style="font-family: inherit; font-size: inherit;">
            <option>Tất cả trạng thái</option>
            <option>Đã xác nhận</option>
            <option>Đã đóng gói</option>
            <option>Đã giao</option>
            <option>Đã hủy</option>
          </select>
          <!-- Lọc thanh toán -->
          <select id="payment-filter" name="payment" style="font-family: inherit; font-size: inherit;">
            <option>Tất cả thanh toán</option>
            <option>Thành công</option>
            <option>Thất bại</option>
            <option>Đang chờ</option>
          </select>
          <input type="date">
          <input type="date">
          <button type="submit" class="btn flex btn__md" style="cursor: pointer;">Áp dụng</button>
          <a href="orders.php" class="btn flex btn__md" style="cursor: pointer;">Nhập lại</a>
        </form>
      </div>

      <table class="product-table">
        <thead>
          <tr>
            <th>Mã đơn hàng</th>
            <th>Mã khách hàng</th>
            <th>Thành tiền (VND)</th>
            <th>Ngày tạo đơn</th>
            <th>Trạng thái</th>
            <th>Thanh toán</th>
            <th>Tùy chọn</th>
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
            <td>
                <!-- Nút In -->
                <a href="bill-order.php">
                     <i class="fi fi-rs-print table__trash"></i>
                </a>
                <!-- Nút Chỉnh suawr -->
                <a href="edit-order.php">
                     <i class="fi fi-rs-edit table__trash"></i>
                </a>
                <!-- Nút hiển thị chi tiết đơn hàng -->
                <a href="show-order.php">
                     <i class="fi fi-rs-menu-dots table__trash"></i>
                </a>
                <!-- Nút xóa -->
                <a href="#" class="delete-btn">
                     <i class="fi fi-rs-trash table__trash"></i>
                </a>
            </td>
          </tr>
        </tbody>
      </table>

      <ul class="pagination">
        <li><a href="#" class="pagination__link disabled">«</a></li>
        <li><a href="#" class="pagination__link active">1</a></li>
        <li><a href="#" class="pagination__link">2</a></li>
        <li><a href="#" class="pagination__link">3</a></li>
        <li><a href="#" class="pagination__link">»</a></li>
      </ul>

      <!-- Popup xác nhận xóa -->
      <div id="confirmDelete" style="display:none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 9999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
          <p>Bạn có chắc chắn muốn xóa đơn hàng này?</p>
          <button type="button" class="btn btn__md" id="confirmDeleteBtn">Xóa</button>
          <button type="button" class="btn btn__md" id="cancelDeleteBtn">Hủy</button>
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
  <?php include 'footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
