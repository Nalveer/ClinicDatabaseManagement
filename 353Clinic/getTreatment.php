<?php

   include_once 'connection.php';

$a = intval($_GET['a']);


$sql=" SELECT treatment.treat_id, treatment.content, treatment.price FROM assign INNER JOIN treatment ON assign.treat_id = treatment.treat_id WHERE assign.app_id='$a';";
$result = mysqli_query($connection,$sql);

if($result){

$resultCheck = mysqli_num_rows($result);


if($resultCheck>0){

echo "<br/>
<table id=\"appt\">
<tr>
<th>treat_id</th>
<th>Treatment</th>
<th>Price</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['treat_id'] . "</td>";
    echo "<td>" . $row['content'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr> </a>";
}
echo "</table>";
}
else{
  echo "No result found!";
}
}
else{

echo "Failed!";

}

?>
