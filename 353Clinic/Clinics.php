
<?php

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


  <h2 style="color:#3295a8;text-align:center;"> Clinics Information </h2>

<?php

   $sql="SELECT * FROM Clinic";
   $result = mysqli_query($connection,$sql);
   $resultCheck = mysqli_num_rows($result);


   if($resultCheck>0){
     echo "
     <table id=\"info\">
       <tr>
         <th>Clinic ID</th>
         <th>Clinic Name</th>
         <th>Address</th>

       </tr>";

     while($row=mysqli_fetch_assoc($result)){

       $row1=$row['clinic_id'];
       $row2=$row['cname'];
       $row3=$row['address'];
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
    <label> Clinic ID: </label>
    <input type="text" id="cid" name= "clinicID" placeholder="cID">
    <label for="fname"> Date:</label>
    <input type="text" id="pDate" name="date" placeholder="YYYY/MM/DD">
    <br/>
    <button class="button1" onclick="findClinic()"> Search </button>
    <br/>
    <div id="innerBlock1" style="position:relative;top:30px;">   </div>


</div>
<button class="button1" onclick="add('addc','delc')" style="margin-left:50px;"> Add </button>
<button class="button1" onclick="delete1('delc','addc')" style="margin-left:50px;"> Delete </button>
<a href="SqlQuery.php"><button class="button1" style="margin-left:50px;"> Update </button></a>

<div id="divB">

  <div id="addc" class="add">
    <hr/>
      <label class="label1"> Clinic Name: </label>
      <input type="text" id="addname" placeholder="Name" class="inputL"><br/>
      <br/>
      <label class="label1"> cID:</label>
      <input type="text" id="addcid" placeholder="cID" class="inputL"><br/>
      <br/>
      <label class="label1"> Address:</label>
      <input type="text" id="addaddr"  placeholder="Address" class="inputL"><br/>
      <br/>
      <button class="" onclick="addClinic()" style="margin-left:10px;"> Add </button>
      <button class="" onclick="done()" style="margin-left:10px;"> Done </button>
      <p style="position:relative; margin-left:10px;" id="resp1"></p>
      <br/>
  </div>
  <div id="delc" class="del">

    <label style="position:relative;top:10px;left:10px;"> cID:</label>
    <input type="text" id="delcid" placeholder="cID" class="inputL"><br/>
    <button class="delB" onclick="deleteClinic()" > Delete </button>
    <button class="delB" onclick="done()"> Done </button><br/><br>
    <p style=" position: relative; margin-left:10px; top:60px;" id="resp2"></p>
  </div>

</div>


</Body>
</html>
