<?php


$DbSname = "jvc353.encs.concordia.ca";
$DbUsername = "jvc353_4";
$DbPassword = "353_Admi";

$DbName ="jvc353_4";

$connection = mysqli_connect($DbSname,$DbUsername,$DbPassword,$DbName);

if(!$connection)

 die("connection failed");

?>
