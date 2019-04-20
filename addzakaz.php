<?php
require_once 'parts/header.php';
require_once 'db/db.php';

$title = $_POST['title'];
$year = $_POST['years'];

$years = $connect->query( "SELECT `id_years`,`year` FROM `years`"); // переменная подключения -> запрос ( выбрать все данные из таблицы cats)
$years_arr = $years->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($years_arr);
echo "<pre>";
?>

<div>
        <form method="post" action="" name="add_zakaz">
        <div>
         <h3>Добавление нового заказа</h3>
         <fildset>
    <legend>Контактная информация</legend>
            <table>
                <tbody>

                <tr><td><label for="title">Название: </label></td><td><input type="text" name="title" /></td></tr>
                <tr><td><label for="years">Год: </label></td> <td><select name="years" size="3">
							<?php foreach($years_arr as $k => $v): ?>
								<option value="<?php $k ?>"><?php echo $v['year'] ?></option>
							<?php endforeach; ?>
						</select></td></tr>

                <tr><td><input type="submit" name="submit" value="Добавить заказ"></td></tr>

                </tbody>
            </table>
        </fildset>
        </div>
        </form>
    </div>

</body>
</html>