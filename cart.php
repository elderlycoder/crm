<?php
session_start();
require_once 'parts/header.php';

    foreach ($_SESSION['cart'] as $product):?>

        <div class="cart">
            <a href="product.php?product<?php echo'='.$product['title'] ?>">
            <img src="img/<?php echo $product['img'] ?>" alt="<?php echo $product['rus_name'] ?>">
            </a>
            <div class="cart-descr">
                Товар <?php echo $product ['rus_name'] ?> в количестве <?php echo $product ['quantity'] ?> шт на сумму <?php echo $product['quantity'] * $product ['price'] ?> рублей
            </div>
            <button type="submit">Удалить</button>
        </div>

        <hr>
<?php endforeach;?>
</body>
</html>

