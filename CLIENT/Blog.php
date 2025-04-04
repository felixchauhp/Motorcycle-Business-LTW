<?php
include "../config/db.php";

$query = "SELECT * FROM tin_tuc";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$posts = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}
?>

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
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-8">
                        <div class="blog-card">
                            <a href="blogpost.php">
                                <div class="blog-image-wrapper">
                                    <img src="assets/img/about1.png" class="blog-card-img" alt="Blog Post Image">
                                </div>
                                <div class="blog-card-body">
                                    <h3 class="blog-title"><?php echo $post["tieu_de"] ?> <p class="blog-date">3/6/2024</p>
                                    </h3>
                                    <p class="blog-text"><?php echo $post["mo_ta"] ?></p>
                                    <div class="blog-meta">
                                        <p href="blogpost.php" class="blog-meta-link">Tác giả: <?php echo $_SESSION["username"] ?></p>
                                        <!-- <a href="#" class="blog-meta-link">Comments: 3</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Duplicate post for demonstration -->

            </div>
        </div>
    </main>
    <!--=============== FOOTER ===============-->
    <?php include 'footer.php'; ?>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>