<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Website SHOPEE</title>
</head>
<style>
/* Khung Flash Sale chuẩn */
#flashSaleWrap {
   position: relative;
  background-color: #fff; 
  color: #000; 
  border-radius: 6px;
  padding: 20px;
}

/* Header Flash Sale */
#flashSaleHeader {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
}

/* Khu vực trượt sản phẩm */
#flashSaleProducts {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  scroll-behavior: smooth;
  gap: 18px;
  padding-bottom: 8px;
}

#flashSaleProducts {
  scrollbar-width: none;
}

/* Card sản phẩm kiểu Shopee  */
#flashSaleProducts .fs-card {
  flex: 0 0 auto;
  width: 220px;
  background: none;              
  border: none;                  
  box-shadow: none;              
  border-radius: 0;              
  overflow: hidden;
  transition: transform 0.2s ease;
  text-align: center;
}

#flashSaleProducts .fs-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  display: block;
  border-radius: 6px;
}

#flashSaleProducts .fs-card:hover {
  transform: translateY(-4px);
}

/* Chữ và giá tiền */
#flashSaleProducts .fs-card .card-body {
  background: none; 
  padding: 8px 0 0;
}

#flashSaleProducts .fs-card p {
  margin-bottom: 4px;
}

#flashSaleProducts .fs-card .price {
  color: #ff5722;
  font-weight: 700;
}

/* Nút mũi tên */
.arrow-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 87, 34, 0.9);
  border: none;
  border-radius: 50%;
  width: 42px;
  height: 42px;
  color: white;
  font-size: 22px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 5;
  transition: 0.3s;
}
.arrow-btn:hover {
  background: #ff784e;
  transform: translateY(-50%) scale(1.1);
}
#prevBtn {
  left: -18px;
}
#nextBtn {
  right: -18px;
}
.btn-flashsale {
  background-color: #ff5722;
  color: #fff;
  border: none;
  border-radius: 20px;
  padding: 6px 16px;
  transition: 0.3s;
}

