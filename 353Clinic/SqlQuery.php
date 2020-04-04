<!DOCTYPE html>
<html>

<head>
<title> 353CLINIC </title>
<link rel="stylesheet" href="style.css">
<script src="script.js"> </script>
<head>

<Body>

  <ul class="MenuBar">
    <li class="MenuBlocks"><a href="Home.html" class="MenuLinks">Home</a></li>
    <li class="MenuBlocks"><a href="Clinics.php" class="MenuLinks">Clinics</a></li>
    <li class="MenuBlocks"><a href="dentists.php" class="MenuLinks">Dentists</a></li>
    <li class="MenuBlocks"><a href="patients.php" class="MenuLinks">Patients</a></li>
    <li class="MenuBlocks"><a href="SqlQuery.php" class="MenuLinks">SqlQuery</a></li>
    <li class="MenuBlocks"><a href="Bills.php" class="MenuLinks">Bills</a></li>
    <li class="MenuBlocks"><a href="appointments.php" class="MenuLinks">Appointments</a></li>
  </ul>
  <br>
<img src="pic1.jpg" alt="Art" width=100% height="200" style="border-bottom: lightblue">

<img src="pic2.png" alt="logo"  height="100" width="100" id="logo">



<div id="login">

<h2 style="color:#3295a8;"> Insert MySQL queries: </h2>
<textarea id="query" rows="4" cols="50">  </textarea>
<p></p>
<button  onclick="executeQuery()" class="button1"> Execute </button>
  <div id="innerDiv2" style="width:400px; margin: auto; height:100%; position: relative; top: 30px;"> </div>
  <div style="width:400px; margin: auto; height:100%; position: relative; top: 30px;"> </div>

</div>

</Body>

</html>
