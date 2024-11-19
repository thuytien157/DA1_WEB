<!-- MENU-END -->
<main class="wrap">
    <div class="dieuhuong">
        <a href="index.html">Trang chủ</a> /
        <a href="sanpham.html" id="back">Sản phẩm</a>
    </div>
    <!-- MAIN-PRODUCT -->
    <div class="container-xxl">
        <div class="trangsanpham">
            <div class="filter border-end">
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
                                        <a href="index.php?act=product&idtg=' . $value['id'] . '" class="text-decoration-none text-black"> ' . substr($value['ten_tacgia'],10). '</a>
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

                <div class="nhaxuatban pt-3">
                <h5>Nhà xuất bản</h5>
                    <section>
                        <?php
                        $ch='';
                        foreach($sanphammodel->nxb as $key => $value) {
                            $ch.= '
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label" for="publisher1Checkbox">
                                    <a href="index.php?act=product&idnxb=' . $value['id'] . '" class="text-decoration-none text-black"> ' .substr($value['ten_nxb'],4). '</a>
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
             <div class="chuyentrang">
             <nav aria-label="Page navigation example text-center">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link text-black" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-black" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-black" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
            </nav>

             </div>
    <!-- end div container -->
</main>
<!-- end main -->