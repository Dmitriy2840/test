

<!DOCTYPE html>
<html>

<head>
	<title> Тестовое задание </title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="form.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
		
		<h1>Тестовое задание</h1>
		<form action="form1.php" method="post" enctype="multipart/form-data">
			<p><input type="name"  name="name"  placeholder="Введите ФИО" maxlength="40" required></p>
			<p><input type="email" name="email" placeholder="Введите E-mail" maxlength="30" required></p>
			<p><input type="date"  name="date"  placeholder="Введите дату рождения" required></p>
			<p><input type="text"  name="text"  placeholder="Добавить комментарий" maxlength="200" size="50" required></p>
			<p><input type="submit" name="done" value="Отправить"></p>

			<div class="result"></div>
		

<?php 
 		$dsn = 'mysql:host=***; dbname=test;charset=utf8';
   		$pdo = new PDO($dsn,'***','***');
  		DEFINE('SALT', 'd89(S*6sd89(*&fg7^FD&6');

   		echo "<ul>";
   		$query = $pdo->query("SELECT * FROM `tasks` order by `id` DESC");
   		
   		while($row = $query->fetch(PDO::FETCH_OBJ)) {
   			
   			$hashSalt = password_hash($row->hash, PASSWORD_BCRYPT, ['salt' => SALT]);
   			echo '<li><b> Имя: '.$row->name.'</br> E-mail: '.$row->email.'</br> Дата рождения: '.$row->date.'</br> Комментарий: '.$row->text.'</br> Хеш: '.$row->hash.'</br> Хеш Соль: '.$hashSalt.'</b></li>';
   			//$hash = $row->hash;
   			//var_dump($hash);
   			}
   		echo "</ul>";



?>


</form>

</body>

</html>