<!-- MENU-END -->
<main class="wrap">
    <div class="dieuhuong">
        <a href="index.html">Trang chủ</a> /
        <a href="sanpham.html" id="back">Sản phẩm</a>
    </div>
    <!-- MAIN-PRODUCT -->
    <div class="container-xxl">
        <div class="trangsanpham">
            <div class="filter ">
                <!-- Filter Thể Loại -->
                <div class="theloai">

                    <h5>Thể loại</h5>
                    <?php
                    $ch = '';
                    foreach ($sanphammodel->theloai as $key => $value) {
                        
                        // extract($value);
                        $ch .= '
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label" for="literatureCheckbox">
                                        <a href="index.php?act=product&idtl=' . $value['id'] . '" class="text-decoration-none text-black"> ' . $value['ten_theloai'] . '</a>
                                    </label>
                                </li>
                            </ul>
                            ';
                        }
                        echo $ch; 
                    ?>
                </div>
                <!-- end div thể loại -->

                <div class="tacgia pt-3">
                    <section>
                        <h5>Tác giả</h5>
                        <?php
                        $ch = '';
                        foreach ($sanphammodel->tacgia as $key => $value) {
                            
                            // extract($value);
                            $ch .= '
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label" for="author1Checkbox">
                                        <a href="index.php?act=product&idtg=' . $value['id'] . '"> ' . $value['ten_tacgia'] . '</a>
                                    </label>
                                </li>
                            </ul>
                            ';
                            
                        }
                        echo $ch;
                        ?>

                    </section>
                </div>
                <!-- end div tác giả -->

                <div class="nhaxuatban">
                <h5>Nhà xuất bản</h5>
                    <section>
                        <?php
                        $ch='';
                        foreach($sanphammodel->nxb as $key => $value) {
                            $ch.= '
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label pt-2" for="publisher1Checkbox">
                                    <a href="index.php?act=product&idnxb=' . $value['id'] . '"> ' . $value['ten_nxb'] . '</a>
                                    </label>
                                    
                                </li>
                            </ul>
                            ';
                            
                        }
                        echo $ch;
                        ?>

                        
                    </section>
                </div>
                <!-- end div nhà xuất bản -->

                <div class="gia">
                     <section>
                     <h5 class="pt-3">Giá</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="price1Checkbox">
                                <label class="form-check-label" for="price1Checkbox">Dưới 100.000 VNĐ</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="price2Checkbox">
                                <label class="form-check-label" for="price2Checkbox">Từ 100.000 - 200.000 VNĐ</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="price3Checkbox">
                                <label class="form-check-label" for="price3Checkbox">Từ 200.000 - 300.000 VNĐ</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="price4Checkbox">
                                <label class="form-check-label" for="price4Checkbox">Trên 300.000 VNĐ</label>
                            </li>
                        </ul>
                    </section>
                </div>
                <!-- end div gia -->
            </div>
            <!-- end div filter -->

            <div class="sanpham">
                <!-- box sản phẩm 3-->
                <?php
                $ch='';
                if($kq){
                foreach ($kq as  $value) {
                    $ch.= '
                    <div class="col">
                        <div class="product-img">
                            <a href="index.php?act=index&id=' . $value['id'] . '&idtl=' . $value['id_theloai'] . '&idtg=' . $value['id_tacgia'] . '&idnxb=' . $value['id_nxb'] . '">
                                <img class="img" src="public/img/IMG_DA1/san pham/' . $value['hinh'] . '" alt="">
                            </a> 
                        </div>
                        <div class="product-content">
                            <h5 class="product-name fs-6">' . $value['ten_sach'] . '</h5>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            <div class="product-price">
                                <h5 class="product-price-sale">' . $value['gia'] . '</h5>
                                <h5 class="product-price-opacity">814.000đ</h5>
                                <h5 class="product-price-percent">' . $value['giam'] . '%</h5>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="buttonsp">Mua ngay</button>


                             <!-- form này để thêm sản phẩm vào giỏ hàng -->
                            <form action="index.php?act=cart&action=themvaogiohang&id='.$value['id'].'" method="post">
                                <input type="hidden" name="ten" value="'.$value['ten_sach'].'">
                                <input type="hidden" name="hinh" value="'.$value['hinh'].'">
                                <input type="hidden" name="gia" value="'.$value['gia'].'">
                                <input type="number" name="sl" class="visually-hidden" value="1" min="1">
                                <button type="submit" name="themvaogiohang" class="button">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>';
                }
             } else {
                echo "Không tìm thấy sách";
             
             }
                echo $ch;

                ?>
            </div>
            <!-- end box sản phẩm -->
            <!-- end div chuyentrang -->
        </div>
        <!-- end div trangsanpham -->
    </div>
    <!-- end div container -->
</main>
<!-- end main -->