
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

  <h2 style="color:#3295a8;text-align:center;"> Patients Information </h2>

  <?php

     $sql="SELECT * FROM Patient;";
     $result = mysqli_query($connection,$sql);
     $resultCheck = mysqli_num_rows($result);


     if($resultCheck>0){
       echo "
       <table id=\"info\">
         <tr>
           <th>Patient Name</th>
           <th>Patient ID</th>


         </tr>";

       while($row=mysqli_fetch_assoc($result)){

         $row1=$row['pname'];   //need to change after adding patients to database
         $row2=$row['patient_id'];

         echo"
           <tr>
             <td>$row1</td>
             <td>$row2</td>

           </tr>
           ";
        }
         echo "</table>";
      }
  ?>

  <div id="blockA">

    <h2 style="color:#3295a8"> View all Appointments of Patient </h2>
    <hr/>
      <label> Patient ID: </label>
      <input type="text" id="pid" name= "patientID" placeholder="pID">
      <br/>
      <button class="button1" onclick="findPatient()"> Search </button>
      <br/>
      <div id="innerBlock2" style="position:relative; top:30px;">   </div>
  </div>

</div>
<button class="button1" onclick="add('addp','delp')" style="margin-left:50px;"> Add </button>
<button class="button1" onclick="delete1('delp','addp')" style="margin-left:50px;"> Delete </button>
<a href="SqlQuery.php"><button class="button1" style="margin-left:50px;"> Update </button></a>
<button class="button1" onclick="viewMissed()" style="margin-left:50px;"> apptMissed </button>

<div id="divB">

  <div id="addp" class="add">
    <hr/>
      <label class="label1"> Patient Name: </label>
      <input type="text" id="addnameP" placeholder="Name" class="inputL"><br/>
      <br/>
      <label class="label1"> pID:</label>
      <input type="text" id="addpid" placeholder="cID" class="inputL"><br/>
      <br/>
      <!--<label class="label1"> Address:</label>
      <input type="text" id="addaddrP"  placeholder="Address" class="inputL"><br/>
      <br/>-->
      <button class="" onclick="addPatient()" style="margin-left:10px;"> Add </button>
      <button class="" onclick="done()" style="margin-left:10px;"> Done </button>
      <p style="position:relative; margin-left:10px;" id="resp3"></p>
      <br/>
  </div>
  <div id="delp" class="del">

    <label style="position:relative;top:10px;left:10px;"> cID:</label>
    <input type="text" id="delpid" placeholder="pID" class="inputL"><br/>
    <button class="delB" onclick="deletePatient()" > Delete </button>
    <button class="delB" onclick="done()"> Done </button><br/><br>
    <p style=" position: relative; margin-left:10px; top:60px;" id="resp4"></p>
  </div>

</div>

<div id="missAppt">

<p style="color:#3295a8; margin-left:50px;">Missed Appointment</p>

<?php

   $sql="SELECT patient.patient_id, patient.pname, temp.missedAppt FROM (SELECT patient_id, COUNT(status) AS missedAppt
   FROM appointment WHERE status='missed' GROUP BY patient_id)temp, patient WHERE patient.patient_id = temp.patient_id;";

   $result = mysqli_query($connection,$sql);
   $resultCheck = mysqli_num_rows($result);


   if($resultCheck>0){
     echo "
     <table id=\"info\">
       <tr>
       <th>Patient ID</th>
       <th>Name</th>
       <th>Missed Appointment</th>
       </tr>";


     while($row=mysqli_fetch_assoc($result)){

       $row1=$row['patient_id'];   //modify table in database
       $row2=$row['pname'];
       $row3=$row['missedAppt'];

     echo "
       <tr>
         <td>$row1</td>
         <td>$row2</td>
         <td>$row3</td>
       </tr>
       " ;
    }
       echo "</table>";
       echo "<button onclick=\"done()\" style=\"position:relative;top:10px;left:50px;\">Done</button>";
    }
?>


</Body>
</html>
