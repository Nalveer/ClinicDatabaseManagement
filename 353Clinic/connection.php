<?php


$DbSname = "localhost";
$DbUsername = "root";
$DbPassword = "";

$DbName ="dental";

$connection = mysqli_connect($DbSname,$DbUsername,$DbPassword,$DbName);

if(!$connection)

 die("connection failed");

?>
