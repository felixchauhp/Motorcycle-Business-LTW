<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body>
  <!--=============== HEADER ===============-->
  <?php include 'header.php' ?>

  <div class="post-detail-container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="post-detail">
          <!-- Blog Post Header -->
          <h1 class="post-title">Mẫu xe MPV Zeekr 009 "nhăm nhe" về Việt Nam "bán chạy như tôm tươi"</h1>
          <div class="post-meta">
            <span class="post-author">By <?php echo $_SESSION["username"] ?></span>
            <span class="post-date">Published on: 3/10/2014</span>
          </div>

          <!-- Blog Post Image -->
          <div class="post-image-wrapper">
            <img src="assets/img/about1.png" alt="Post Image" class="post-image">
          </div>

          <!-- Blog Post Content -->
          <div class="post-content">
            <p>
              Zeekr chính thức công bố doanh số bán ra của mẫu xe MPV chạy hoàn toàn bằng điện Zeekr 009 đã đạt 4.201 xe vào tháng 11. Đây là mức doanh số kỷ lục mới cho mẫu xe MPV chủ lực của thương hiệu này.
            </p>
            <p>
              Công ty cũng tuyên bố rằng vào tháng 11, doanh số bán hàng của Zeekr 009 đã giành danh hiệu xe điện thuần túy bán chạy nhất có giá trên 400.000 nhân dân tệ (55.000 USD) và xe MPV bán chạy nhất có giá trên 400.000 nhân dân tệ (55.000 USD).
            </p>


          </div>

          <!-- Related Posts Section -->
          <div class="related-posts">
            <h3>Related Posts</h3>
            <ul class="related-post-list">
              <li><a href="#">How to Write an Amazing Blog Post</a></li>
              <li><a href="#">The Secrets of Great Content Creation</a></li>
              <li><a href="#">Why Blogging is Still Relevant in 2024</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--=============== FOOTER ===============-->
  <?php include 'footer.php' ?>

  <!--=============== SWIPER JS ===============-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>