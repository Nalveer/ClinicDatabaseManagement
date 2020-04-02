<?php
   //connecting to database
   include_once 'connection.php';

 ?>

<DOCTYPE! html>
<html>
<head>
  <title> 353CLINIC </title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"> </script>
</head>

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

  <img src="pic1.jpg" alt="Art" width=100% height="200" style="border-bottom: lightblue">

  <img src="pic2.png" alt="logo"  height="100" width="100" id="logo">

  <h2 style="color:#3295a8;text-align:center;"> Appointments </h2>

  <?php

     $sql="SELECT * FROM Appointment;";  //change to bill query
     $result = mysqli_query($connection,$sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck>0){

       echo "
       <table id=\"info\">
         <tr>

         <th>app_id</th>
         <th>staff_id</th>
         <th>Patient_id</th>
         <th>clinic_id</th>
         <th>Date</th>
         <th>Status</th>
         <th>rece_id</th>

         </tr>";

       while($row=mysqli_fetch_assoc($result)){

         $row1=$row['app_id'];   //modify table in database
         $row2=$row['staff_id'];
         $row3=$row['patient_id'];
         $row4=$row['clinic_id'];
         $row5=$row['date'];
         $row6=$row['status'];
         $row7=$row['rece_id'];
         echo"
           <tr>
             <td>$row1</td>
             <td>$row2</td>
             <td>$row3</td>
             <td>$row4</td>
             <td>$row5</td>
             <td>$row6</td>
             <td>$row7</td>
           </tr>
           ";
        }
         echo "</table>";
      }
  ?>
<!--
  <div id="blockA">

    <h2 style="color:#3295a8"> View Number of Missed Appointment </h2>
    <hr/>
      <label> Patient ID: </label>
      <input type="text" id="pidB" name= "patientID" placeholder="pID">
      <br/>
      <button class="button1" onclick="MissedAppt()"> Search </button>
      <br/>
      <div id="innerBlock7"  style="position:relative; top:20px;">   </div>
  </div>
-->
</div>
<button class="button1" onclick="add('addB','delB')" style="margin-left:50px;"> Add </button>
<button class="button1" onclick="delete1('delB','addB')" style="margin-left:50px;"> Delete </button>
<a href="SqlQuery.php"><button class="button1" style="margin-left:50px;"> Update </button></a>

<div id="divB" style="height:100%;">

  <div id="addB" class="add" style="height:350px;">
    <hr/>
      <label class="label1" style="position:relative;top:10px;"> Patient ID: </label>
      <input type="text" id="addnameA" placeholder="pID" class="inputL"><br/>
      <br/>
      <label class="label1"> Staff ID: </label>
      <input type="text" id="addStaff" placeholder="staff_id" class="inputL"><br/>
      <br/>
      <label class="label1"> clinic ID:</label>
      <input type="text" id="addClinic" placeholder="ClinicID" class="inputL"><br/>
      <br/>
      <label class="label1"> AppointmentID:</label>
      <input type="text" id="addAppoint"  placeholder="Appointment" class="inputL"><br/>
      <br/>
      <label class="label1"> rece_id:</label>
      <input type="text" id="rece"  placeholder="rece" class="inputL"><br/>
      <br/>
      <br/>
      <label class="label1"> Date:</label>
      <input type="text" id="addDate"  placeholder="Date" class="inputL"><br/>
      <br/>
      <label class="label1"> Status:</label>
      <input type="text" id="addStatus"  placeholder="Status" class="inputL"><br/>
      <br/>
      <button class="" onclick="addApp()" style="margin-left:10px;"> Add </button>
      <button class="" onclick="done()" style="margin-left:10px;"> Done </button>
      <p style="position:relative; margin-left:10px;" id="resp9"></p>
      <br/>
  </div>
  <div id="delB" class="del">

    <label style="position:relative;top:10px;left:10px;"> Appointment_ID:</label>
    <input type="text" id="delBill" placeholder="app_id" class="inputL"><br/>
    <button class="delB" onclick="deleteApp()" > Delete </button>
    <button class="delB" onclick="done()"> Done </button>
    <p style=" position: relative; margin-left:10px; top:60px;" id="resp10"></p>
  </div>

</div>

</div>


</Body>
</html>
