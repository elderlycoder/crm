<?php
require_once 'parts/header.php';
require_once 'db/db.php';

$title = $_POST['title'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$note = $_POST['note'];

//$result = $connect->query("INSERT INTO `contacts` (`title`, `name`, `phone`, `adress`, `note`) VALUES ('$title', '$name', '$phone', '$adress', '$note')");
$result = $connect->query("INSERT INTO `contacts` (`title`, `name`, `phone`, `adress`, `note`) VALUES (" . $connect->quote($title) . ", " . $connect->quote($name) . ", " . $connect->quote($phone) . ", " . $connect->quote($adress) . ", " . $connect->quote($note) . ")");
//$result = $connect->query("INSERT INTO `contacts` SET `title`='$title', `name`='$name', `phone`='$phone', `adress`='$adress', `note`='$note'");

if (isset($_REQUEST['submit'])){
	echo "Информация занесена в базу данных";
}else{
	echo "Информация не занесена в базу данных";
}

//header ("Location: http://crm.loc/contacts.php");

?>

    <div>
        <form method="post" action="" name="add_contact">
        <div>
         <h3>Добавление нового контакта</h3>
         <fildset>
    <legend>Контактная информация</legend>
            <table>
                <tbody>

                <tr><td><label for="title">Название: </label></td><td><input type="text" name="title" /></td></tr>
                <tr><td><label for="name">Имя: </label></td><td><input type="text" name="name" /></td></tr>
                <tr><td><label for="phone">Телефон:</label></td><td><input type="text" name="phone" /></td></tr>
                <tr><td><label for="adress">Адрес:</label></td><td><input type="text" name="adress" /></td></tr>
                <tr><td><label for="note">Заметки:</label></td><td><textarea name="note"></textarea></td></tr>
                <tr><td><input type="submit" name="submit" value="Добавить"></td></tr>

                </tbody>
            </table>
        </fildset>
        </div>
        </form>
    </div>

</body>
</html>