<?php

   include_once 'connection.php';

$d = intval($_GET['d']); //dentist
$q = $_GET['q'];   //query
$n = $_GET['n'];   //name
$c = $_GET['a'];   //clinic

//add queries
if($q=="add"){
  $sql="INSERT INTO Staff (staff_id,sname,clinic_id) VALUES ('$d','$n','$c')";
  $sql2="INSERT INTO hygienist(staff_id) VALUES ('$d')";
  $sql3="INSERT INTO dentist(staff_id) VALUES ('$d')";
}
//delete queries
else{
  $sql="DELETE FROM dentist WHERE staff_id=$d";
  $sql2="DELETE FROM hygienist WHERE staff_id=$d";
  $sql3="DELETE FROM Staff WHERE staff_id=$d";

}

$result = mysqli_query($connection,$sql);
$result2 = mysqli_query($connection,$sql2);
$result3 = mysqli_query($connection,$sql3);

//this fails, because of the foreign key constraints,

if ( false===$result2 || false===$result2 || false===$result3) {
  printf("error1: %s\n", mysqli_error($connection));
}


if($result AND $result2 AND $result3){
  echo "Successfull!";
}
else {
  echo "Failed!";
}




?>
