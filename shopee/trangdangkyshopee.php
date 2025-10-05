<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký | Shopee Việt Nam</title>
  <link rel="icon"> <a target="_blank" href="https://icons8.com/icon/XGv3oOimibXn/shopee">Shopee</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background-color: #f5f5f5; }
    .header { background-color: #fff; padding: 10px 30px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #ddd; }
    .header img { height: 35px; }
    .main { background-color: #d0011b; min-height: 450px; display: flex; justify-content: center; align-items: center; }
    .register-box { background-color: #fff; width: 360px; padding: 30px; border-radius: 6px; }
    .register-box h2 { text-align: center; color: #d0011b; margin-bottom: 20px; }
    .register-box input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
    .register-box button { width: 100%; padding: 10px; background-color: #d0011b; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
    .register-box button:hover { background-color: #a90015; }
    .message { text-align: center; margin-top: 10px; font-size: 14px; }
    .footer { background-color: #fff; padding: 40px 80px; color: #666; font-size: 14px; border-top: 1px solid #ddd; }
    .footer-section { display: flex; justify-content: space-around; flex-wrap: wrap; }
    .footer-section div { width: 200px; margin-bottom: 20px; }
    .footer-section h4 { margin-bottom: 10px; color: #000; font-size: 15px; }
    .footer-bottom { text-align: center; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #999; }
  </style>
</head>
<body>

  <div class="header">
    <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/logo.svg" alt="Shopee Logo">
    <a href="#" style="color: #d0011b; text-decoration: none;">Bạn cần giúp đỡ?</a>
  </div>

  <div class="main">
    <div class="register-box">
      <h2>Đăng ký</h2>
      <form method="POST" action="">
        <input type="text" name="phone" placeholder="Số điện thoại" required>
        <button type="submit">TIẾP THEO</button>
      </form>
      <div class="message"><?= $message ?></div>
      <p style="text-align:center; margin-top:15px; font-size:13px;">
        Bạn đã có tài khoản?
        <a href="#" style="color:#d0011b; text-decoration:none;">Đăng nhập</a>
      </p>
    </div>
  </div>

  <div class="footer">
    <div class="footer-section">
      <div>
        <h4>DỊCH VỤ KHÁCH HÀNG</h4>
        <p>Trung Tâm Trợ Giúp Shopee</p>
        <p>Hướng Dẫn Mua Hàng</p>
        <p>Hướng Dẫn Bán Hàng</p>
      </div>
      <div>
        <h4>VỀ SHOPEE VIỆT NAM</h4>
        <p>Tuyển Dụng</p>
        <p>Điều Khoản Shopee</p>
        <p>Chính Sách Bảo Mật</p>
      </div>
      <div>
        <h4>THANH TOÁN</h4>
        <img src="https://cf.shopee.vn/file/8e8c5cda8d27846b6e3e5f4c79b9e2f9" alt="Thanh toán" width="120">
      </div>
      <div>
        <h4>THEO DÕI SHOPEE</h4>
        <p>Facebook</p>
        <p>Instagram</p>
        <p>LinkedIn</p>
      </div>
    </div>
    <div class="footer-bottom">
      © 2025 Shopee. Tất cả các quyền được bảo lưu.
    </div>
  </div>

</body>
</html>
