
<link rel="stylesheet" href="../public/css/style.css">
<div class="container-web">
<section>
    <div class="container">
    <label for="category">Thể Loại:</label>
            <select id="category">
                <option value="">Tất cả</option>
                <option value="phép thuật">Phép thuật</option>
                <option value="tiểu thuyết">Tiểu thuyết</option>
                <option value="khoa học">Khoa học</option>
            </select>

            <label for="author">Tác Giả:</label>
            <select id="author">
                <option value="">Tất cả</option>
                <option value="J.K. Rowling">J.K. Rowling</option>
                <option value="Harper Lee">Harper Lee</option>
            </select>

            <label for="year">Năm Xuất Bản:</label>
            <select id="year">
                <option value="">Tất cả</option>
                <option value="1997">1997</option>
                <option value="1960">1960</option>
            </select>
        </div>

        <div class="col3">
            <h2>Thêm Mới Sản Phẩm</h2>
            <form>
                <input type="text" placeholder="Tên sản phẩm">
                <input type="text" placeholder="Giá">
                <input type="file" name="product_image">
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="" alt=""></td>
                        <td>Sản Phẩm 1</td>
                        <td>$100</td>
                        <td>50</td>
                        <td>10</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="" alt=""></td>
                        <td>Sản Phẩm 2</td>
                        <td>$200</td>
                        <td>20</td>
                        <td>22</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

</body>
</html>
