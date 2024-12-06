<!DOCTYPE html>
<html lang="en">
 <!--=============== HEAD ===============-->
 <?php include 'head.php'; ?>
<body>
  <!--=============== HEADER ===============-->
  <?php include 'header.php'; ?>
   <!--=============== MAIN ===============-->
  <main class="main">
    <section class="products section--lg container">
        <div class="search-container">
            <a href="add-Product.php" class="btn flex btn__md">
                <i class="fi fi-rs-plus"></i> Thêm 1 sản phẩm mới
            </a>
            <form method="GET" action="products.php" class="right-actions">
                <input type="text" id="search-input" name="search" placeholder="Tìm kiếm..." />
                <select id="filter-input" name="filter" style="font-family: inherit; font-size: inherit;">
                    <option value="" selected>Tất cả trạng thái</option>
                    <option value="Ắc quy">Ắc quy</option>
                    <option value="Bạc đạn">Bạc đạn</option>   
                    <option value="Bố đĩa và bố thắng">Bố đĩa và bố thắng</option>
                    <option value="Nhông sên dĩa">Nhông sên dĩa</option>
                    <option value="Nhớt">Nhớt</option>
                    <option value="Vỏ xe và ruột xe">Vỏ xe và ruột xe</option>
                    <option value="Các phụ kiện khác">Các phụ kiện khác</option>
                </select>
                <button type="submit" class="btn flex btn__md" style="cursor: pointer; ">Áp dụng</button>
                <a href="products.php" class="btn flex btn__md" style="cursor: pointer;  ">Nhập lại</a>
            </form>
        </div>

            <table class="product-table">
                <thead>
                    <tr>
                        <th>Ảnh</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Tồn kho</th>
                        <th>Giá gốc (VND)</th>
                        <th>Giá bán (VND)</th>
                        <th>Ghi chú</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Hiển thị danh sách sản phẩm -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                             <!-- Nút chỉnh sửa -->
                            <a href="edit-product.php">
                                <i class="fi fi-rs-edit edit-icon"></i>
                            </a>
                            
                            <!-- Nút xem chi tiết -->
                            <a href="../CLIENT-SIDE/details.php">
                                <i class="fi fi-rs-menu-dots go-to-icon"></i>
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
        <!-- Nút trang trước -->
        <li><a href="#" class="pagination__link disabled">«</a></li>

        <!-- Các số trang -->
        <li><a href="#" class="pagination__link">1</a></li>

        <!-- Nút trang tiếp -->
        <li><a href="#" class="pagination__link disabled">»</a></li>
    </ul>

                   <!-- Popup xác nhận xóa -->
                   <div id="confirmDelete" style="display:none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 9999; display: none;">
              <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                  <p>Bạn có chắc chắn muốn xóa mã khuyến mãi này?</p>
                  <button type="submit" class="btn btn__md" id="confirmDeleteBtn" >Xóa</button>
                  <button type="submit" class="btn btn__md" id="cancelDeleteBtn" >Hủy</button>
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
                            promoCodeToDelete = button.getAttribute('data-code'); // Lấy PromoCode từ data attribute
                            confirmDeletePopup.style.display = 'block'; // Hiển thị popup
                        });
                    });

                    cancelDeleteBtn.addEventListener('click', function() {
                        confirmDeletePopup.style.display = 'none'; // Ẩn popup
                    });

                    confirmDeleteBtn.addEventListener('click', function() {
                        if (promoCodeToDelete) {
                            window.location.href = 'delete_discount.php?promo_code=' + promoCodeToDelete; // Chuyển hướng đến file PHP xử lý xóa
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
    <script src="assets/js/main.js"></script>
</body>
</html>
