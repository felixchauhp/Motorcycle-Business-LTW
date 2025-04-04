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
          <li><a href="index.html" class="breadcrumb__link">Trang chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Đặt hàng</span></li>
        </ul>
      </section>

      <!--=============== CHECKOUT ===============-->
      <section class="checkout section--lg">
        <div class="checkout__container container grid">
          <div class="checkout__group">
            <h3 class="section__title">Thông tin cá nhân</h3>
            <form class="form grid">
              <input type="text" placeholder="Họ và tên" class="form__input" />
              <input type="text" placeholder="Địa chỉ" class="form__input" />
              <input type="text" placeholder="Số điện thoại" class="form__input" />
              <input type="email" placeholder="Email" class="form__input" />
              <h3 class="checkout__title">Ghi chú giao hàng:</h3>
              <textarea
                name=""
                placeholder="Giao ngoài giờ hành chính, v.v.."
                class="form__input textarea"
              ></textarea>
            </form>
          </div>
          <div class="checkout__group">
            <h3 class="section__title">Chi tiết đơn hàng</h3>
            <table class="order__table">
              <thead>
                <tr>
                  <th colspan="2">Sản phẩm</th>
                  <th>Thành tiền</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <img
                      src="./assets/img/product-1-2.jpg"
                      alt=""
                      class="order__img"
                    />
                  </td>
                  <td>
                    <h3 class="table__title">Sản phẩm</h3>
                    <p class="table__quantity">x 2</p>
                  </td>
                  <td><span class="table__price">200.000 VNĐ</span></td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="./assets/img/product-2-1.jpg"
                      alt=""
                      class="order__img"
                    />
                  </td>
                  <td>
                    <h3 class="table__title">Sản phẩm</h3>
                    <p class="table__quantity">x 1</p>
                  </td>
                  <td><span class="table__price">100.000 VNĐ</span></td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="./assets/img/product-7-1.jpg"
                      alt=""
                      class="order__img"
                    />
                  </td>
                  <td>
                    <h3 class="table__title">Sản phẩm</h3>
                    <p class="table__quantity">x 2</p>
                  </td>
                  <td><span class="table__price">200.000 VNĐ</span></td>
                </tr>
                <tr>
                  <td><span class="order__subtitle">Thành tiền</span></td>
                  <td colspan="2"><span class="table__price">500.000 VNĐ</span></td>
                </tr>
                <tr>
                  <td><span class="order__subtitle">Phí vận chuyển</span></td>
                  <td colspan="2">
                    <span class="table__price">15.000 VNĐ</span>
                  </td>
                </tr>
                <tr>
                  <td><span class="order__subtitle">Tổng thanh toán</span></td>
                  <td colspan="2">
                    <span class="order__grand-total">515.000 VNĐ</span>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="payment__methods">
              <h3 class="checkout__title payment__title">Phương thức thanh toán</h3>
              <div class="payment__option flex">
                <input
                  type="radio"
                  name="radio"
                  id="l1"
                  checked
                  class="payment__input"
                />
                <label for="l1" class="payment__label"
                  >Chuyển khoản qua ngân hàng</label
                >
              </div>
              <div class="payment__option flex">
                <input
                  type="radio"
                  name="radio"
                  id="l2"
                  class="payment__input"
                />
                <label for="l2" class="payment__label">Thanh toán khi nhận hàng</label>
              </div>
              <div class="payment__option flex">
                <input
                  type="radio"
                  name="radio"
                  id="l3"
                  class="payment__input"
                />
                <label for="l3" class="payment__label">Quét mã QR VNPay</label>
              </div>
            </div>
            <button class="btn btn--md">Đặt hàng</button>
          </div>
        </div>
      </section>

    <!--=============== NEWSLETTER ===============-->
    <section class="newsletter section home__newsletter">
      <div class="newsletter__container container grid">
        <h3 class="newsletter__title flex">
          <img
            src="./assets/img/icon-email.svg"
            alt=""
            class="newsletter__icon"
          />
          Đăng ký nhận tin sản phẩm mới
        </h3>
        <form action="" class="newsletter__form">
          <input
            type="text"
            placeholder="Nhập địa chỉ Email"
            class="newsletter__input"
          />
          <button type="submit" class="newsletter__btn">Đăng ký</button>
        </form>
      </div>
    </section>
  </main>

  <!--=============== FOOTER ===============-->
  <footer class="footer container">
    <div class="footer__container grid">
      <div class="footer__content">
        <a href="index.html" class="footer__logo">
          <img src="./assets/img/logo.png" alt="" class="footer__logo-img" />
        </a>
        <h4 class="footer__subtitle">Thông tin liên hệ</h4>
        <p class="footer__description">
          <span>Địa chỉ:</span> Công ty CP-TM-DV Xe Gắn Máy, 100 phường Đông Hòa, TP. Dĩ An, tỉnh Bình Dương, Việt Nam.
        </p>
        <p class="footer__description">
          <span>Hotline:</span> +84 001 929 992
        </p>
        <p class="footer__description">
          <span>Email:</span> contact@motorcycle.vn
        </p>
        <div class="footer__social">
          <h4 class="footer__subtitle">MotorCycle đã có mặt trên:</h4>
          <div class="footer__links flex">
            <a href="#">
              <img
                src="./assets/img/icon-facebook.svg"
                alt=""
                class="footer__social-icon"
              />
            </a>
            <a href="#">
              <img
                src="./assets/img/icon-twitter.svg"
                alt=""
                class="footer__social-icon"
              />
            </a>
            <a href="#">
              <img
                src="./assets/img/icon-instagram.svg"
                alt=""
                class="footer__social-icon"
              />
            </a>
            <a href="#">
              <img
                src="./assets/img/icon-pinterest.svg"
                alt=""
                class="footer__social-icon"
              />
            </a>
            <a href="#">
              <img
                src="./assets/img/icon-youtube.svg"
                alt=""
                class="footer__social-icon"
              />
            </a>
          </div>
        </div>
      </div>
      <div class="footer__content">
        <h3 class="footer__title">Thông tin chi tiết</h3>
        <ul class="footer__links">
          <li><a href="#" class="footer__link">Về chúng tôi</a></li>
          <li><a href="#" class="footer__link">Chính sách giao hàng</a></li>
          <li><a href="#" class="footer__link">Điều khoản bảo mật</a></li>
          <li><a href="#" class="footer__link">Quy định cung cấp dịch vụ</a></li>
        </ul>
      </div>
      <div class="footer__content">
        <h3 class="footer__title">Tải khoản của tôi</h3>
        <ul class="footer__links">
          <li><a href="#" class="footer__link">Đăng nhập</a></li>
          <li><a href="#" class="footer__link">Xem giỏ hàng</a></li>
          <li><a href="#" class="footer__link">Danh sách sản phẩm yêu thích</a></li>
          <li><a href="#" class="footer__link">Tra cứu đơn hàng</a></li>
        </ul>
      </div>
      <div class="footer__content">
        <h3 class="footer__title">Đối tác thanh toán</h3>
        <img
          src="./assets/img/payment-method.png"
          alt=""
          class="payment__img"
        />
      </div>
    </div>
    <div class="footer__bottom">
      <p class="copyright">&copy; 2024. All right reserved</p>
      <span class="designer">Website created by Group 4</span>
    </div>
  </footer>

  <!--=============== SWIPER JS ===============-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>
</html>