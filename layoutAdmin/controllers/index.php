<?php
session_start();
include '../Views/header.php';
include '../model/ConnectModel.php';
require_once "../controllers/AuthorController.php";
$AuthorController = new AuthorController();
$ConnectModel = new ConnectModel();
$AuthorModel = new AuthorModel();
$ConnectModel->connect();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        include '../Views/index.php';
        break;

    case 'logout':
        session_unset();

        // Hủy session
        session_destroy();

        // Chuyển hướng người dùng về trang đăng nhập
        header("Location: /layout/index.php");
        exit();
        break;

    case 'category':
        include '../Views/category.php';
        break;
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
            include '../Views/edit_author.php';
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
        include '../Views/publishinghouse.php';
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
}

include '../Views/footer.php';
