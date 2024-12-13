<?php
$cart_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($cart_id == 0) {
  echo "Cart not found 1!";
  exit;
}
include "../config/db.php";

$query = "SELECT * FROM gio_hang_chua_san_pham WHERE cart_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $cart_id);
$stmt->execute();
$result = $stmt->get_result();
$products_id = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $products_id[] = ["product_id" => $row["product_id"], "quantity" => $row["quantity"]];
  }
}

$product_details = [];
foreach ($products_id as $item) {
  $query = "SELECT * FROM san_pham WHERE ID = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $item["product_id"]);
  $stmt->execute();
  $product_result = $stmt->get_result();

  if ($product_result->num_rows > 0) {
    $product = $product_result->fetch_assoc();
    $product_details[] = ["product" => $product, "quantity" => $item["quantity"]];
  } else {
    echo "Cart is empty!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<!--=============== DOCUMENT HEAD ===============-->
<?php include 'head.php'; ?>

<body>
  <!--=============== HEADER ===============-->
  <?php include 'header.php'; ?>

  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== BREADCRUMB ===============-->
    <section class="breadcrumb">
      <ul class="breadcrumb__list flex container">
        <li><a href="index.html" class="breadcrumb__link">Trang chủ</a></li>
        <li><span class="breadcrumb__link">></span></li>
        <li><span class="breadcrumb__link">Giỏ hàng</span></li>
      </ul>
    </section>

    <!--=============== CART ===============-->
    <section class="cart section--lg container">
      <div class="table__container">
        <table class="table">
          <thead>
            <tr>
              <th>Sản phẩm</th>
              <th>Tên</th>
              <th>Đơn giá</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($product_details as $product): ?>
              <?php $sale_price = $product["product"]["gia_ban"] - $product["product"]["gia_ban"] * $product["product"]["giam_gia"] ?>
              <tr>
                <td>
                  <img
                    src=<?php echo $product["product"]["link_anh"] ?>
                    alt="Ảnh sản phẩm"
                    class="table__img" />
                </td>
                <td>
                  <h3 class="table__title">
                    <?php echo $product["product"]["ten"] ?>
                  </h3>

                </td>
                <td>
                  <span class="table__price"><?php echo number_format($sale_price, 0, ".", ",") ?> VND</span>
                </td>
                <td><input type="number" min="0" value=<?php echo $product["quantity"] ?> class="quantity" /></td>
                <td><span class="subtotal"><?php echo number_format($sale_price * $product["quantity"], 0, ".", ",") ?> VND </span></td>
                <td><a href="delete-cart.php?product_id=<?php echo $product["product"]["ID"] ?>&cart_id=<?php echo $cart_id ?>"><i class="fi fi-rs-trash table__trash"></i></a></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>

      <div class="cart__actions">
        <div href="#" class="btn flex btn__md" id="update-cart">
          <i class="fi-rs-shuffle"></i> Cập nhật giỏ hàng
        </div>
        <a href="index.php" class="btn flex btn__md">
          <i class="fi-rs-shopping-bag"></i> Tiếp tục mua hàng
        </a>
      </div>

      <div class="divider">
        <i class="fi fi-rs-fingerprint"></i>
      </div>

      <div class="cart__group grid">
        <div>
          <div class="cart__coupon">
            <h3 class="section__title">Mã giảm giá</h3>
            <form action="" class="coupon__form form grid">
              <div class="form__group grid">
                <input
                  type="text"
                  class="form__input"
                  placeholder="Enter Your Coupon" />
                <div class="form__btn">
                  <button class="btn flex btn--sm">
                    <i class="fi-rs-label"></i> Sử dụng
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="cart__total">
          <h3 class="section__title">Tổng thanh toán</h3>
          <table class="cart__total-table">
            <?php $total_charge = 0 ?>
            <?php foreach ($product_details as $products): ?>
              <?php
              $sale_price = $products["product"]["gia_ban"] - $products["product"]["gia_ban"] * $products["product"]["giam_gia"];
              $total_charge  += $sale_price * $products["quantity"]
              ?>
            <?php endforeach; ?>
            <tr>
              <td><span class="cart__total-title">Thành tiền</span></td>
              <td><span class="cart__total-price"><?php echo number_format($total_charge, 0, ".", ",") ?> VND</span></td>
            </tr>
            <tr>
              <td><span class="cart__total-title">Phí vận chuyển</span></td>
              <td><span class="cart__total-price">10,000 VND</span></td>
            </tr>
            <tr>
              <td><span class="cart__total-title">Giảm giá</span></td>
              <td><span class="cart__total-price">0 VND</span></td>
            </tr>
            <tr>
              <td><span class="cart__total-title">Tổng cộng</span></td>
              <td><span class="cart__total-price"><?php echo number_format($total_charge + 10000, 0, ".", ",") ?> VND</span></td>
            </tr>
          </table>
          <a href="checkout.html" class="btn flex btn--md">
            <i class="fi fi-rs-box-alt"></i> Tiến hành thanh toán
          </a>
        </div>
      </div>
    </section>
  </main>

  <!--=============== FOOTER ===============-->
  <?php include 'footer.php' ?>

  <!--=============== SWIPER JS ===============-->
  <script>
    document.getElementById("update-cart").addEventListener("click", (e) => {
      e.preventDefault();
      const rows = Array.from(document.querySelectorAll(".table tbody tr"));
      let cartData = [];
      rows.forEach((row) => {
        const productId = row.querySelector("a").href.split("product_id=")[1].split("&")[0];
        const cartId = row.querySelector("a").href.split("&cart_id=")[1];
        const quantity = row.querySelector(".quantity").value;
        cartData.push({
          cart_id: cartId,
          product_id: productId,
          quantity: parseInt(quantity, 10)
        });
      });

      console.log(cartData);



      fetch('update-cart.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            cart: cartData
          }),
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Chuyển hướng đến cart.php
            window.location.href = 'cart.php?id=' + data.cart_id;
          } else {
            console.error(data.message);
          }
        })

    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./assets/js/main.js"></script>

  <!--=============== MAIN JS ===============-->
</body>



</html>