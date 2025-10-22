<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <title>Đăng nhập</title>
</head>
    <style>
  body {
    background-color: #111;
    color: white;
  }
  .card {
    background-color: #000;
  color: white;
  border: none !important;
  box-shadow: none !important;
  border-radius: 8px;

  }
  .form-control {
    background-color: #222;
    border: 1px solid #444;
    color: white;
  }
  .form-control::placeholder {
    color: #aaa;
  }
  a {
    color: #2673dd;
  }
  /* Nền đen tổng thể */
body {
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #ff5722, #d0011b);
  height: 100vh;
  overflow: hidden;
  color: white;
}

/* Ô nhập tên và mật khẩu */
.form-control-user {
  background-color: #111;
  border: 1px solid #444;
  color: white;
  border-radius: 5px !important; /* bo nhẹ góc như Shopee */
  padding: 10px 15px;
  height: 45px;
}

.form-control-user:focus {
  background-color: #111;
  border-color: #ff4d4d;
  box-shadow: none;
  color: white;
}

/* Nút đăng nhập */
.btn-user {
  background-color: #d0011b;
  border: none;
  color: white;
  border-radius: 5px !important;
  height: 45px;
  font-weight: 500;
  transition: 0.3s;
}

.btn-user:hover {
  background-color: #ff3b30;
}

/* Icon con mắt */
#togglePassword {
  color: #aaa;
}

#togglePassword:hover {
  color: white;
}

</style>

<body>
  <header style="
  background-color: #111;
  color: white;
  padding: 12px 80px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 2px solid #d0011b;
">
  <!-- Logo + chữ Đăng nhập -->
 <a href="index.php" style="display: flex; align-items: center; text-decoration: none;">
  <img src="logo shoppe.png" alt="Shopee Logo" 
       style="height: 50px; width: auto; margin-right: 10px; position: relative; top: -10px; cursor: pointer;">
  <span style="font-size: 25px; font-weight: 500; color: white;">Đăng nhập</span>
</a>

  <!-- Link hỗ trợ -->
  <a href="hoTro.php" 
     style="color: #ee4d2d; text-decoration: none; font-size: 20px;">
    Bạn cần giúp đỡ?
  </a>
</header>
  <div class="container-fluid" style="height: 100vh;">
   <div class="row h-100">

      <!-- Banner bên trái -->
      <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center">
        <div class="text-center p-5">
          <h1 class="display-3 font-weight-bold">10.10 Đại Tiệc Thương Hiệu</h1>
          <p class="lead">Voucher giảm đến <b>50%</b> - Siêu nhanh, siêu rẻ!</p>
        </div>
      </div>

      <!-- Form bên phải -->
      <div class="col-lg-5 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg p-5" style="width: 100%; max-width: 400px;">
          <div class="text-center mb-4">
            <h1 class="h4 text-gray-900">Đăng Nhập</h1>
          </div>

          <form class="user" action="xuLyDangNhap.php" method="POST">
            <!-- Ô tên đăng nhập -->
            <div class="form-group">
              <input name="tendangnhap" type="text" class="form-control form-control-user"
                placeholder="Tên đăng nhập...">
            </div>

            <!-- Ô mật khẩu có icon con mắt -->
            <div class="form-group position-relative">
              <input name="matkhau" type="password" class="form-control form-control-user"
                id="passwordInput" placeholder="Mật khẩu...">
              <span class="fas fa-eye position-absolute"
                id="togglePassword"
                style="top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer; color: gray;">
              </span>
            </div>

            <!-- Nút đăng nhập / đăng ký -->
            <button type="submit" class="btn btn-danger btn-user btn-block">
              Đăng nhập
            </button>
            <!--<a href="dangKy.php" class="btn btn-secondary btn-user btn-block">
              Đăng ký
            </a> -->
           <p style="text-align:left; margin:15px 0 0 5px;">
              <a href="quenMatKhau.php" style="color:#2673dd; text-decoration:none;">Quên mật khẩu</a>
                  </p>
                  <div style="display:flex; align-items:center; text-align:center; margin:20px 0;">
                        <hr style="flex:1; border:none; border-top:1px solid #ccc;">
                            <span style="margin:0 10px; color:#666; font-weight:500;">HOẶC</span>
                        <hr style="flex:1; border:none; border-top:1px solid #ccc;">
                    </div>
                    <!-- nút đăng nhập facebook google -->
<div style="display:flex; justify-content:center; gap:15px; margin-top:10px;">

  <!-- Nút Facebook -->
  <button onclick="window.open('https://www.facebook.com/ShopeeVN', '_blank')" 
    style="
      flex:1;
      max-width:180px;
      height:45px;
      display:flex;
      align-items:center;
      justify-content:center;
      gap:8px;
      border:1px solid #444;
      border-radius:5px;
      background-color:#000;
      color:white;
      cursor:pointer;
      transition:0.3s;
    ">
    <i class="fab fa-facebook" style="color:#1877f2; font-size:18px;"></i>
    Facebook
  </button>

  <!-- Nút Google -->
  <button onclick="window.open('https://www.google.com/search?q=Shopee', '_blank')" 
    style="
      flex:1;
      max-width:180px;
      height:45px;
      display:flex;
      align-items:center;
      justify-content:center;
      gap:8px;
      border:1px solid #444;
      border-radius:5px;
      background-color:#000;
      color:white;
      cursor:pointer;
      transition:0.3s;
    ">
    <i class="fab fa-google" style="color:#db4437; font-size:18px;"></i>
    Google
  </button>
</div>
            <!-- Dòng chữ ở dưới -->
            <p style="color:grey ; text-align:center; margin:15px ;">
              Bạn mới biết đến Shopee?
              <a href="dangKy.php" style="color:red;">Đăng ký</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JS toggle password -->
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#passwordInput');

    togglePassword.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  </script>
  <?php include 'footer.php'; ?>
</body>
</html>