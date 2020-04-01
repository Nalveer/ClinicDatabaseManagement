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

  <h2 style="color:#3295a8;text-align:center;"> Billing Information </h2>

  <?php

     $sql="SELECT * FROM Bill;";  //change to bill query
     $result = mysqli_query($connection,$sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck>0){
       echo "
       <table id=\"info\">
         <tr>
           <th>Bill ID</th>
           <th>AppointmentID</th>
           <th>staffID</th>
           <th>Date</th>
           <th>Amount</th>
           <th>status</th>
         </tr>";

       while($row=mysqli_fetch_assoc($result)){

         $row1=$row['bill_id'];   //modify table in database
         $row2=$row['app_id'];
         $row3=$row['staff_id'];
         $row4=$row['date'];
         $row5=$row['total'];
         $row6=$row['status'];
         echo"
           <tr>
             <td>$row1</td>
             <td>$row2</td>
             <td>$row3</td>
             <td>$row4</td>
             <td>$row5</td>
             <td>$row6</td>
           </tr>
           ";
        }
         echo "</table>";
      }
  ?>

  <div id="blockA">

    <h2 style="color:#3295a8"> View Bills of Patient </h2>
    <hr/>
      <label> Patient ID: </label>
      <input type="text" id="pidB" name= "patientID" placeholder="pID">
      <br/>
      <button class="button1" onclick="findPatientBill()"> Search </button>
      <br/>
      <div id="innerBlock7"  style="position:relative; top:20px;">   </div>
  </div>

</div>
<button class="button1" onclick="add('addB','delB')" style="margin-left:50px;"> Add </button>
<button class="button1" onclick="delete1('delB','addB')" style="margin-left:50px;"> Delete </button>
<a href="SqlQuery.php"><button class="button1" style="margin-left:50px;"> Update </button></a>
<button class="button1" onclick="viewUnpaidBill()" style="margin-left:50px;"> Unpaid Bills </button>

<div id="divB">

  <div id="addB" class="add" style="height:350px;">
    <hr/>
      <label class="label1"> Patient ID: </label>
      <input type="text" id="addnameB" placeholder="pID" class="inputL"><br/>
      <br/>
      <label class="label1"> Bill ID:</label>
      <input type="text" id="addBill" placeholder="BillID" class="inputL"><br/>
      <br/>
      <label class="label1"> AppointmentID:</label>
      <input type="text" id="addAppoint"  placeholder="Appointment" class="inputL"><br/>
      <br/>
      <label class="label1"> Amount:</label>
      <input type="text" id="addAmount"  placeholder="Amount" class="inputL"><br/>
      <br/>
      <br/>
      <label class="label1"> Date:</label>
      <input type="text" id="addDate"  placeholder="Date" class="inputL"><br/>
      <br/>
      <label class="label1"> Status:</label>
      <input type="text" id="addStatus"  placeholder="Status" class="inputL"><br/>
      <br/>
      <button class="" onclick="addBill()" style="margin-left:10px;"> Add </button>
      <button class="" onclick="done()" style="margin-left:10px;"> Done </button>
      <p style="position:relative; margin-left:10px;" id="resp7"></p>
      <br/>
  </div>
  <div id="delB" class="del">

    <label style="position:relative;top:10px;left:10px;"> BillID:</label>
    <input type="text" id="delBill" placeholder="BillID" class="inputL"><br/>
    <button class="delB" onclick="deleteBill()" > Delete </button>
    <button class="delB" onclick="done()"> Done </button>
    <p style=" position: relative; margin-left:10px; top:60px;" id="resp8"></p>
  </div>

</div>

<div id="unpaidB">

<p style="color:#3295a8; margin-left:50px;">Unpaid Bills</p>

<?php

   $sql="SELECT * FROM Bill WHERE status='unpaid'";  //change to where bill is unpaid
   $result = mysqli_query($connection,$sql);
   $resultCheck = mysqli_num_rows($result);


   if($resultCheck>0){
     echo "
     <table id=\"info\">
       <tr>
       <th>Bill ID</th>
       <th>AppointmentID</th>
       <th>StaffID</th>
       <th>Date</th>
       <th>Total</th>
       <th>status</th>
       </tr>";


     while($row=mysqli_fetch_assoc($result)){

       $row1=$row['bill_id'];   //modify table in database
       $row2=$row['app_id'];
       $row3=$row['staff_id'];
       $row4=$row['date'];
       $row5=$row['total'];
       $row6=$row['status'];

     echo "
       <tr>
         <td>$row1</td>
         <td>$row2</td>
         <td>$row3</td>
         <td>$row4</td>
         <td>$row5</td>
         <td>$row6</td>
       </tr>
       " ;
    }
       echo "</table>";
    }
?>


</div>


</Body>
</html>
