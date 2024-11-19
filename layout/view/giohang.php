<main class="container--xxl no-mg">
    <div class="dieuhuong">
        <a href="index.html">Trang chủ</a> /
        <a href="giohang.html" id="back">Giỏ hàng</a>
    </div>

    <!-- chức năng giỏ hàng  -->
    <section class="cart-section mt-0 me-3 ms-3">
        <!-- bảng sản phẩm trong giỏ hàng -->
        <div class="cart-table-left">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            echo '<tr >
                                    <td class="cart-table-product">
                                        <input class="cart-checkbox" type="checkbox" name="" id="" checked>
                                        <img class="cart-img" src="public/img/IMG_DA1/san pham/'.$value['hinh'].'" alt="">
                                        <div class="cart-product-name">'.$value['ten'].'</div>
                                    </td>
                                    <td class="cart-table-price mb-0 mt-0 pt-0 pb-0 h-25">'.$value['gia'].'đ</td>
                                    <td><input type="number" value="'.$value['sl'].'" min="1" class="cart-quantity" id="sldh"></td>
                                    <td><a href="index.php?act=cart&action=xoa&id='.$value['id'].'"><i class="fa-solid fa-trash-can cart-trash-icon"></i></a></td>
                                </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="4">Giỏ hàng trống!</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <!-- bảng cộng giỏ hàng  -->
        <table class="cart-table-sum ms-2">
            <thead>
                <tr>
                    <th>Cộng giỏ hàng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
        <tr>
            <td class="fw-bold">Tạm tính</td>
            <td class="cart-table-price" id="cart-total">0 đ</td>
        </tr>
        <hr>
        <tr>
            <td class="fw-bold">Tổng</td>
            <td class="cart-table-price" id="cart-total-final"></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="index.php?act=cart&action=dathang" class="cart-table-button text-decoration-none">Đặt hàng</a>
            </td>
        </tr>
    </tbody>
        </table>
    </section>
</main>
<script src="./assets/js/sldonhang.js"></script>
