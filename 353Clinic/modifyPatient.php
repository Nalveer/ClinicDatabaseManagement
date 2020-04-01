<?php

   include_once 'connection.php';

$p = intval($_GET['p']);
$q = $_GET['q'];
$n = $_GET['n'];
//$a = $_GET['a'];

if($q=="add"){
  $sql="INSERT INTO patient (patient_id, pname) VALUES ('$p','$n')";
}
else{
  $sql="DELETE FROM patient WHERE patient_id=$p";
}

$result = mysqli_query($connection,$sql);

if($result){
  echo "Successfull!";
}
else {
  echo "Failed!";
}


?>
