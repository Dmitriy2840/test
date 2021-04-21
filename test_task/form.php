<?php 

require_once("connect.php");

$category = $_POST['category'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$birthDate = $_POST['birthDate'];
 
    
try {
  $sth = $dbh->prepare("INSERT INTO task (category,firstname,lastname,email,gender,birthDate) VALUES (:category,:firstname,:lastname,:email,:gender,:birthDate)")
  ->execute(['category' => $category,'firstname' => $firstname,'lastname' => $lastname,'email' => $email, 'gender' => $gender, 'birthDate' => $birthDate]);   
}
catch (PDOException $e) {
    echo $e->getMessage();
}
    



 ?>