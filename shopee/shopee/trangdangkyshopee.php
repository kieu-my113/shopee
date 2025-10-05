!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký | Shopee Việt Nam</title>
  <link rel="icon" href="https://cf.shopee.vn/file/faviconshopee.ico" type="image/x-icon">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background-color: #f5f5f5; }
    .header { background-color: #fff; padding: 10px 30px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #ddd; }
    .header img { height: 60px; }
    .main { background-color: #d0011b; min-height: 450px; display: flex; justify-content: center; align-items: center; }
    .register-box { background-color: #fff; width: 365px; padding: 50px; border-radius: 7px; position: fixed; right: 350px; }
    .register-box h2 { text-align: center; color: #0f0002ff; margin-bottom: 80px; }
    .register-box input { width: 100%; padding: 10px; margin: 20px 0; border: 2px solid #ccc; border-radius: 3px; }
    .register-box button { width: 100%; padding: 10px; background-color: #d0011b; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
    .register-box button:hover { background-color: #a90015; }
    .divider { display: flex; align-items: center; text-align: center; color: #bdbdbd; font-size: 12px; margin: 20px 0;}
    .divider::before,.divider::after { content: ""; flex: 1; border-bottom: 1px solid #ddd;}
    .divider:not(:empty)::before { margin-right: .75em; }
    .divider:not(:empty)::after { margin-left: .75em; }
    .social-login {display: flex; justify-content: space-between; gap: 10px; margin: 20px 0; }
    .social-login button { flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px; border: 1px solid #090101ff; border-radius: 5px; font-weight: bold; font-size: 14px; background-color: white; cursor: pointer; width: 130px; transition: background-color 0.3s;}
    .social-login button:hover {background-color: #f5f5f5;}
    .social-login img {width: 18px; height: 18px;}
    .facebook { color: #1877f2; border-color: #1877f2; cursor: pointer; font-weight: bold;}
    .facebook:hover { background-color: #f0f0f0;}
    .google { color: #db4437; border-color: #db4437;cursor: pointer; font-weight: bold;}
    .google:hover {background-color: #f0f0f0;}
    .terms { font-size: 12px; color: #999; line-height: 1.5; text-align: center;}
    .terms a { color: #ee4d2d; text-decoration: none;}
    .terms a:hover {text-decoration: underline;}
    .message { text-align: center; margin-top: 50px; font-size: 13px; }
    .footer { background-color: #fff; padding: 40px 80px; color: #666; font-size: 14px; border-top: 1px solid #ddd; }
    .footer-section { display: flex; justify-content: space-around; flex-wrap: wrap; }
    .footer-section div { width: 200px; margin-bottom: 20px; }
    .footer-section h4 { margin-bottom: 10px; color: #000; font-size: 15px; }
    .footer-bottom { text-align: center; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #999; }
  </style>
</head>
<body>

  <div class="header">
    <img width="60" src="https://img.icons8.com/color/70/shopee.png" alt="shopee"/> 
    <a href="#" style="color: #da0723ff; text-decoration: none; position: fixed; left: 90px; "><h3> Shopee </h3> </a> 
    <a href="#" style="color: #040001ff; text-decoration: none; position: fixed; left: 170px;"><p> Đăng ký </p></a> 
    <a href="#" style="color: #d0011b; text-decoration: none;">Bạn cần giúp đỡ?</a> 
  </div>
  <div class="main">
    <div class="register-box">
     <h7>Đăng ký</h7>
      <form method="POST" action="">
        <input type="text" name="dienthoai" placeholder="Số điện thoại" required>
        <button type="submit">TIẾP THEO</button>
    <div class="divider">HOẶC</div>
      <div class="social-login">
        <div class="facebook">
          <button class="facebook">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
          <h7 style= "color: #1877f2">Facebook</h7>
        </button>
        </div>
        <div class="google">
          <button class="google">
          <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google">
         <h7 style= "color: #db4437">Google</h7>
        </button>
      </div>
     </div>
      </form>
       <p class="terms">Bằng việc đăng ký, bạn đã đồng ý với Shopee về<br>
        <a href="#">Điều khoản dịch vụ</a> & <a href="#">Chính sách bảo mật</a>
      </p>

      <div class="message">
          <?php if (isset($message)) echo htmlspecialchars($message); ?>
      </div>
      <p style="text-align:center; margin-top:50px; font-size:13px;">
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