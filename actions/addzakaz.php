<?php
require_once '../parts/header.php';
//require_once 'db/db.php';

$title = $_POST['title'];
$year = $_POST['years'];

$years = $connect->query( "SELECT `id_years`,`year` FROM `years`"); // переменная подключения -> запрос ( выбрать все данные из таблицы cats)
$years_arr = $years->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//var_dump($years_arr);
//echo "<pre>";
//
//echo "<pre>";
//var_dump($_POST);
//echo "<pre>";
?>

<div>
        <form method="post" action="" name="add_zakaz">
        <div>
         <h3>Добавление нового заказа</h3>
    
    <p>Контактная информация:</p>
            <table>
                <tbody>

                <tr><td><label for="title">Название: </label></td><td><input type="text" name="title" /></td></tr>
                <tr><td><label for="title">Заказчик: </label></td><td><input type="text" name="contact" placeholder="Добавить контакт" /></td><td><a href="../contacts.php">Выбрать контакт</a></td></tr>
                <tr><td><label for="years">Год: </label></td> <td><select name="years" size="3">
							<?php foreach($years_arr as $k => $v): ?>
								<option value="<?php $k ?>"><?php echo $v['year'] ?></option>
							<?php endforeach; ?>
						</select></td></tr>
                         </tbody>
            </table>
  </div>
</form>
                        Детали:
                        <div>
         <div class="grp-tr">
                <div class="grp-th ">Название</div>
                    <div class="grp-th ">Номер детали</div>
                    <div class="grp-th ">Поставщик</div>
                    <div class="grp-th -">Кол-во</div>
                    <div class="grp-th ">Цена закупки</div>
                    <div class="grp-th ">Стоимость закупочная</div>
                    <div class="grp-th ">Цена продажи</div>
                    <div class="grp-th ">Стоимость продажи</div>
                    <div class="grp-th ">Статус</div>
                    <div class="grp-th ">&nbsp;1</div>
        </div>
        <div id="num">
            <div class="grp-tr-part">
                 <div class="grp-th "><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="grp-th -"><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="grp-th "><input type="text"></div>
                    <div class="goods__item-remove"></div>
            </div>
        </div>
        <button onclick="addform()">Добавить</button>
</div>
 <!-- <p id="num1"><input type="text"></p>-->
 
       

                <input type="submit" name="submit" value="Добавить заказ">

             </div>

</body>
</html>