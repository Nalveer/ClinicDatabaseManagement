<?php

   include_once 'connection.php';

$d = intval($_GET['d']);
$q = $_GET['q'];
$n = $_GET['n'];
$a = $_GET['a'];


if($q=="add"){
  $sql="INSERT INTO Staff (staff_id,sname,clinic_id) VALUES ('$d','$n','$a')";
  $sql2="INSERT INTO dentist(staff_id) VALUES ('$d')";
}
else{
  $sql="DELETE FROM dentist WHERE staff_id=$d";
  $sql2="DELETE FROM Staff WHERE staff_id=$d";
}

$result = mysqli_query($connection,$sql);
$result2 = mysqli_query($connection,$sql2);

if($result AND $result2){
  echo "Successfull!";
}
else {
  echo "Failed!";
}




?>
