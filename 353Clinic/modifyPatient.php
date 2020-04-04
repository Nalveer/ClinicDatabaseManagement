<?php

   include_once 'connection.php';
//getting variables
$p = intval($_GET['p']);
$q = $_GET['q'];
$n = $_GET['n'];
//$a = $_GET['a'];

//add query
if($q=="add"){
  $sql="INSERT INTO Patient (patient_id, pname) VALUES ('$p','$n')";
}
//delete query
else{
  $sql="DELETE FROM Patient WHERE patient_id=$p";
}

//query excecuted
$result = mysqli_query($connection,$sql);

if($result){
  echo "Successfull!";
}
else {
  echo "Failed!";
}


?>
