<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'Views/header.php';
require_once 'model/ConnectModel.php';
require_once "controllers/BookController.php";
require_once "controllers/AuthorController.php";
require_once "controllers/CategoryController.php";
require_once "controllers/PublishingHouseController.php";
require_once "controllers/OrderController.php";
require_once "controllers/UsersController.php";
require_once "controllers/ThongkeController.php";
$ConnectModel = new ConnectModel();
$BookController = new BookController();
$BookModel = new BookModel();
$thongkeController = new thongkeController();
$AuthorController = new AuthorController();
$AuthorModel = new AuthorModel();
$CategoryController = new CategoryController();
$CategoryModel = new CategoryModel();
$PublishingHouseController = new PublishingHouseController();
$PublishingHouseModel = new PublishingHouseModel();
$OrderController = new OrderController();
$OrderModel = new OrderModel();
$UsersController = new UsersController();
$UsersModel = new UsersModel();

$ConnectModel->connect();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        $thongkeController->thongke();
        break;
    case 'logout':
        header("Location: ../layout/index.php");
        exit();
        break;

    case 'book':
        $BookController->listBooks();
        break;
    case 'add_book':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['them'])) {
            $ten_sach = $_POST['ten_sach'];
            $id_theloai = (int)$_POST['ten_theloai_id'];
            $id_tacgia = (int)$_POST['ten_tacgia_id'];
            $id_nxb = (int)$_POST['ten_nxb_id'];
            $gia = $_POST['gia'];
            $giam = $_POST['giam'];
            $mo_ta = $_POST['mo_ta'];
            $nam_xb = $_POST['nam_xb'];
            $so_luong_ban = (int)$_POST['so_luong_ban'];

            if (isset($_FILES['hinh'])) {
                $targetFile = "../layout/public/img/IMG_DA1/san pham/" . $_FILES['hinh']['name'];

                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                    $hinh = $_FILES['hinh']['name'];
                    $BookController->addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
                } else {
                    echo "Lỗi khi tải hình ảnh lên. Vui lòng thử lại.";
                    exit();
                }
            } else {
                echo "Vui lòng chọn hình ảnh để tải lên.";
                exit();
            }
        }
        break;
    case 'edit_book':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $book = $BookController->getBookById($id);
            include 'Views/edit_book.php';
        }
        break;
    case 'update_book':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int)$_POST['id'];
            $ten_sach = trim($_POST['ten_sach']);
            $id_theloai = (int)$_POST['ten_theloai_id'];
            $id_tacgia = (int)$_POST['ten_tacgia_id'];
            $id_nxb = (int)$_POST['ten_nxb_id'];
            $gia = $_POST['gia'];
            $giam = $_POST['giam'];
            $mo_ta = trim($_POST['mo_ta']);
            $nam_xb = $_POST['nam_xb'];
            $so_luong_ban = $_POST['so_luong_ban'];

            $book = $BookController->getBookById($id);
            $old_img = $book['hinh'];

            //nếu người dùng có upload một file
            if (isset($_FILES['hinh']) && $_FILES['hinh']['name'] != '') {
                $targetFile = "../layout/public/img/IMG_DA1/san pham/" . $_FILES['hinh']['name'];

                // nếu giá trị old_img true và có tồn tại old_img trong thư mục thì xoá
                if ($old_img && file_exists("../layout/public/img/IMG_DA1/san pham/" . $old_img)) {
                    unlink("../layout/public/img/IMG_DA1/san pham/" . $old_img);
                }

                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                    $hinh = $_FILES['hinh']['name'];
                    $BookController->updateBook($id, $id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
                } else {
                    echo "Lỗi khi tải hình ảnh lên. Vui lòng thử lại.";
                    exit();
                }

            //nếu người dùng không tải ảnh mới lên, giữ ảnh cũ
            } else {
                $hinh = $old_img;
                $BookController->updateBook($id, $id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
            }

            header("Location: index.php?page=book");
            exit();
        }
        break;


    case 'hidden_book':
        $id = (int)$_GET['id'];
        if ($id) {
            $BookController->hiddenBook($id);
            header('location: index.php?page=book');
            exit();  
        }
        break;
    case 'show_book':
        $id = (int)$_GET['id'];
        if ($id) {
            $BookController->showBook($id);
            header('location: index.php?page=book');
            exit();  
        }
        break;

    case 'category':
        $CategoryController->listCategorys();
        break;
    case 'add_category':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten_theloai = $_POST['ten_theloai'];
            $result = $CategoryController->addCategory($ten_theloai);
            header("Location: index.php?page=category");
        }
        break;
    case 'edit_category':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categorie = $CategoryController->getCategoryById($id);
            include 'Views/edit_category.php';
        }
        break;
    case 'update_category':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $ten_theloai = $_POST['ten_theloai'];
            $CategoryController->updateCategory($id, $ten_theloai);
            header("Location: index.php?page=category");
        }
        break;
    case 'delete_category':
        $id = $_GET['id'];
        $result = $CategoryController->deleteCategory($id);

        if (!$result) {
            echo "<script>
                    alert('Bạn không thể xoá thể loại này vì có chứa sách!');
                    window.location.href = 'index.php?page=category';
                  </script>";
        }
        exit();
        break;
    case 'author':
        $AuthorController->listAuthors(); //lay listauthor hien thi cho view
        break;
    case 'add_author':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //neu nguoidung gui form
            $ten_tacgia = $_POST['ten_tacgia']; //ley ten tac gia tu form
            $result = $AuthorController->addAuthor($ten_tacgia); //neu them thanh cong chuyen huong ve trang ds
            header("Location: index.php?page=author");
        }
        break;
    case 'edit_author':
        if (isset($_GET['id'])) { //nếu có tham số id trong URL
            $id = $_GET['id'];
            $author = $AuthorController->getAuthorById($id);
            include 'Views/edit_author.php';
        }
        break;
    case 'update_author':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $ten_tacgia = $_POST['ten_tacgia'];
            $AuthorController->updateAuthor($id, $ten_tacgia);
            header("Location: index.php?page=author");
        }
        break;
    case 'delete_author':
        $id = $_GET['id'];

        $result = $AuthorController->deleteAuthor($id);

        if (!$result) {
            echo "<script>
                        alert('Bạn không thể xoá tác giả này vì có chứa sách!');
                        window.location.href = 'index.php?page=author';
                      </script>";
        }
        exit();
        break;
    case 'publishinghouse':
        $PublishingHouseController->listPublishingHouses();
        break;

    case 'add_publishinghouse':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten_nxb = $_POST['ten_nxb'];
            $PublishingHouseController->addPublishingHouse($ten_nxb);
            header("Location: index.php?page=publishinghouse");
        }
        break;

    case 'edit_publishinghouse':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $publishinghouse = $PublishingHouseController->getPublishingHouseById($id);
            include 'Views/edit_publishinghouse.php';
        }
        break;

    case 'update_publishinghouse':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $ten_nxb = $_POST['ten_nxb'];
            $PublishingHouseController->updatePublishingHouse($id, $ten_nxb);
            header("Location: index.php?page=publishinghouse");
        }
        break;

    case 'delete_publishinghouse':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $PublishingHouseController->deletePublishingHouse($id);
            if (!$result) {
                echo "<script>
                        alert('Bạn không thể xoá nhà xuất bản này vì có chứa sách!');
                        window.location.href = 'index.php?page=publishinghouse';
                      </script>";
            }
            exit();
        }
        break;
    case 'order':
        $OrderController->listOrders();
        break;
    case 'update_order_status':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $tt_donhang = $_POST['tt_donhang'];
            $result = $OrderController->updateOrderStatus($id, $tt_donhang);
            header("Location: index.php?page=order");
        }
        break;


    case 'details':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $OrderController->xemchitiet($id);
        } else {
            echo "Không tìm thấy ID đơn hàng.";
        }
        break;

    case 'users':
        $UsersController->listUsers(); //lay listauthor hien thi cho view
        break;
    case 'add_users':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ho_ten = $_POST['ho_ten'];
            $sdt = $_POST['sdt'];
            $username = $_POST['username'];
            $mat_khau = $_POST['mat_khau'];
            $email = $_POST['email'];
            $vai_tro = $_POST['vai_tro'];
            $result = $UsersController->addUsers($ho_ten, $sdt, $username, $mat_khau, $email, $vai_tro); //neu them thanh cong chuyen huong ve trang ds
            header("Location: index.php?page=users");
        }
        break;
    case 'delete_users':
        $id = $_GET['id'];
        $result = $UsersController->deleteUsers($id);
        header("Location: index.php?page=users");
        break;
    case 'edit_users':
        if (isset($_GET['id'])) { //nếu có tham số id trong URL
            $id = $_GET['id'];
            $users = $UsersController->getUsersById($id);
            include 'Views/edit_users.php';
        }
        break;
    case 'update_users':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $ho_ten = $_POST['ho_ten'];
            $sdt = $_POST['sdt'];
            $username = $_POST['username'];
            $mat_khau = $_POST['mat_khau'];
            $email = $_POST['email'];
            $vai_tro = $_POST['vai_tro'];
            $UsersController->updateUsers($id, $ho_ten, $sdt, $username, $mat_khau, $email, $vai_tro);
            header("Location: index.php?page=users");
        }
        break;
    case 'update_users_status':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $vai_tro = $_POST['vai_tro'];
            $result = $UsersController->updateUsersStatus($id, $vai_tro);
            header("Location: index.php?page=users");
        }
        break;
    case 'thoat':
        unset($_SESSION['user']);

        // Chuyển hướng người dùng về trang đăng nhập
        header("Location: ../layout/index.php");
        exit();
        break;
}
