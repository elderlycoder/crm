<?php
require_once '../parts/header.php';

$mark = $_POST['addmark'];
$result = $connect->query("SELECT * FROM `mark` WHERE `mark`='$mark'");
$result = $result->fetch(PDO::FETCH_ASSOC);

if (!empty($_POST['addmark'])) {
	if (!empty($result['mark'])) {
		echo 'Такая марка есть в базе';
	} else {
		if (!empty($_POST['addmark']))
			$result = $connect->query("INSERT INTO `mark` SET `mark`='$mark'");
	}
}
?>

<div>
    <form name="mark" method="post" action="">
        <label for="title">Название: </label><input type="text" name="addmark">
        <button type="submit">Добавить</button>
    </form>
</div>
</body>
</html>