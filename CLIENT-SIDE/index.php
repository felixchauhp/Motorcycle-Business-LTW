<!DOCTYPE html>
<html lang="en">
  <!--=============== DOCUMENT HEAD ===============-->
  <?php include 'head.php'; ?>

<body>
<div id="snow-container"></div>
<script src="snow.js"></script>
<script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siq2a126d8e3efac1df3644686aad71544687ff5251fc8a8c1812c388df1999baf7" defer></script>
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
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat1.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Nhớt</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat2.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Lốp xe</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat3.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Gương</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat4.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Nón bảo hiểm</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat5.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Đồ chơi xe</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat6.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Phụ tùng khác</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat7.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Decal</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat8.png"
                alt=""
                class="category__img"
              />
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
              <?php include 'product_item.php' ?>
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
