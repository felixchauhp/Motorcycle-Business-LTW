<!DOCTYPE html>
<html lang="en">
 <!--=============== HEAD ===============-->
 <?php include 'head.php'; ?>
<body>
  <!--=============== HEADER ===============-->
  <header class="header">
    <nav class="nav container">
      <a href="login.php" class="nav__logo">
        <img class="nav__logo-img" src="assets/img/logo.png" alt="website logo" />
      </a>

      <div class="nav__menu" id="nav-menu">
        <div class="nav__menu-top">
          <a href="login.php" class="nav__menu-logo">
            <img src="./assets/img/logo.png" alt="">
          </a>
          <div class="nav__close" id="nav-close">
            <i class="fi fi-rs-cross-small"></i>
          </div>
        </div>

        <ul class="nav__list">
          <li class="nav__item">
            <a href="login.php" class="nav__link">Đăng nhập</a>
          </li>
        </ul>
      </div>

      <div class="header__user-actions">
        <a href="login.php" class="header__action-btn" title="Notification">
          <img src="assets/img/icon-user.svg" alt="" />
        </a>
        <div class="header__action-btn nav__toggle" id="nav-toggle">
          <img src="./assets//img/menu-burger.svg" alt="">
        </div>
      </div>

    </nav>
  </header>
  
  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== LOGIN-REGISTER ===============-->
    <section class="login-register section--lg">
      <div class="login__container container grid">
        <div class="login">
          <h3 class="section__title">Đăng nhập</h3>
          <form class="form grid" id="loginForm" method="POST" action="login.php">
            <input type="text" id="username" name="username" placeholder="Tên đăng nhập" class="form__input" required />
            <input type="password" id="password" name="password" placeholder="Mật khẩu" class="form__input" required />
            <div class="form__btn">
              <button type="submit" class="btn flex btn__md">Đăng nhập</button>
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

  <!--=============== MAIN JS ===============-->
  <script src="script.js"></script>
</body>
</html>
