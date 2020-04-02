<?php

   include_once 'connection.php';

$p = intval($_GET['p']);


$sql="SELECT bill_id,bill.app_id,bill.staff_id,bill.date,total,bill.status FROM bill INNER JOIN appointment ON appointment.app_id = bill.app_id WHERE patient_id = '".$p."'";  //change query after adding bill table
$result = mysqli_query($connection,$sql);

if($result){

$resultCheck = mysqli_num_rows($result);


if($resultCheck>0){
//change table after getting bill table
echo "<br/>
<table id=\"appt\">
<tr>
<th>Bill ID</th>
<th>AppointmentID</th>
<th>staffID</th>
<th>Date</th>
<th>Total</th>
<th>status</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['bill_id'] . "</td>";
    echo "<td>" . $row['app_id'] . "</td>";
    echo "<td>" . $row['staff_id'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['total'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "</tr> </a>";
}
echo "</table>";
}
}
else{

echo "No result";

}

?>
