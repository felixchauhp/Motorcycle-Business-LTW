<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
  <body>
    <!--=============== HEADER ===============-->
    <?php include 'header.php' ?>
<main class="main">
    <!--=============== BREADCRUMB ===============-->
    <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Trang chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Tin tức</span></li>
        </ul>
      </section>
    <!--=============== BREADCRUMB ===============-->

    <div class="blog-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="blog-card">
                    <div class="blog-image-wrapper">
                        <img src="assets/img/about1.png" class="blog-card-img" alt="Blog Post Image">
                    </div>
                    <div class="blog-card-body">
                        <h3 class="blog-title">Awesome blog post title <small class="blog-date">3/6/2016</small></h3>
                        <p class="blog-text">Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
                        <div class="blog-meta">
                            <a href="blogpost.php" class="blog-meta-link">Author: Mike Mikers</a>
                            <a href="#" class="blog-meta-link">Comments: 3</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Duplicate post for demonstration -->
            <div class="col-md-8">
                <div class="blog-card">
                    <div class="blog-image-wrapper">
                        <img src="assets/img/about1.png" class="blog-card-img" alt="Blog Post Image">
                    </div>
                    <div class="blog-card-body">
                        <h3 class="blog-title">Another great blog post <small class="blog-date">5/6/2016</small></h3>
                        <p class="blog-text">Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
                        <div class="blog-meta">
                            <a href="#" class="blog-meta-link">Author: John Doe</a>
                            <a href="#" class="blog-meta-link">Comments: 7</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!--=============== FOOTER ===============-->
    <?php include 'footer.php' ?>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
