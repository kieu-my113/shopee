<!DOCTYPE html> 
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký | Shopee Việt Nam</title>
  <link rel="icon" href="https://cf.shopee.vn/file/faviconshopee.ico" type="image/x-icon">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background-color: #f5f5f5}
    .header { background-color: #fff; padding: 10px 30px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #ddd; }
    .header img { height: 60px; }
    .main { background-color: #d0011b; min-height: 450px; display: flex; justify-content: center; align-items: center; }
.register-box {
  background-color: #fff;
  width: 365px;
  padding: 50px;
  border-radius: 7px;
  position: absolute;       /* Dính trong khung nền đỏ */
  top: 305px;              /* Cách mép trên */
  right: 350px;             /* Lệch phải như ảnh */
  transform: translateY(-50%); /* Giúp căn giữa thực tế */
  box-shadow: 0 0 10px rgba(0,0,0,0.15);
  z-index: 10;
}

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
    .facebook { color: #1877f2; border-color: #1877f2; cursor: pointer; font-weight: bold; text-decoration: none; }
    .facebook:hover { background-color: #f0f0f0;}
    .google { color: #db4437; border-color: #db4437;cursor: pointer; font-weight: bold; text-decoration: none; }
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
    <a href="#" style="color: #ee4d2d; text-decoration: none; position: fixed; left: 90px; "><h3> Shopee </h3> </a> 
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
        <button onclick="window.open('https://www.facebook.com/privacy/consent/gdp/?params%5Bapp_id%5D=421039428061656&params%5Bdisplay%5D=%22popup%22&params%5Bdomain%5D=%22shopee.vn%22&params%5Bfallback_redirect_uri%5D=%22https%3A%5C%2F%5C%2Fshopee.vn%5C%2Fbuyer%5C%2Fsignup%3Fnext%3Dhttps%5Cu00253A%5Cu00252F%5Cu00252Fshopee.vn%5Cu00252F%22&params%5Bfblfb%5D=false&params%5Bkid_directed_site%5D=false&params%5Blogger_id%5D=%22f481204091f49ba03%22&params%5Bnext%5D=%22confirm%22&params%5Bredirect_uri%5D=%22https%3A%5C%2F%5C%2Fstaticxx.facebook.com%5C%2Fx%5C%2Fconnect%5C%2Fxd_arbiter%5C%2F%3Fversion%3D46%23cb%3Dfeedaf1532bf14cd9%26domain%3Dshopee.vn%26is_canvas%3Dfalse%26origin%3Dhttps%5Cu00253A%5Cu00252F%5Cu00252Fshopee.vn%5Cu00252Fff41ada8449632668%26relation%3Dopener%26frame%3Df9a7c491197745362%22&params%5Bresponse_type%5D=%22token%2Csigned_request%2Cgraph_domain%22&params%5Breturn_scopes%5D=false&params%5Bscope%5D=%5B%22public_profile%22%2C%22email%22%2C%22user_birthday%22%5D&params%5Bsdk%5D=%22joey%22&params%5Bsteps%5D=%7B%7D&params%5Btp%5D=%22unspecified%22&params%5Bversioned_sdk%5D=%22joey%22&params%5Bcui_gk%5D=%22%5BPASS%5D%3Alogin_platformization_joey%22&params%5Bis_limited_login_shim%5D=false&source=gdp_delegated&cache_buster=4190565647505622017', '_blank')" class="facebook">
          <a href="https://www.facebook.com" target="_blank" class="social-btn facebook"> 
          <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
          <span style= "color: #1877f2">Facebook</span>
          </a>
        </button>
        </div>
        <div class="google">
          <button onclick="window.open('https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?gsiwebsdk=3&client_id=549970890748-5kk9hu6u2auq3phcr7r6facblspeflu9.apps.googleusercontent.com&scope=profile%20email&redirect_uri=storagerelay%3A%2F%2Fhttps%2Fshopee.vn%3Fid%3Dauth841298&prompt=consent&access_type=offline&response_type=code&include_granted_scopes=false&enable_granular_consent=true&service=lso&o2v=2&flowName=GeneralOAuthFlow', '_blank')" class="google">
          <a href="https://accounts.google.com" target="_blank" class="social-btn google">
          <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google">
         <span style= "color: #db4437">Google</span>
         </a>
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

<?php include 'footer.php'; ?>


</body>
</html>