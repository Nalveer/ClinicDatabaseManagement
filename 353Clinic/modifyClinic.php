<?php

   include_once 'connection.php';

$c = $_GET['c'];
$q = $_GET['q'];
$n = $_GET['n'];
$a = $_GET['a'];


if($q=="add"){
  $sql="INSERT INTO Clinic (clinic_id, cname, address	) VALUES ('$c','$n','$a')";
}
else{
  $sql="DELETE FROM Clinic WHERE clinic_id='$c'";
}

$result = mysqli_query($connection,$sql);

if($result){
  echo "Successfull!";
}
else {
  echo "Failed!";
}




?>
