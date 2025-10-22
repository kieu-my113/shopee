<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Font & CSS -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <title>Đăng nhập</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #ff5722, #d0011b);
      min-height: 100vh;
      overflow-x: hidden;
      color: white;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    .card {
      background-color: #000;
      color: white;
      border: none !important;
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

    .form-control-user {
      background-color: #111;
      border: 1px solid #444;
      color: white;
      border-radius: 5px !important;
      padding: 10px 15px;
      height: 45px;
    }

    .form-control-user:focus {
      background-color: #111;
      border-color: #ff4d4d;
      box-shadow: none;
      color: white;
    }

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

    #togglePassword {
      color: #aaa;
    }

    #togglePassword:hover {
      color: white;
    }

    footer {
      background: #000;
      color: #ccc;
      text-align: center;
      padding: 15px 0;
      border-top: 1px solid #333;
      font-size: 14px;
    }

    footer a {
      color: #ff5722;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header style="
    background-color: #f5f1f2ff;;
    color: white;
    padding: 12px 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #d0011b;">
    <a href="index.php" style="display: flex; align-items: center; text-decoration: none;">
      <img src="logo/shopee.jpg" alt="Shopee Logo" style="height: 50px; width: auto; margin-right: 10px;">
      <span style="font-size: 25px; font-weight: 500; color: white;">Đăng nhập</span>
    </a>

    <a href="hoTro.php" style="color: #ee4d2d; text-decoration: none; font-size: 20px;">
      Bạn cần giúp đỡ?
    </a>
  </header>

  <!-- Main content -->
  <main class="container-fluid">
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
            <!-- Tên đăng nhập -->
            <div class="form-group">
              <input name="tendangnhap" type="text" class="form-control form-control-user" placeholder="Tên đăng nhập...">
            </div>

            <!-- Mật khẩu -->
            <div class="form-group position-relative">
              <input name="matkhau" type="password" class="form-control form-control-user" id="passwordInput"
                placeholder="Mật khẩu...">
              <span class="fas fa-eye position-absolute" id="togglePassword"
                style="top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer; color: gray;"></span>
            </div>

            <!-- Nút -->
            <button type="submit" class="btn btn-danger btn-user btn-block">Đăng nhập</button>

            <p style="text-align:left; margin:15px 0 0 5px;">
              <a href="quenMatKhau.php" style="color:#2673dd;">Quên mật khẩu</a>
            </p>

            <div style="display:flex; align-items:center; text-align:center; margin:20px 0;">
              <hr style="flex:1; border:none; border-top:1px solid #ccc;">
              <span style="margin:0 10px; color:#666; font-weight:500;">HOẶC</span>
              <hr style="flex:1; border:none; border-top:1px solid #ccc;">
            </div>

            <!-- Nút mạng xã hội -->
            <div style="display:flex; justify-content:center; gap:15px; margin-top:10px;">
              <button onclick="window.open('https://www.facebook.com/ShopeeVN', '_blank')"
                style="flex:1; max-width:180px; height:45px; display:flex; align-items:center; justify-content:center; gap:8px; border:1px solid #444; border-radius:5px; background-color:#000; color:white;">
                <i class="fab fa-facebook" style="color:#1877f2; font-size:18px;"></i> Facebook
              </button>

              <button onclick="window.open('https://www.google.com/search?q=Shopee', '_blank')"
                style="flex:1; max-width:180px; height:45px; display:flex; align-items:center; justify-content:center; gap:8px; border:1px solid #444; border-radius:5px; background-color:#000; color:white;">
                <i class="fab fa-google" style="color:#db4437; font-size:18px;"></i> Google
              </button>
            </div>

            <p style="color:grey; text-align:center; margin:15px;">
              Bạn mới biết đến Shopee?
              <a href="dangKy.php" style="color:red;">Đăng ký</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </main>

 

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