.btn-flashsale:hover {
  background-color: #ff784e;
  color: #fff;
}
.fs-card {
  cursor: pointer;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.fs-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
</style>

<body>
    <?php
         session_start();
        include('ketnoi.php');
        //Kiểm tra đăng nhập
        include('header.php');
        

        $sqlTheLoai = "SELECT * FROM theloai";
        $ketquaTheLoai = mysqli_query($connect, $sqlTheLoai);
    ?>

    <div class="container-xl mb-2 pt-4">
        
        <div class="container mt-3">
  <div class="row">
    <!-- Carousel bên trái -->
    <div class="col-9">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="https://cf.shopee.vn/file/vn-11134258-7ras8-m5184szf0klz56_xxhdpi"
                 class="d-block w-100 rounded-3" alt="Banner 1">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="https://cf.shopee.vn/file/sg-11134258-7rfhf-m9a09vs6phll28_xxhdpi"
                 class="d-block w-100 rounded-3" alt="Banner 2">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="https://cf.shopee.vn/file/sg-11134258-7rfgn-m9e5lp1m3t9j03_xhdpi"
                 class="d-block w-100 rounded-3" alt="Banner 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- 2 ảnh nhỏ bên phải -->
    <div class="col-3 d-flex flex-column justify-content-between">
      <div class="mb-2">
        <img src="logo/imgphai1.jpg"
             class="img-fluid rounded-3" alt="Banner nhỏ 1">
      </div>
      <div>
        <img src="logo/imgphai2.jpg"
             class="img-fluid rounded-3" alt="Banner nhỏ 2">
      </div>
    </div>
  </div>
</div>

        
    </div>
    <?php include 'menudeal1k.php'; ?>

    <div class="container-xl my-4" id="flashSaleWrap">
  <div id="flashSaleHeader">
    <div class="d-flex align-items-center">
      <h4 class="mb-0" style="color:#ff5722;font-weight:700;">FLASH SALE</h4>
      <div id="countdown" class="ms-3 px-3 py-1 rounded" style="background:#000;color:#fff;font-weight:700;">01 : 44 : 02</div>
    </div>
    <a href="#" class="text-decoration-none" style="color:#ff5722;">Xem tất cả &gt;</a>
  </div>
 <!-- Nút mũi tên -->
  <button id="prevBtn" class="arrow-btn" style="left:-10px;"><i class="bi bi-chevron-left"></i></button>
  <button id="nextBtn" class="arrow-btn" style="right:-10px;"><i class="bi bi-chevron-right"></i></button>

  <div id="flashSaleProducts" class="pb-2">
    <?php
      // Lấy 6 sản phẩm ngẫu nhiên làm Flash Sale
       if (!isset($_SESSION['flashSaleList'])) {
    $sqlFlash = "SELECT masanpham FROM sanpham ORDER BY RAND() LIMIT 6";
    $resultFlash = mysqli_query($connect, $sqlFlash);
    $ids = [];
    while ($sp = mysqli_fetch_assoc($resultFlash)) {
        $ids[] = $sp['masanpham'];
    }
    $_SESSION['flashSaleList'] = implode(",", $ids);
}

// Lấy lại danh sách cố định đã lưu
$sqlFlash = "SELECT * FROM sanpham WHERE masanpham IN (" . $_SESSION['flashSaleList'] . ")";
$resultFlash = mysqli_query($connect, $sqlFlash);

// Hiển thị sản phẩm
while ($sp = mysqli_fetch_array($resultFlash)) {
  echo "
    <a href='chiTietSanPham.php?masanpham=".$sp['masanpham']."' class='text-decoration-none text-dark'>
      <div class='fs-card'>
        <img src='../images/".$sp['hinhanh']."' alt='".htmlspecialchars($sp['tensanpham'])."'>
        <div class='card-body'>
          <p class='text-truncate fw-bold mb-1' style='color:#ff5722;'>".htmlspecialchars($sp['tensanpham'])."</p>
          <p class='mb-2' style='color:#ff5722;font-weight:700;'>".number_format($sp['giatien'])." đ</p>
          <div class='btn btn-sm btn-flashsale fw-bold'>ĐANG BÁN CHẠY</div>
        </div>
      </div>
    </a>
  ";
}
    ?>
  </div>
</div>
<!-- HẾT FLASH SALE -->
    <div class='container-xl'>
        <div class='h5 pb-2 mt-4 mb-4 border-bottom'>
            SẢN PHẨM
        </div>
    </div>
    <div class='container-xl text-center'>
        <div class='row row-cols-4' >
            <?php
                
                if(isset($_POST['searchValue'])){
                    //Tìm kiếm sản phẩm
                    $key = $_POST['searchValue'];
                    $sql = "SELECT * FROM sanpham WHERE tensanpham LIKE '%$key%'";
                }else if( isset($_GET['idTheLoai']) && $_GET['idTheLoai']!=0 ){
                    //Doanh mục sản phẩm
                    $idTheLoai = $_GET['idTheLoai'];
                    $sql = "SELECT * FROM sanpham WHERE matheloai='$idTheLoai'";
                }else{
                    $sql = "SELECT * FROM sanpham";     
                }

                    $ketqua = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($ketqua)){
                        echo"
                            <div class=\"col mb-3\" >
                                <div class=\"card h-100\" >
                                    <img src=\"../images/".$row['hinhanh']."\"
                                        class=\"card-img-top\" alt=\"...\" style='height:200px; object-fit: contain;'>
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title text-truncate\" >".$row['tensanpham']."</h5>
                                        <div class=\"card-text text-truncate\"> ".$row['thongtinsanpham']." </div>
                                        <p class=\"card-text fw-semibold\">".$row['giatien']." đ</p>
                                        
                                    </div>
                                    <div class='card-footer bg-transparent'>
                                        <a href=\"chiTietSanPham.php?masanpham=".$row['masanpham']."\" class=\"btn btn-primary\">Chi tiết</a>
                                    </div>
                                </div>
                            </div>";
                    }
            ?>
        </div>
    </div>
    <?php
    ?>
