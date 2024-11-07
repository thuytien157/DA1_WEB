<?php
    include '../Views/header.php';
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'home':
            include '../Views/index.php';
            break;
        case 'product':
            include 'ProductController.php';
            $ProductController =new ProductController();
            break;
        case 'user':
            include 'UsersController.php';
            $UsersController =new UsersController();
            break;
        case 'form':
            include 'UpdateProductController.php';
            $UpdateProductController =new UpdateProductController();
            break;
    }
?>