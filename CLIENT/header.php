   <!-- <?php session_start() ?> -->
   <!--=============== HEADER ===============-->
   <header class="header">
     <div class="header__top">
       <div class="header__container container">
         <div class="header__contact">
           <span>Gọi đặt hàng:</span>
           <span>+84 001 929 992</span>
         </div>
         <p class="header__alert-news">
           Dịch vụ giao hàng và lắp ráp tận nơi !
         </p>
         <?php

          if (!isset($_SESSION["user_id"])) {
            echo "<a href='login.php' class='header__top-action'>
           Đăng nhập ngay để mua hàng!
         </a>";
          }

          ?>

       </div>
     </div>

     <nav class="nav container">
       <a href="index.php" class="nav__logo">
         <img
           class="nav__logo-img"
           src="assets/img/logo.png"
           alt="website logo" />
       </a>

       <div class="nav__menu" id="nav-menu">

         <div class="nav__menu-top">
           <a href="index.php" class="nav__menu-logo">
             <img src="./assets/img/logo.png" alt="">
           </a>
           <div class="nav__close" id="nav-close">
             <i class="fi fi-rs-cross-small"></i>
           </div>
         </div>

         <ul class="nav__list">
           <li class="nav__item">
             <a href="index.php" class="nav__link active-link">Trang chủ</a>
           </li>
           <li class="nav__item">
             <a href="shop2.php" class="nav__link">Sản phẩm</a>
           </li>
           <li class="nav__item">
             <a href="about.php" class="nav__link">Giới thiệu</a>
           </li>
           <li class="nav__item">
             <a href="Blog.php" class="nav__link">Tin tức</a>
           </li>
         </ul>

         <div class="header__search">
           <input
             type="text"
             placeholder="Tìm kiếm..."
             class="form__input" />
           <button class="search__btn">
             <img src="assets/img/search.png" alt="search icon" />
           </button>
         </div>
       </div>

       <div class="header__user-actions">
         <a href="" class="header__action-btn" title="Wishlist">
           <img src="assets/img/bell.svg" alt="" />
           <span class="count">3</span>
         </a>
         <a href="cart.php" class="header__action-btn" title="Cart">
           <img src="assets/img/icon-cart.svg" alt="" />
           <span class="count">3</span>
         </a>
         <div class="dropdown w-100 mt-2">
           <a
             href="#"
             class="header__action-btn dropdown-toggle"
             id="userDropdown"
             data-toggle="dropdown"
             aria-haspopup="true"
             aria-expanded="false"
             title="User">
             <img src="assets/img/icon-user.svg" alt="" />
           </a>

           <ul class="dropdown-menu dropdown-menu-right text-center p-2" style="width: 150px;" aria-labelledby="userDropdown">
             <li>
               <a class="dropdown-item d-flex align-items-center justify-content-center" href="accounts.php">
                 <i class="fi fi-rs-settings mr-2"></i> Cá nhân
               </a>
             </li>
             <?php
              if (!isset($_SESSION["user_id"])) {
                echo "<li>
               <a class='dropdown-item d-flex align-items-center justify-content-center' href='login.php'>
                 <i class='fi fi-rs-user mr-2'></i> Đăng nhập
               </a>
             </li>";
              }
              ?>

             <?php
              if (!isset($_SESSION["user_id"])) {
                echo "<li>
               <a class='dropdown-item d-flex align-items-center justify-content-center' href='register.php'>
                 <i class='fi fi-rs-user-add mr-2'></i> Đăng ký
               </a>
             </li>";
              }
              ?>

             <?php
              if (isset($_SESSION["user_id"])) {
                echo "<li>
               <a class='dropdown-item d-flex align-items-center justify-content-center' href='logout.php'>
                 <i class='fi fi-rs-user-add mr-2'></i> Đăng xuất
               </a>
             </li>";
              }
              ?>


           </ul>
         </div>

         <div class="header__action-btn nav__toggle" id="nav-toggle">
           <img src="./assets//img/menu-burger.svg" alt="">
         </div>
       </div>
     </nav>
   </header>