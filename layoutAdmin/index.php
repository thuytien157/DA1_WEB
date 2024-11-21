<?php
session_start();
include 'Views/header.php';
include 'model/ConnectModel.php';
require_once "controllers/AuthorController.php";
require_once "controllers/CategoryController.php";
<<<<<<< HEAD
require_once "controllers/PublishingHouseController.php"; 
=======
require_once "controllers/OrderController.php";
require_once "controllers/UsersController.php";
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
$ConnectModel = new ConnectModel();
$AuthorController = new AuthorController();
$AuthorModel = new AuthorModel();
$CategoryController = new CategoryController();
$CategoryModel = new CategoryModel();
<<<<<<< HEAD
$PublishingHouseController = new PublishingHouseController();
$PublishingHouseModel = new PublishingHouseModel();
=======
$OrderController = new OrderController($action);
$OrderModel = new OrderModel();
$action=isset($_GET['action']) ? $_GET['action']:'';


>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
$ConnectModel->connect();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        include 'Views/index.php';
        break;

    case 'logout':
        // Chuyển hướng người dùng về trang đăng nhập
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
        $AuthorController->listAuthors(); //lay listauthor hien thi cho view
        break;
<<<<<<< HEAD
        case 'add_author':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') { //neu nguoidung gui form
                $ten_tacgia = $_POST['ten_tacgia']; //ley ten tac gia tu form
                $result = $AuthorController->addAuthor($ten_tacgia);//neu them thanh cong chuyen huong ve trang ds
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
                }
            break;
        case 'delete_author':
                $id = $_GET['id'];
                $result = $AuthorController->deleteAuthor($id);
                header("Location: index.php?page=author");
                break;
break;
case 'publishinghouse':
    $PublishingHouseController->listPublishingHouses(); 
    break;

case 'add_publishinghouse':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ten_nxb = $_POST['ten_nxb'];
        $PublishingHouseController->addPublishingHouse($ten_nxb);
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
    }
    break;

case 'delete_publishinghouse':
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $PublishingHouseController->deletePublishingHouse($id); // Delete publishing house
    }
    break;
=======
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
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
    case 'user':
        include 'UsersController.php';
        $UsersController = new UsersController();
        break;
<<<<<<< HEAD
=======
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

            case 'details':
                include 'controllers/OrderController.php';
                $OrderController = new OrderController($action);
                
                break;
        
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
}

include 'Views/footer.php';
