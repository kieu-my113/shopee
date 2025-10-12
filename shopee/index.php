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


<body>
    <?php
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


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>