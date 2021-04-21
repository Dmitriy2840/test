<?php 

if(isset($_POST["export"]))
{
	require_once("connect.php");
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');
	$output = fopen("php://output", "w");
	fputcsv($output, array('id', 'category', 'firstname', 'lastname', 'email', 'gender', 'bithDate'));
try {
  		$sth = $dbh->query("SELECT * FROM task ORDER BY id DESC");
  		
  		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
  				fputcsv($output, $row);
 		   }	
   	}	
catch (PDOException $e) {
    echo $e->getMessage();
}
	fclose($output);


}


 ?>