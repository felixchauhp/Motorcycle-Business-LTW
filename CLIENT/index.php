<?php
session_start();
if (!isset($_SESSION["user_id"])) {
  header("Location: login.php");
  exit();
}
include '../config/db.php';
$query = "SELECT * FROM danh_muc";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$categories = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $categories[] = $row;
  }
}

$query2 = "SELECT * FROM san_pham";
$stmt2 = $conn->prepare($query2);
$stmt2->execute();
$result2 = $stmt2->get_result();
$top_products = [];
if ($result2->num_rows > 0) {
  while ($row = $result2->fetch_assoc()) {
    $top_products[] = $row;
  }
}




?>

<!DOCTYPE html>
<html lang="en">
<!--=============== DOCUMENT HEAD ===============-->
<?php include 'head.php'; ?>

<body>
  <div id="snow-container"></div>
  <script src="snow.js"></script>
  <script>
    window.$zoho = window.$zoho || {};
    $zoho.salesiq = $zoho.salesiq || {
      ready: function() {}
    }
  </script>
  <script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siq2a126d8e3efac1df3644686aad71544687ff5251fc8a8c1812c388df1999baf7" defer></script>
  <!--=============== HEADER ===============-->
  <?php include 'header.php'; ?>

  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== HOME ===============-->
    <section class="home section--lg">
      <div class="home__container container grid">
        <div class="home__content">
          <span class="home__subtitle">Siêu ưu đãi Chào Đông</span>
          <h1 class="home__title">
            <span>FROZEN</span>
          </h1>
          <p class="home__description">
            THE BIGGEST SALE EVER - UP TO 59%
          </p>
          <a href="shop.html" class="btn">Mua ngay kẻo lỡ!</a>
        </div>
        <img src="assets/img/bannerindex3.png" class="home__img" alt="hats" />
      </div>
    </section>

    <!--=============== CATEGORIES ===============-->
    <section class="categories container section">
      <h3 class="section__title"><span>Danh mục</span> Sản phẩm</h3>
      <div class="categories__container swiper">
        <div class="swiper-wrapper">
          <?php foreach ($categories as $category): ?>
            <a href="shop.php?category_id=<?php echo $category["ID"] ?>" class="category__item swiper-slide">
              <img
                src=<?php echo htmlspecialchars($category['url']); ?>
                alt="Ảnh category"
                class="category__img" />
              <h3 class="category__title"><?php echo htmlspecialchars($category['ten']); ?></h3>
            </a>
          <?php endforeach; ?>
          <!-- <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat1.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Nhớt</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat2.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Lốp xe</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat3.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Gương</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat4.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Nón bảo hiểm</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat5.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Đồ chơi xe</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat6.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Phụ tùng khác</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat7.jpg"
              alt=""
              class="category__img" />
            <h3 class="category__title">Decal</h3>
          </a>
          <a href="shop.html" class="category__item swiper-slide">
            <img
              src="assets/img/cat8.png"
              alt=""
              class="category__img" />
            <h3 class="category__title">Dịch vụ bão dưỡng</h3>
          </a> -->
        </div>

        <div class="swiper-button-prev">
          <i class="fi fi-rs-angle-left"></i>
        </div>
        <div class="swiper-button-next">
          <i class="fi fi-rs-angle-right"></i>
        </div>
      </div>
    </section>

    <!--=============== PRODUCTS ===============-->
    <section class="products container section">

      <div class="tab__btns">
        <span class="tab__btn active-tab" data-target="#featured">Nổi bật</span>
        <span class="tab__btn" data-target="#popular">Yêu thích</span>
        <span class="tab__btn" data-target="#new-added">Mới về</span>
      </div>

      <div class="tab__items">

        <div class="tab__item active-tab" content id="featured">
          <div class="products__container grid">
            <?php foreach ($top_products as $prod): ?>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src=<?php echo $prod["link_anh"] ?>
                      alt=""
                      class="product__img default" />
                  </a>
                  <div class="product__actions">
                    <a href="details.php" class="action__btn" aria-label="Xem chi tiết">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                  </div>
                  <div class="product__badge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
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
        </div>

        <div class="tab__item" content id="popular">
          <div class="products__container grid">
            <?php include 'product_item.php' ?>
          </div>
        </div>

        <div class="tab__item" content id="new-added">
          <div class="products__container grid">
            <?php include 'product_item.php' ?>
          </div>
        </div>

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