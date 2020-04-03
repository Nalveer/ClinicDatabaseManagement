<?php

   include_once 'connection.php';

$p = intval($_GET['p']);        //patient
$st = intval($_GET['st']);        //staff
$ap = intval($_GET['ap']);      //appointment id
$c = $_GET['c'];                //clinic
$d = $_GET['d'];              //date
$s = $_GET['s'];              //status
$r = intval($_GET['r']);      //rece_id
$q = $_GET['q'];                //queryType


if($q=="add"){
  $sql="INSERT INTO appointment (app_id,staff_id,patient_id,clinic_id,appointment.date,status,rece_id) VALUES ('$ap','$st','$p','$c','$d','$s','$r')";
}
else{
  $sql="DELETE FROM appointment WHERE app_id=$ap";
}

$result = mysqli_query($connection,$sql);

if($result){
  echo "Successfull!";
}
else {

  echo "Failed!";
}


?>
