<?php 


if (isset($_POST["done"])) {

	if ($_POST["name,email,date,text"] == "") 
	 	echo "Введите имя";
	else
		header("Location:index.php");
	}

var_dump($_POST);


$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$text = $_POST['text'];

 
    $dsn = 'mysql:host=***; dbname=test;charset=utf8';
    $pdo = new PDO($dsn,'***','***');
    
    DEFINE('SALT', 'd89(S*6654789(*&fg7^FD&6');

    $arr = array($name,$email,$date,$test);
    $hash=hash('md2',$name);
    
    


    $sql = 'INSERT INTO tasks(name,email,date,text,hash) VALUES(:name,:email,:date,:text,:hash)';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name,'email' => $email,'date' => $date,'text' => $text, 'hash' => $hash]);
   


 ?>