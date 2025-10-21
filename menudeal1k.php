<!-- ==== PHẦN MENU DEAL 1K - DỊCH VỤ ==== -->
<style>
.home-service-bar {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  flex-wrap: wrap;
  background: #fff;
  padding: 25px 0 15px;
  margin: 10px auto;
  max-width: 1200px;
  border-radius: 8px;
  gap: 35px; /* Tăng khoảng cách giữa các icon */

}

.service-item {
  width: 120px;
  text-align: center;
  margin: 10px;
  transition: transform 0.2s ease;
}

.service-item:hover {
  transform: translateY(-4px);
}

.service-item a {
  text-decoration: none;
  color: #333;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.service-item img {
  width: 70px;
  height: 70px;
  object-fit: contain;
  margin-bottom: 8px;
}

.service-item span {
  font-size: 14px;
  font-weight: 500;
  line-height: 1.3;
}

@media (max-width: 768px) {
  .service-item {
    width: 90px;
  }
  .service-item img {
    width: 50px;
    height: 50px;
  }
  .service-item span {
    font-size: 12px;
  }
}
</style>

<div class="home-service-bar">
  <div class="service-item">
    <a href="#">
      <img src="logo/1k.jpg" alt="Deal từ 1.000đ" />
      <span>Deal từ 1.000đ</span>
    </a>
  </div>

  <div class="service-item">
    <a href="#">
      <img src="logo/Sxuly.jpg" alt="Shopee Xử Lý" />
      <span>Shopee Xử Lý</span>
    </a>
  </div>

  <div class="service-item">
    <a href="#">
      <img src="logo/dealhot.jpg" alt="Deal Hot Giờ Vàng" />
      <span>Deal Hot Giờ Vàng</span>
    </a>
  </div>

  <div class="service-item">
    <a href="#">
      <img src="logo/Sstyle.jpg" alt="Shopee Style Voucher 30%" />
      <span>Voucher 30%</span>
    </a>
  </div>

  <div class="service-item">
    <a href="#">
      <img src="logo/Sxu.jpg" alt="Săn Ngay 100.000 Xu" />
      <span>Săn 100.000 Xu</span>
    </a>
  </div>

  <div class="service-item">
    <a href="#">
      <img src="logo/Skh.jpg" alt="Khách Hàng Thân Thiết" />
      <span>Khách Hàng Thân Thiết</span>
    </a>
  </div>

  <div class="service-item">
    <a href="#">
      <img src="logo/Sgiam.jpg" alt="Mã Giảm Giá" />
      <span>Mã Giảm Giá</span>
    </a>
  </div>
</div>
<!-- ==== HẾT MENU DEAL 1K ==== -->
