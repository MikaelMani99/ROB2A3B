<?php
include('connect.php');
$direct=$_POST['direct'];


$stmt = $DBcon->prepare("INSERT INTO direction(action) VALUES(:direct)");

$stmt->bindparam(':direct', $direct);

if($stmt->execute())
{
  $res="Data Inserted Successfully:";
  echo json_encode($res);
}
else {
  $error="Not Inserted,Some Probelm occur.";
  echo json_encode($error);
}



 ?>
