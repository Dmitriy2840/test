<?php 

require_once("connect.php");

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$OnPage = 2;
$from = ($page - 1) * $OnPage;

try {
  $sth = $dbh->query("SELECT * FROM task WHERE id > 0 LIMIT $from,$OnPage");
   //for ($data = []; $row = $sth->fetch(PDO::FETCH_ASSOC); $data[] = $row)[1];
   //print_r($data);
   while($row = $sth->fetch(PDO::FETCH_ASSOC)){
    $category = $row['category'];
    $firstnameme = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $gender = $row['gender'];
    $birthDate = $row['birthDate'];
 
	echo "<div style='left:auto; position:absolute; width:500px; margin:1px; '><table class='table table-sm table-dark'  >
	<tr><td>$category</td><td>$firstnameme</td><td>$lastname</td><td>$email</td><td>$gender</td><td>$birthDate</td></tr>
	</table>"; 
    }	
}	
catch (PDOException $e) {
    echo $e->getMessage();
}

try {
  $sth = $dbh->query("SELECT COUNT(*) as count FROM task");
  $count = $sth->fetch(PDO::FETCH_ASSOC)['count'];
  $pagesCount = ceil($count / $OnPage);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
	if ($page != 1) {
		$prev = $page - 1;
		echo "<a href=\"?page=$prev\"><<</a> ";
	}
	
	
	for($i = 1;$i <= $pagesCount; $i++) {
		if ($page == $i) {
			$class = ' class="active"';
		} else {
			$class = '';
		}
		echo "<a href=\"?page=$i\"$class >$i</a> ";
	}
	if ($page != $pagesCount) {
		$prev = $page + 1;
		echo "<a href=\"?page=$prev\" >>></a> ";
	}




?>
	
	<link rel="stylesheet" href="bootstrap.min.css">

	<p><form method="post"	action="export.php">
			<input class="btn btn-success" type="submit" name="export" value="CSV Export">
	</form>
	