<script>
    window.onload = function() {
        window.print();
    };
</script>
<!DOCTYPE html>
<html lang="en">
  <!--=============== HEAD ===============-->
  <?php include 'head.php'; ?>
  <body>
    <!--=============== MAIN ===============-->
    <main class="main">
      <section class="invoice section--lg container">
        <!-- Container cho logo và tiêu đề -->
        <div class="invoice-header">
          <div class="seller-logo">
            <img src="assets/img/logo.png" alt="Logo Nhà Bán Hàng" />
          </div>
          <h1 class="invoice-Stitle">HÓA ĐƠN BÁN HÀNG</h1>
        </div>

        <br />
        <div class="seller-and-buyer-info">
          <!-- Thông tin nhà bán hàng -->
          <div class="seller-info">
            <p><strong> Công ty CP-TM-DV Xe Gắn Máy (MotorCycle Joint-Stock Company Vietnam)</strong></p>
            <p><strong>Địa chỉ:</strong> 100 phường Đông Hòa, TP. Dĩ An, tỉnh Bình Dương, Việt Nam</p>
            <p><strong>Số điện thoại:</strong> +84 001 929 992</p>
            <p><strong>Email:</strong> contact@motorcycle.vn</p>
          </div>

          <!-- Thông tin người mua -->
          <div class="buyer-info">
            <p><strong>Mã đơn hàng:</strong> Mẫu_OrderID</p>
            <p><strong>Tên khách hàng:</strong> Nguyễn Văn A - C0001</p>
            <p><strong>Địa chỉ giao hàng:</strong> 123 Đường ABC, TP. Hồ Chí Minh</p>
            <p><strong>Số điện thoại:</strong> 0901234567</p>
            <p><strong>Email:</strong> customer@example.com</p>
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
            <tr>
              <td>SP001</td>
              <td>Nhớt xe máy</td>
              <td>2</td>
              <td>150,000 VND</td>
              <td>300,000 VND</td>
            </tr>
            <tr>
              <td>SP002</td>
              <td>Bộ nhông sên</td>
              <td>1</td>
              <td>500,000 VND</td>
              <td>500,000 VND</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4" style="text-align: right; font-weight: bold;">Tổng cộng:</td>
              <td>800,000 VND</td>
            </tr>
            <tr>
              <td colspan="4" style="text-align: right; font-weight: bold;">Giảm giá:</td>
              <td>50,000 VND</td>
            </tr>
            <tr>
              <td colspan="4" style="text-align: right; font-weight: bold;">Tổng thanh toán:</td>
              <td>750,000 VND</td>
            </tr>
          </tfoot>
        </table>

        <div class="invoice-footer">
          <p>
            <strong>Ghi chú của nhà bán hàng:</strong> Cảm ơn bạn đã mua sắm tại cửa hàng của chúng tôi. Nếu có bất kỳ
            thắc mắc nào, vui lòng liên hệ qua email hoặc số điện thoại trên.
          </p>
          <br />
          <!-- Nút in -->
          <button type="button" class="print-btn btn flex btn__md" onclick="printInvoice();">
            In hóa đơn
          </button>
          <script>
            function printInvoice() {
              window.print();
            }
          </script>
        </div>
      </section>
    </main>

    <!--=============== MAIN JS ===============-->
  </body>
</html>
