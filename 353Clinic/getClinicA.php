
<?php

   include_once 'connection.php';

$c = $_GET['c'];
$d = $_GET['d'];


$sql="SELECT * FROM Appointment WHERE Clinic_id = '$c' AND Appointment.date = '$d'";  //need to test

$result = mysqli_query($connection,$sql);

$resultCheck = mysqli_num_rows($result);


if($resultCheck>0){

echo "<br/>
<table id=\"appt\">
<tr>
<th>Appointment_ID</th>
<th>Date</th>
<th>patientID</th>
<th>ClinicID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['app_id'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td><a href=\"patients.php\" style=\"text-decoration:none\">" . $row['patient_id'] . "</a></td>";
    echo "<td><a href=\"Clinics.php\" style=\"text-decoration:none\">" . $row['clinic_id'] . "</a></td>";
    echo "</tr> </a>";
}
echo "</table>";
}
else{
  echo "NO Result";
}


?>
