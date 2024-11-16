<!-- MENU-END -->
<main class="wrap">
    <div class="dieuhuong">
        <a href="index.html">Trang chủ</a> /
        <a href="sanpham.html" id="back">Sản phẩm</a>
    </div>
    <!-- MAIN-PRODUCT -->
    <div class="container">
        <div class="trangsanpham">
            <div class="filter">
                <!-- Filter Thể Loại -->
                <div class="theloai">
                    <section>
                        <h5>Thể loại</h5>
                        <?php
                        foreach ($sanphammodel->theloai as $key => $value) {
                            $ch = '';
                            // extract($value);
                            $ch .= '
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label" for="literatureCheckbox">
                                        <a href="index.php?act=product&idtl=' . $value['id'] . '"> ' . $value['ten_theloai'] . '</a>
                                    </label>
                                </li>
                            </ul>
                            ';
                            echo $ch;
                        }
                        ?>
                    </section>
                </div>
                <!-- end div thể loại -->

                <div class="tacgia">
                    <section>
                        <h5>Tác giả</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <label class="form-check-label" for="author1Checkbox">Tác giả Mộc Trầm</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="author2Checkbox">Tác giả Han Kang</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="author3Checkbox">Tác giả José Mauro de Vasconcelos</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="author4Checkbox">Tác giả Dan Nicholson</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="author5Checkbox">Tác giả Margaret Atwood</label>
                            </li>
                        </ul>
                    </section>
                </div>
                <!-- end div tác giả -->

                <div class="nhaxuatban">
                    <section>
                        <h5>Nhà xuất bản</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <label class="form-check-label" for="publisher1Checkbox">NXB Giáo Dục</label>
                            </li>
                            <li class="list-group-item">
                                    <label class="form-check-label" for="publisher2Checkbox">NXB Văn Học</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="publisher3Checkbox">NXB Kim Đồng</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="publisher4Checkbox">NXB Thanh Niên</label>
                            </li>
                            <li class="list-group-item">
                                <label class="form-check-label" for="publisher5Checkbox">NXB Hội Nhà Văn</label>
                            </li>
                        </ul>
                    </section>
                </div>
                <!-- end div nhà xuất bản -->

                <div class="gia">
                    <section>
                        <h5>Giá</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" id="price1Checkbox">
                                <label class="form-check-label" for="price1Checkbox">Dưới 100.000 VNĐ</label>
                            </li>
                            <!-- Các tùy chọn giá khác -->
                        </ul>
                    </section>
                </div>
                <!-- end div gia -->
            </div>
            <!-- end div filter -->

            <div class="sanpham">
                <!-- box sản phẩm -->
                <?php
                $ch = '';
                foreach ($kq as $key => $value) {
                    $ch .= '
                    <div class="col">
                        <div class="product-img">
                            <a href="index.php?act=index&id=' . $value['id'] . '&idtl=' . $value['id_theloai'] . '">
                                <img class="img" src="public/img/IMG_DA1/san pham/' . $value['hinh'] . '" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name">' . $value['ten_sach'] . '</h5>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            <div class="product-price">
                                <h5 class="product-price-sale">' . $value['gia'] . '</h5>
                                <h5 class="product-price-opacity">814.000đ</h5>
                                <h5 class="product-price-percent"> ' . $value['giam'] . '% </h5>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="button">Mua ngay</button>
                            <button class="button">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    ';
                }
                echo $ch;
                ?>
            </div>
            <!-- end box sản phẩm -->

            <div class="chuyentrang">
                <div class="item1">1</div>
                <div class="item1">2</div>
                <div class="item1">>></div>
            </div>
            <!-- end div chuyentrang -->
        </div>
        <!-- end div trangsanpham -->
    </div>
    <!-- end div container -->
</main>
<!-- end main -->
