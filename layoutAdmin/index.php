<?php
session_start();
include 'Views/header.php';
include 'model/ConnectModel.php';
require_once "controllers/AuthorController.php";
require_once "controllers/CategoryController.php";
require_once "controllers/OrderController.php";
require_once "controllers/UsersController.php";
$ConnectModel = new ConnectModel();
$AuthorController = new AuthorController();
$AuthorModel = new AuthorModel();
$CategoryController = new CategoryController();
$CategoryModel = new CategoryModel();
$OrderController = new OrderController();
$OrderModel = new OrderModel();

$ConnectModel->connect();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        include 'Views/index.php';
        break;

    case 'logout':
        // Chuyển hướng người dùng về trang đăng nhập
        header("Location: ../../layout/index.php");
        exit();
        break;
    case 'category':
        $CategoryController->listCategorys();
        break;
    case 'add_category':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten_theloai = $_POST['ten_theloai'];
            $result = $CategoryController->addCategory($ten_theloai);
            header("Location: index.php?page=category"); // Chuyển hướng về trang danh sách
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
            $ten_tacgia = $_POST['ten_tacgia'];
            $CategoryController->updateCategory($id, $ten_tacgia);
        }
        break;
    case 'delete_category':
        $id = $_GET['id'];
        $result = $CategoryController->deleteCategory($id);
        header("Location: index.php?page=category");
        break;
        break;
        //
    case 'author':
        $AuthorController->listAuthors();
        break;
    case 'add_author':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten_tacgia = $_POST['ten_tacgia'];
            $result = $AuthorController->addAuthor($ten_tacgia);
            header("Location: index.php?page=author"); // Chuyển hướng về trang danh sách
        }
        break;
    case 'edit_author':
        if (isset($_GET['id'])) {
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
        }
        break;
    case 'delete_author':
        $id = $_GET['id'];
        $result = $AuthorController->deleteAuthor($id);
        header("Location: index.php?page=author");
        break;

    case 'publishinghouse':
        include 'Views/publishinghouse.php';
        break;
    case 'product':
        include 'ProductController.php';
        $ProductController = new ProductController();
        break;
    case 'user':
        include 'UsersController.php';
        $UsersController = new UsersController();
        break;
    case 'form':
        include 'UpdateProductController.php';
        $UpdateProductController = new UpdateProductController();
        break;
    case 'order':
        $OrderController->listOrders();
        break;
        case 'update_order_status':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_POST['id'];
                $tt_donhang = $_POST['tt_donhang'];
                $result = $OrderController->updateOrderStatus($id,$tt_donhang);
                header("Location: index.php?page=order"); // Chuyển hướng về trang danh sách
            }
            break;
        
}

include 'Views/footer.php';
