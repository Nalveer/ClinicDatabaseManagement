<?php

   include_once 'connection.php';

$p = intval($_GET['p']);        //staff
$b = intval($_GET['b']);        //Bill
$ap = intval($_GET['ap']);      //appointment
$a = floatval($_GET['a']);      //Total
$d = $_GET['d'];              //date
$s = $_GET['s'];              //status
$q = $_GET['q'];                //queryType


if($q=="add"){
  $sql="INSERT INTO bill (bill_id,app_id, staff_id,total,bill.date,status) VALUES ('$b','$ap','$p','$a','$d','$s')";
}
else{
  $sql="DELETE FROM bill WHERE bill_id=$b";
}

$result = mysqli_query($connection,$sql);

if($result){
  echo "Successfull!";
}
else {

  echo "Failed!";
}


?>
