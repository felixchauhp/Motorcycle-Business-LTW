<!DOCTYPE html>
<html lang="en">
  <!--=============== HEAD ===============-->
<?php include 'head.php' ?>
  <body>
    <!--=============== HEADER ===============-->
    <?php include 'header.php' ?>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== ACCOUNTS ===============-->
      <section class="accounts section--lg">
        <div class="accounts__container container grid">
          <div class="account__tabs">
            <p class="account__tab" data-target="#address">
              <i class="fi fi-rs-marker"></i> Thông tin cá nhân
            </p>
            <p class="account__tab" data-target="#change-password">
              <i class="fi fi-rs-settings-sliders"></i> Thay đổi mật khẩu
            </p>
          </div>
          <div class="tabs__content">
            <div class="tab__content active-tab" content id="dashboard">
              <h3 class="tab__header">Xin chào, [Họ và tên nhân viên]</h3>
              <div class="tab__body">
                <p class="tab__description personal-info">
                  Vị trí hiện tại của bạn trong công ty là: <strong>[Chức vụ]</strong>
                </p>
              </div>
            </div>
             <!-- Thêm ảnh đại diện -->
             <div class="post-image-wrapper">
              <input 
                type="file" 
                id="post-image" 
                name="image" 
                class="form-control" 
                accept="image/*" 
                onchange="previewImage(event)"
              >
              <div class="image-preview-wrapper">
                <img 
                  id="image-preview" 
                  src="#" 
                  alt="Hình ảnh bài viết" 
                  class="post-image mt-2"
                  style="display: none;"
                >
              </div> 
            <div class="tab__content" content id="update-profile">
              <h3 class="tab__header">Cập nhật hồ sơ</h3>
              <div class="tab__body">
                <form class="form grid">
                  <input
                    type="text"
                    placeholder="Username"
                    class="form__input"
                    value="[Tên tài khoản]"
                    disabled
                  />
                  <div class="form__btn">
                    <button class="btn btn--md">Lưu</button>
                  </div>
                </form>
              </div>
            </div>
          <div class="tab__content" content id="address">
              <h3 class="tab__header">Thông tin cá nhân</h3>
              <div class="tab__body">
                <ul class="personal-info">
                  <li><strong>Mã số nhân viên:</strong> [Mã nhân viên]</li>
                  <li><strong>Họ và tên:</strong> [Họ và tên]</li>
                  <li><strong>Giới tính:</strong> [Giới tính]</li>
                  <li><strong>Ngày sinh:</strong> [Ngày sinh]</li>
                  <li><strong>Email:</strong> [Email]</li>
                  <li><strong>SĐT:</strong> [Số điện thoại]</li>
                  <li><strong>Địa chỉ:</strong> [Địa chỉ]</li>
                  <li><strong>Ca làm việc:</strong> [Ca làm việc]</li>
                  <li><strong>Ngày bắt đầu làm việc:</strong> [Ngày bắt đầu]</li>
                  <li><strong>Mức Lương:</strong> [Mức lương]</li>
                </ul>
              </div>

            </div>
            <div class="tab__content" content id="change-password">
              <h3 class="tab__header">Đổi mật khẩu</h3>
              <div class="tab__body">
                <form class="form grid">
                  <input
                    type="password"
                    name="current_password"
                    placeholder="Mật khẩu hiện tại"
                    class="form__input"
                    required
                  />
                  <input
                    type="password"
                    name="new_password"
                    placeholder="Mật khẩu mới"
                    class="form__input"
                    required
                  />
                  <input
                    type="password"
                    name="confirm_password"
                    placeholder="Xác nhận mật khẩu mới"
                    class="form__input"
                    required
                  />
                  <div class="form__btn">
                    <button type="submit" class="btn btn--md">Lưu</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <?php include 'footer.php' ?>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
