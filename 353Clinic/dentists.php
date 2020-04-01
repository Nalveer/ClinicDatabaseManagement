
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
  </ul>

  <img src="pic1.jpg" alt="Art" width=100% height="200" style="border-bottom: lightblue">

  <img src="pic2.png" alt="logo"  height="100" width="100" id="logo">

  <h2 style="color:#3295a8;text-align:center;"> Dentists Information </h2>

  <?php

     $sql="SELECT * FROM Staff INNER JOIN dentist ON Staff.staff_id = dentist.staff_id";
     $result = mysqli_query($connection,$sql);
     $resultCheck = mysqli_num_rows($result);


     if($resultCheck>0){
       echo "
       <table id=\"info\">
         <tr>
           <th>Dentist Name</th>
           <th>Dentist ID</th>
           <th>ClinicID</th>

         </tr>";

       while($row=mysqli_fetch_assoc($result)){

         $row1=$row['sname'];
         $row2=$row['staff_id'];
         $row3=$row['clinic_id'];
         echo"
           <tr>
             <td>$row1</td>
             <td>$row2</td>
             <td>$row3</td>
           </tr>
           ";
        }
         echo "</table>";
      }
  ?>

  <div id="blockA">

    <h2 style="color:#3295a8"> View Appointments </h2>
    <hr/>
      <label> Dentist ID: </label>
      <input type="text" id="did" name= "dentistID" placeholder="dID">
      <label for="fname"> Date:</label>
      <input type="text" id="dDate" name="date" placeholder="YYYY-MM-DD">
      <br/>
      <button class="button1" onclick="findDentist()"> Search </button>
      <br/>
      <div id="innerBlock3">   </div>
  </div>

</div>
<button class="button1" onclick="add('addD','delD')" style="margin-left:50px;"> Add </button>
<button class="button1" onclick="delete1('delD','addD')" style="margin-left:50px;"> Delete </button>
<a href="SqlQuery.php"><button class="button1" style="margin-left:50px;"> Update </button></a>

<div id="divB">

  <div id="addD" class="add">
    <hr/>
      <label class="label1"> Dentist Name: </label>
      <input type="text" id="addnameD" placeholder="Name" class="inputL"><br/>
      <br/>
      <label class="label1"> dID:</label>
      <input type="text" id="addDid" placeholder="dID" class="inputL"><br/>
      <br/>
      <label class="label1"> ClinicID:</label>
      <input type="text" id="addaddrD"  placeholder="cID" class="inputL"><br/>
      <br/>
      <button class="" onclick="addDentist()" style="margin-left:10px;"> Add </button>
      <button class="" onclick="done()" style="margin-left:10px;"> Done </button>
      <p style="position:relative; margin-left:10px;" id="resp5"></p>
      <br/>
  </div>
  <div id="delD" class="del">

    <label style="position:relative;top:10px;left:10px;"> dentistID:</label>
    <input type="text" id="delDid" placeholder="dID" class="inputL"><br/>
    <button class="delB" onclick="deleteDentist()" > Delete </button>
    <button class="delB" onclick="done()"> Done </button><br/><br>
    <p style=" position: relative; margin-left:10px; top:60px;" id="resp6"></p>
  </div>

</div>

</Body>
</html>
