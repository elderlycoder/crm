<?php
session_start();
require_once '../db/db.php';

    if(isset($_POST['id'])) { // {'id'] в массиве $_POST появляется после нажатия кнопки "Добавить в корзину"
//        unset ($_SESSION['totalQuantity']);
//        unset ($_SESSION['totalPrice']);
//        unset ($_SESSION['cart']);

        $id = $_POST['id'];
        $product = $connect->query("SELECT * FROM products WHERE id='$id'");
        $product = $product->fetch(PDO::FETCH_ASSOC);

        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id] ['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id] = [
                'title' => $product['title'],
                'price' => $product['price'],
                'rus_name' => $product['rus_name'],
                'img' => $product['img'],
                'quantity' => 1,
                ];
        }
        
        if ($_SESSION['totalQuantity']) {
            $_SESSION['totalQuantity'] = ++$_SESSION['totalQuantity'];
        } else {
            $_SESSION['totalQuantity'] = 1;
        }
        // $_SESSION['totalQuantity'] = $_SESSION['totalQuantity'] ? ++$_SESSION['totalQuantity'] : 1;
         $_SESSION['totalPrice'] = $_SESSION['totalPrice'] ? $_SESSION['totalPrice'] += $product['price'] : $product['price'];
    }

    header ("Location: /index.php");