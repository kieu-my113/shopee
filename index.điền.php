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
        <div class="row">
            <!-- Danh mục sản phẩm -->
            <div class="col-3">
                <div class="card h-100 shadow-sm rounded">
                    <h5 class="card-header bg-dark text-white" >Danh mục sản phẩm</h5>
                    <ul class="list-group list-group-flush">
                        <a href='index.php?idTheLoai=0' class='list-group-item list-group-item-action'>
                            Tất cả         
                        </a>
                        <?php
                            while($rowTheLoai = mysqli_fetch_array($ketquaTheLoai)){
                                echo"
                                    <a href='index.php?idTheLoai=".$rowTheLoai['matheloai']."' class='list-group-item list-group-item-action'>
                                        ".$rowTheLoai['tentheloai']."
                                    </a>
                                ";
                            }
                        ?>
                        
                    
                    </ul>
                </div>
            </div>
            <!-- Banner -->
            <div class="col-9">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-bs-touch="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="https://cf.shopee.vn/file/vn-11134258-7ras8-m5184szf0klz56_xxhdpi" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://cf.shopee.vn/file/sg-11134258-7rfhf-m9a09vs6phll28_xxhdpi" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://cf.shopee.vn/file/sg-11134258-7rfgn-m9e5lp1m3t9j03_xhdpi" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>