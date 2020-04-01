<?php

   include_once 'connection.php';

$c = intval($_GET['c']);
$d = intval($_GET['d']);



$sql="SELECT * FROM appointment WHERE staff_id = '$c' AND appointment.date =$d";  //change query after adding appointment table
$result = mysqli_query($connection,$sql);

$resultCheck = mysqli_num_rows($result);


if($resultCheck>0){

echo "<br/>
<table id=\"appt\">
<tr>
<th>Date</th>
<th>pID</th>
<th>Patient Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td><a href=\"patients.php\" style=\"text-decoration:none\">" . $row['cID'] . "</a></td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "</tr> </a>";
}
echo "</table>";
}


?>
