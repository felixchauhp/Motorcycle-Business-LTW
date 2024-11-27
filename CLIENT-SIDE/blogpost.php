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
          <h1 class="post-title">Awesome Blog Post Title</h1>
          <div class="post-meta">
            <span class="post-author">By <a href="#">Mike Mikers</a></span>
            <span class="post-date">Published on: 3/6/2016</span>
          </div>

          <!-- Blog Post Image -->
          <div class="post-image-wrapper">
            <img src="assets/img/about1.png" alt="Post Image" class="post-image">
          </div>

          <!-- Blog Post Content -->
          <div class="post-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet.
            </p>
            <p>
              Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor varius in. Proin in pellentesque velit, ac vulputate turpis.
            </p>
            <h2>Subheading Example</h2>
            <p>
              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed at sem sodales, tincidunt velit nec, dignissim lectus. Curabitur sit amet leo nisi.
            </p>
            <blockquote>
              <p>
                "This is an example of a blockquote. It can be used to highlight important text or quotes from the article."
              </p>
            </blockquote>
            <p>
              Maecenas vel elit at dui condimentum lobortis. Suspendisse in eros eu mauris feugiat tincidunt at in nulla. Integer vel bibendum quam, ut mollis metus.
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
