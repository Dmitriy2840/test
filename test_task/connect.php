<?php 
  
try {  
  
  $dbh = new PDO('mysql:dbname=test;host=;charset=utf8', '', '');  
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->exec("set names utf8");
}  
catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

 ?>