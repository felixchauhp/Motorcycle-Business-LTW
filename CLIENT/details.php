<?php
session_start();
$product_id = isset($_GET["product_id"]) ? intval($_GET["product_id"]) : 0;

if ($product_id == 0) {
  echo "product not found!";
  exit;
}

if (!isset($_SESSION["user_id"])) {
  echo "User not logged in!";
  exit;
};

$user_id = $_SESSION["user_id"];

include "../config/db.php";



$query = "SELECT * FROM san_pham WHERE ID = ?";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $product_id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $product = $result->fetch_assoc();
  $category_id = $product["ma_danh_muc"];
}

$query2 = "SELECT * FROM danh_muc WHERE ID = ?";

$stmt2 = $conn->prepare($query2);
$stmt2->bind_param("i", $product["ma_danh_muc"]);
$stmt2->execute();

$result2 = $stmt2->get_result();

if ($result2->num_rows > 0) {
  $category = $result2->fetch_assoc();
}

$old_price = $product["gia_ban"];
$new_price = $old_price - $old_price * $product["giam_gia"];

$query4 = "SELECT * FROM san_pham INNER JOIN danh_muc ON san_pham.ma_danh_muc = danh_muc.ID WHERE ma_danh_muc = ?";

$stmt4 = $conn->prepare($query4);
$stmt4->bind_param("i", $category_id);
$stmt4->execute();

$result4 = $stmt4->get_result();
$related_product = [];

if ($result4->num_rows > 0) {
  while ($row = $result4->fetch_assoc()) {
    $related_product[] = $row;
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

    <!--=============== DETAILS ===============-->
    <section class="details section--lg">
      <div class="details__container container grid">
        <div class="details__group">
          <img
            src=<?php echo $product["link_anh"] ?>
            alt=""
            class="details__img" />
        </div>
        <div class="details__group">
          <h3 class="details__title"><?php echo $product["ten"] ?></h3>
          <p class="details__brand">Danh mục: <span><?php echo $category["ten"] ?></span></p>
          <div class="details__price flex">
            <span class="new__price"><?php echo number_format($new_price, 0, ",", ".") ?> VND</span>
            <span class="old__price"> <?php echo number_format($old_price, 0, ",", ".") ?> VND</span>
            <span class="save__price">Flash sale</span>
          </div>
          <p class="short__description">
            <?php echo $product["mo_ta"] ?>
          </p>
          <ul class="products__list">
            <li class="list__item flex">
              <i class="fi-rs-crown"></i> Chính sách bảo hành: 6 tháng nếu có hư hỏng do nhà sản xuất.
            </li>
            <li class="list__item flex">
              <i class="fi-rs-refresh"></i> 3 ngày đổi trả.
            </li>
            <li class="list__item flex">
              <i class="fi-rs-credit-card"></i> Nhận hàng, kiểm tra hàng và thanh toán
            </li>
          </ul>
          <div class="details__action">
            <form action="insert_cart.php" method="POST">
              <input type="hidden" name="product_id" value="<?php echo $product["ID"]; ?>">
              <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
              <input type="number" class="quantity" name="quantity" value="1" min="1" />
              <button type="submit" class="btn btn--sm">Thêm vào giỏ hàng</button>
            </form>
          </div>
          <ul class="details__meta">
            <li class="meta__list flex"><span>SKU:</span><?php echo $product["ma_san_pham"] ?></li>
            <li class="meta__list flex">
              <span>Tồn kho:</span>1000
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!--=============== DETAILS TAB ===============-->
    <section class="details__tab container">
      <div class="detail__tabs">
        <span class="detail__tab active-tab" data-target="#reviews">Đánh giá(3)</span>
      </div>
      <div class="details__tabs-content">
        <div class="details__tab-content active-tab" id="reviews">
          <div class="reviews__container grid">
            <div class="review__single">
              <div>
                <img src="./assets/img/avt1.jpg" alt="" class="review__img" />
                <h4 class="review__title">Nine Naphat</h4>
              </div>
              <div class="review__data">
                <div class="review__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <p style="color:black" class="review__description">
                  Sản phẩm chính hãng, chất lượng.
                </p>
                <span style="color:black" class="review__date">10:00 ngày 22 tháng 10 năm 2024</span>
              </div>
            </div>
            <div class="review__single">
              <div>
                <img src="./assets/img/avt2.jpg" alt="" class="review__img" />
                <h4 style="color:black" class="review__title">Srettha Thavisin</h4>
              </div>
              <div class="review__data">
                <div class="review__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <p style="color:black" class="review__description">
                  Sản phẩm tốt, giao hàng qua Thái Lan nhanh hơn cả việc tôi mất chức.
                </p>
                <span style="color:black" class="review__date">10:00 ngày 22 tháng 10 năm 2024</span>
              </div>
            </div>
            <div class="review__single">
              <div>
                <img src="./assets/img/avt3.jpg" alt="" class="review__img" />
                <h4 style="color:black" class="review__title">Engfa Waraha</h4>
              </div>
              <div class="review__data">
                <div class="review__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <p style="color:black" class="review__description">
                  Thật sự không thích sản phẩm này lắm, thích sầu riêng hơn.
                </p>
                <span style="color:black" class="review__date">10:00 ngày 22 tháng 10 năm 2024</span>
              </div>
            </div>
          </div>
          <div class="review__form">
            <h4 class="review__form-title">Thêm đánh giá</h4>
            <div class="rate__product">
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
            </div>
            <form action="post-rating.php" class="form grid" action="POST">
              <textarea
                class="form__input textarea"
                placeholder="Viết đánh giá"
                class="comment-block">
              </textarea>

              <div class="form__btn">
                <button type="submit" id="send-btn" class="btn">Gửi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!--=============== PRODUCTS ===============-->
    <section class="products container section--lg">
      <h3 class="section__title">Sản phẩm <span>cùng danh mục</span></h3>
      <div class="products__container grid">
        <?php foreach ($related_product as $prod): ?>
          <div class="product__item">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img
                  src=<?php echo $prod["link_anh"] ?>
                  alt="Ảnh sản phẩm"
                  class="product__img default" />
                <img
                  src="assets/img/product-1-2.jpg"
                  alt=""
                  class="product__img hover" />
              </a>
              <div class="product__actions">
                <a href="details.php?product_id=<?php echo $prod["ma_danh_muc"] ?>" class="action__btn" aria-label="Xem chi tiết">
                  <i class="fi fi-rs-eye"></i>
                </a>
              </div>
              <div class="product__badge light-pink">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category"><?php echo $prod["ten"] ?></span>
              <a href="details.php">
                <h3 class="product__title"><?php echo $prod["ten"] ?></h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price"><?php echo number_format($prod["gia_ban"] - $prod["gia_ban"] * $prod["giam_gia"], 0, ".", ",") ?> VND</span>
                <span class="old__price"><?php echo number_format($prod["gia_ban"], 0, ".", ",") ?> VND</span>
              </div>
              <a
                href="#"
                class="action__btn cart__btn"
                aria-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </section>

    <!--=============== NEWSLETTER ===============-->
    <?php include 'footer.php' ?>

    <script>
      document.getElementById("send-btn").addEventListener("click", (e) => {
        e.preventDefault();
        const commentText = document.querySelector(".comment-block");
        let commentData = {};
        rows.forEach((row) => {
          commentData.push({
            comment: commentText.value
          });
        });

        console.log(cartData);



        fetch('post-rating.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              comment: commentData
            }),
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              // Chuyển hướng đến cart.php
              window.location.href = 'details.php?product_id=' + $product_id;
            } else {
              console.error(data.message);
            }
          })

      });
    </script>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>