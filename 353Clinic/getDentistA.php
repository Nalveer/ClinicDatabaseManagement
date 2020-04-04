<?php

   include_once 'connection.php';

//getting variables
$s = intval($_GET['c']);   //staffID
$d = $_GET['d'];   //date


//sql query
$sql="SELECT * FROM Appointment WHERE staff_id ='$s' AND date between '$d' AND date_add('$d', interval 1 week)";  //change query after adding appointment table
$result = mysqli_query($connection,$sql);

$resultCheck = mysqli_num_rows($result);


//displaying result
if($resultCheck>0){

  echo "<br/>
  <table id=\"appt\">
  <tr>
  <th>app_id</th>
  <th>staff_id</th>
  <th>Patient_id</th>
  <th>clinic_id</th>
  <th>Date</th>
  <th>Status</th>
  <th>rece_id</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['app_id'] . "</td>";
      echo "<td><a href=\"dentists.php\" style=\"text-decoration:none\">" . $row['staff_id'] . "</a></td>";
      echo "<td><a href=\"patients.php\" style=\"text-decoration:none\">" . $row['patient_id'] . "</a></td>";
      echo "<td><a href=\"Clinics.php\" style=\"text-decoration:none\">" . $row['clinic_id'] . "</a></td>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['status'] . "</td>";
      echo "<td>" . $row['rece_id'] . "</td>";
      echo "</tr> </a>";
  }
  echo "</table>";
}

else{
  echo "No result";
}


?>
