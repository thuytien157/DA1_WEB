<?php
session_start();
include 'Views/header.php';
require_once 'model/ConnectModel.php';
require_once "controllers/AuthorController.php";
require_once "controllers/CategoryController.php";
require_once "controllers/PublishingHouseController.php";
require_once "controllers/OrderController.php";
require_once "controllers/UsersController.php";
require_once "controllers/ThongkeController.php";
$ConnectModel = new ConnectModel();
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
        header("Location: index.php?page=category");
        break;
        //
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
        header("Location: index.php?page=author");
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
            header("Location: index.php?page=publishinghouse");
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
}
