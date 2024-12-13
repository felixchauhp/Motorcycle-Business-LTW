<!DOCTYPE html>
<html lang="en">
<!--=============== DOCUMENT HEAD ===============-->
<?php include 'head.php'; ?>

<body>
  <!--=============== HEADER ===============-->


  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== BREADCRUMB ===============-->
    <!-- <section class="breadcrumb">
      <ul class="breadcrumb__list flex container">
        <li><a href="index.php" class="breadcrumb__link">Home</a></li>
        <li><span class="breadcrumb__link">></span></li>
        <li><span class="breadcrumb__link">Đăng nhập</span></li>
      </ul>
    </section> -->
    <h1 style="text-align: center; margin-top: 42px">Chào mừng bạn đến với Motor Cycle!</h1>

    <!-- Hiển thị lỗi nếu có -->
    <!-- <?php if ($error): ?>
      <div class="error-message"><?php echo $error; ?></div>
    <?php endif; ?> -->

    <!--=============== LOGIN-REGISTER ===============-->
    <section class="login-register section--lg">
      <div class="login__container container grid">
        <div class="login">
          <h3 class="section__title">Đăng nhập</h3>
          <form class="form grid" id="loginForm" method="POST" action="testLogin.php">
            <input
              type="text"
              id="username" name="username"
              placeholder="User name"
              class="form__input" required />
            <input
              type="password"
              id="password" name="password"
              placeholder="Mật khẩu"
              class="form__input" required />
            <div class="form__btn">
              <button type="submit" class="btn flex btn__md">
                ĐĂNG NHẬP
              </button>
            </div>
            <p>
              <li><a href="forgetpass.php">Quên mật khẩu ?</a></li>
              <li><a href="register.php">Chưa có tài khoản ? Đăng ký ngay.</a></li>
            </p>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!--=============== FOOTER ===============-->
  <?php include 'footer.php'; ?>


</body>

</html>