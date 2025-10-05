<?php
$maychu = "localhost";  // máy chủ MySQL
$nguoidung = "root";         // tài khoản mặc định XAMPP
$matkhau = "";             // mật khẩu (thường để trống)
$dulieu = "shopee_db";      // tên database bạn đã tạo

// Tạo kết nối
$conn = new mysqli($maychu, $nguoidung, $matkhau, $dulieu);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thông báo trạng thái
$message = "";

// Xử lý khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dienthoai = trim($_POST['dienthoai']);

    // Kiểm tra rỗng
    if ($dienthoai == "") {
        $message = "<p style='color:red;'>Vui lòng nhập số điện thoại.</p>";
    } else {
        // Kiểm tra trùng số điện thoại
        $check = $conn->prepare("SELECT * FROM nguoidung WHERE dienthoai = ?");
        $check->bind_param("s", $dienthoai);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {
            $message = "<p style='color:red;'>Số điện thoại này đã được đăng ký!</p>";
        } else {
            // Thêm mới
            $stmt = $conn->prepare("INSERT INTO nguoidung (dienthoai) VALUES (?)");
            $stmt->bind_param("s", $dienthoai);

            if ($stmt->execute()) {
                $message = "<p style='color:green;'>Đăng ký thành công!</p>";
            } else {
                $message = "<p style='color:red;'>Lỗi khi lưu dữ liệu!</p>";
            }
            $stmt->close();
        }
        $check->close();
    }
}
$conn->close();
?>