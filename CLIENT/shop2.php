<?php
include '../config/db.php';

$query = "SELECT * FROM san_pham";
$stmt = $conn->prepare($query);

$stmt->execute();
$result = $stmt->get_result();
$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
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
                <li><a href="index.php" class="breadcrumb__link">Trang chủ</a></li>
                <li><span class="breadcrumb__link">></span></li>
                <li><span class="breadcrumb__link">Sản phẩm</span></li>
            </ul>
        </section>

        <!--=============== CATEGORIES ===============-->
        <!-- <section class="categories container section">
      <h3 class="section__title"><span>Danh mục</span> Sản phẩm</h3>
      <div class="categories__container swiper">
        <div class="swiper-wrapper">
          <a href="shop.html" class="category__item swiper-slide">
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
          </a>
        </div>

        <div class="swiper-button-prev">
          <i class="fi fi-rs-angle-left"></i>
        </div>
        <div class="swiper-button-next">
          <i class="fi fi-rs-angle-right"></i>
        </div>
      </div>
    </section> -->
        <!--=============== PRODUCTS ===============-->
        <section class="products container section--lg">
            <p class="total__products">Đã tìm thấy <span style="color:red"><?php echo $result->num_rows ?></span> sản phẩm bạn đang cần:</p>
            <div class="products__container grid">
                <?php foreach ($products as $product): ?>
                    <?php
                    $old_price = intval($product["gia_ban"]);
                    $new_price = $old_price - floatval($product["giam_gia"]) * $old_price;
                    ?>
                    <div class="product__item">
                        <div class="product__banner">
                            <a href="details.php?product_id=<?php echo $product["ID"] ?>" class="product__images">
                                <img
                                    src=<?php echo $product["link_anh"] ?>
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
                                <h3 class="product__title"><?php echo $product["ten"] ?></h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price"><?php echo number_format($new_price, 0, ',', '.') ?> VND</span>
                                <span class="old__price"><?php echo number_format($old_price, 0, ',', '.') ?> VND</span>
                            </div>
                            <a
                                href="#"
                                class="action__btn cart__btn"
                                aria-label="Add To Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

            <ul class="pagination">
                <li><a href="#" class="pagination__link active">01</a></li>
                <li><a href="#" class="pagination__link">02</a></li>
                <li><a href="#" class="pagination__link">03</a></li>
                <li><a href="#" class="pagination__link">...</a></li>
                <li><a href="#" class="pagination__link">16</a></li>
                <li><a href="#" class="pagination__link icon">
                        <i class="fi-rs-angle-double-small-right"></i>
                    </a></li>
            </ul>
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