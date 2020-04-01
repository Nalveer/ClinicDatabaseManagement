<?php

   include_once 'connection.php';

$p = intval($_GET['p']);        //patient
$b = intval($_GET['b']);        //Bill
$ap = intval($_GET['ap']);      //appointment
$a = floatval($_GET['a']);      //Amount
$q = $_GET['q'];                //queryType

mysqli_select_db($connection,"353clinicdb");


if($q=="add"){
  $sql="INSERT INTO bills (PatientID,BillID,AppointmentID,Amount) VALUES ('$p','$b','$ap','$a')";
}
else{
  $sql="DELETE FROM bills WHERE BillID=$b";
}

$result = mysqli_query($connection,$sql);

if($result){
  echo "Successfull!";
}
else {
  echo "Failed!";
}


?>
