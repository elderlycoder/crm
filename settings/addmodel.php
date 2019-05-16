<?php

require_once '../parts/header.php';

ini_set('display_errors',1);
error_reporting(E_ALL);

$mark_arr = $connect->query( "SELECT `id_mark`,`mark` FROM `mark`"); // переменная подключения -> запрос ( выбрать все данные из таблицы cats)
$mark_arr = $mark_arr->fetchAll(PDO::FETCH_ASSOC);

$model = $_POST['addmodel'];
$mark = $_POST['mark'];

//$result = $connect->query("SELECT * FROM `model` WHERE `model`='$model'");
//$result = $result->fetch(PDO::FETCH_ASSOC);

if (!empty($_POST['addmodel'])) {
	if (!empty($result['model'])) {
		echo 'Такая модель есть в базе';
	} else {
		if (!empty($_POST['addmodel'])) {

			echo 'добавлено';
			$result = $connect->query("INSERT INTO `model`(`id_model`, `model`, `mark_id`) VALUES (NULL, '$model', '$mark')");
		}
	}
}

?>
<div>
	<form name="model" method="POST" action="">
		<label for="title">Название: </label><input type="text" name="addmodel">

		<label for="mark">Выберите марку: </label>
		<select name="mark" size="3">
			<?php $new = array();
			foreach($mark_arr as $v): ?>
			<option value="<?php echo $v['id_mark'] ?>"><?php echo $v['mark'] ?></option>
				<?php $new[]=$v['id_mark'] ?>
				<?php endforeach; ?>
			</select>
			<button type="submit">Добавить</button>
	</form>
	
</div>

