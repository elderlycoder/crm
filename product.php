<?php

require_once 'parts/header.php';
    if (isset($_GET['product'])) {
        $currentProduct = $_GET['product'];
        $product = $connect->query("SELECT * FROM products WHERE title='$currentProduct'");
        $product = $product->fetch(PDO::FETCH_ASSOC);
    }
?>

<div class="product-card">
    <a href="index.php">Вернуться на главную</a>

    <h2><?php echo $product ['rus_name'].' ('.$product['price'].' рублей)' ?></h2>
    <div class="descr"><?php echo $product ['descr'] ?></div>
    <img width="300" src="img/<?php echo $product ['img'];?>" alt="Фото">
    <form action="actions/add.php" method="post">
        <input type="hidden" name="id" value="<?php echo $product['id']?>">
        <input type="submit" value="Добавить в корзину">
    </form>
</div>
