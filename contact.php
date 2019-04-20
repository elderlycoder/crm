<?php
require_once 'parts/header.php';

// выводим данные конкретного контакта (выбранного на стр. contacts.php) сразу в форму для редактирования
if (isset($_GET['contact'])) {
	$currentContact = $_GET['contact'];
	$contact = $connect->query("SELECT * FROM contacts WHERE id='$currentContact'");
	$contact = $contact->fetch(PDO::FETCH_ASSOC);
}

?>

<div>
    <form method="post" action="contacts.php" name="edit_contact">
        <div>
            <h3>Редактировать контакт</h3>
                <table>
                    <tbody>

                    <tr><td><label for="title">Название: </label></td><td><input type="hidden" name="id" value="<?php echo $contact['id'];?>" /></td></tr>
                    <tr><td><label for="title">Название: </label></td><td><input type="text" name="title" value="<?php echo $contact['title'];?>" /></td></tr>
                    <tr><td><label for="name">Имя: </label></td><td><input type="text" name="name" value="<?php echo $contact['name'];?>"/></td></tr>
                    <tr><td><label for="phone">Телефон:</label></td><td><input type="text" name="phone" value="<?php echo $contact['phone'];?>"/></td></tr>
                    <tr><td><label for="adress">Адрес:</label></td><td><input type="text" name="adress" value="<?php echo $contact['adress'];?>"/></td></tr>
                    <tr><td><label for="note">Заметки:</label></td><td><textarea name="note"><?php echo $contact['note'];?></textarea></td></tr>
                    <tr><td></td><td><input type="submit"></td></tr>

                    </tbody>
                </table>
        </div>
    </form>
</div>