<?php
require_once '../parts/header.php';
//require_once '../db/db.php';

$search = $_POST['query'];
$search= trim($search);
$search = strip_tags($search);  // Удаляет теги HTML и PHP из строки
$search = htmlspecialchars($search);

	if (!empty($search)) {
		if (strlen($search) < 3) {
			$text = 'Слишком короткий запрос';
		} else if (strlen($search) > 20) {
			$text = 'Слишком длинный запрос';
		} else {
			$result = $connect->query("SELECT `id`,`title`, `name`, `phone`, `adress`, `note`
                  FROM `contacts` WHERE `title` LIKE '%$search%'
                  OR `name` LIKE '%$search%' OR `phone` LIKE '%$search%'
                  OR `adress` LIKE '%$search%' OR `note` LIKE '%$search%'");
			$result = $result->fetchAll(PDO::FETCH_ASSOC);
		}  // ДОЛГ запрос с помощью подготовленных выражений
		if(empty($result)) {
		$text = 'По запросу ничего не найдено';
	}else {
			foreach ($result as $v) {
				$text .= '<p><a href="../contact.php?contact=' . $v['id'] . '">' . $v['title'] .' '.$v['name'].' т:'.$v['phone'].' '.$v['adress']. '</a></p>';
			}
		}
	}

	echo $text;

