<?php
//session_start();
//так-как файл header подключен во всех файлах, подключение к базе данных то-же пропишем здесь
//require_once('db/db.php');
require_once(dirname(__DIR__).'/db/db.php');

//$cats = $connect->query( "SELECT * FROM cats"); // переменная подключения -> запрос ( выбрать все данные из таблицы cats)
//$cats = $cats->fetchAll(PDO::FETCH_ASSOC); // переопределяем переменную $cats

//echo "<pre>";
//var_dump($cats);
//echo "<pre>";

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="../css/style.css?v4">
    <script src="../js/script.js" defer></script>
</head>
<body>

<nav>
    <ul>
        <li><a href="../index.php">Главная</a></li>
        <li ><a href = "../contacts.php" >Контакты</a ></li >
        <li ><a href = "../zakazy.php" >Заказы</a ></li >
        <li ><a href = "../nastroyki.php" >Настройки</a ></li >
       
        </ul>
</nav>
<hr>
