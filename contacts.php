<?php
require_once 'parts/header.php';

if (isset($_GET['del'])) { // проверяем есть-ли в массиве GET запись с ключом 'del'
	$del = $_GET['del'];  // записываем значение ключав переменную $del
	$connect->query ( "DELETE FROM `contacts` WHERE id=$del"); //удаляем из БД запись созначением id равным del

}
    $cats = $connect->query( "SELECT `id`,`title`, `name`, `phone`, `adress`, `note` FROM `contacts`"); // переменная подключения -> запрос ( выбрать все данные из таблицы cats)
    $cats = $cats->fetchAll(PDO::FETCH_ASSOC); // переопределяем переменную $cats
    //обрабатываем изменения внесенные в контакт, на странице contact.php
    $id = $_POST['id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $note = $_POST['note'];

$result = $connect->query("UPDATE `contacts` SET `title`='$title', `name`='$name', `phone`='$phone', `adress`='$adress', `note`='$note' WHERE id='$id'");

?>

    <div class="main">

        <div class="card">
           <a href="actions/addcontact.php">+ Добавить Контакт</a>
        </div>
        <div>
            <form name="search" method="post" action="/actions/search.php">
                <input type="search" name="query" placeholder="Поиск">
                <button type="submit">Найти</button>
            </form>
        </div>

        <table cellpadding="5" cellspacing="0" border="1" width="100%">
            <tr><td>Название</td><td>Имя</td><td>Телефон</td><td>Адрес</td><td>Заметка</td><td>Удалить</td></tr>
		<?php foreach ($cats as $v):?>
             <tr>
                 <td><a href="contact.php?contact<?php echo '='.$v['id']?>"><?php echo $v['title'];?></a></td>
                 <td><?php echo $v['name'];?></td>
                 <td><?php echo $v['phone'];?></td>
                 <td><?php echo $v['adress'];?></td>
                 <td><?php echo $v['note'];?></td>
                 <td><a href="?del=<?php echo $v['id'];?>"> - </a></td>
             </tr>


		<?php endforeach;?>
        </table>
    </div>

</body>
</html>