<script>
  // Đếm ngược flash sale (ví dụ 1h 44p 2s)
  let h = 1, m = 44, s = 2;
  const countdown = document.getElementById("countdown");

  function updateCountdown() {
    if (s > 0) s--;
    else {
      s = 59;
      if (m > 0) m--;
      else {
        m = 59;
        if (h > 0) h--;
      }
    }
    countdown.textContent =
      String(h).padStart(2, "0") + " : " +
      String(m).padStart(2, "0") + " : " +
      String(s).padStart(2, "0");
  }

  setInterval(updateCountdown, 1000);
</script>
<script>
  const container = document.getElementById("flashSaleProducts");
  document.getElementById("prevBtn").onclick = () => {
    container.scrollBy({ left: -250, behavior: "smooth" });
  };
  document.getElementById("nextBtn").onclick = () => {
    container.scrollBy({ left: 250, behavior: "smooth" });
  };
</script>
<!-- ===== Popup Quảng Cáo Ngẫu Nhiên ===== -->
<div id="overlay" class="overlay"></div>

<div id="popup" class="popup">
  <button id="closePopup" class="close-btn">&times;</button>
  <img id="popupImage" class="popup-img" src="" alt="Quảng cáo" />
  <h2 id="popupTitle"></h2>
  <p id="popupText"></p>
  <button class="buy-btn" id="popupBtn">MUA NGAY</button>
</div>

<style>
  .overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    z-index: 999;
  }

  .popup {
    position: fixed;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 20px;
    width: 360px;
    border-radius: 12px;
    box-shadow: 0 4px 25px rgba(0,0,0,0.3);
    text-align: center;
    display: none;
    z-index: 1000;
    animation: fadeIn 0.4s ease;
  }

  .popup-img {
    width: 80%;
    margin-bottom: 10px;
  }

  .close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #444;
  }

  .buy-btn {
    background-color: #ff5722;
    color: #fff;
    border: none;
    padding: 10px 25px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.2s;
  }

  .buy-btn:hover {
    background-color: #e64a19;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translate(-50%, -45%); }
    to { opacity: 1; transform: translate(-50%, -50%); }
  }
</style>

<script>
  window.onload = function () {
    const popup = document.getElementById('popup');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closePopup');

    const popupImage = document.getElementById('popupImage');
    const popupTitle = document.getElementById('popupTitle');
    const popupText = document.getElementById('popupText');
    const popupBtn = document.getElementById('popupBtn');

    // Danh sách popup quảng cáo
    const popups = [
      {
        img: "https://cf.shopee.vn/file/5d33cc8f4211a4cb97b53f1d81b8b74a",
        title: "Sữa tắm Dove dưỡng ẩm chuyên sâu",
        text: "Giảm ngay 25% và nhận quà tặng trị giá 1 triệu đồng!",
        link: "#"
      },
      {
        img: "https://cf.shopee.vn/file/16c9a7b90c6fcefd7a80837a61abeb44",
        title: "Sunsilk Collagen mới",
        text: "Tóc bồng bềnh suốt ngày dài – ưu đãi 30%!",
        link: "#"
      },
      {
        img: "https://cf.shopee.vn/file/727e8f6154ddf4f7a4e284228a56f4a0",
        title: "Bột giặt OMO Matic",
        text: "Mua 2 tặng 1 – chỉ trong hôm nay!",
        link: "#"
      },
      {
        img: "https://cf.shopee.vn/file/b3ef41418cb4f7b0e4711f8a790e2d07",
        title: "Kem dưỡng POND’S Age Miracle",
        text: "Giảm 20% cho khách hàng mới!",
        link: "#"
      }
    ];

// Luôn hiển thị popup mỗi lần load trang
const randomPopup = popups[Math.floor(Math.random() * popups.length)];
popupImage.src = randomPopup.img;
popupTitle.innerText = randomPopup.title;
popupText.innerText = randomPopup.text;
popupBtn.onclick = () => window.location.href = randomPopup.link;
popup.style.display = 'block';
overlay.style.display = 'block';


    // Đóng popup
    closeBtn.onclick = () => {
      popup.style.display = 'none';
      overlay.style.display = 'none';
    };

    overlay.onclick = () => {
      popup.style.display = 'none';
      overlay.style.display = 'none';
    };
  };
</script>
<!-- ===== Hết Popup ===== -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>