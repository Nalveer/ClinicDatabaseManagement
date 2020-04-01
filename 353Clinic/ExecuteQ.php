
<?php

   include_once 'connection.php';

$sql = $_GET['q'];


$result = mysqli_query($connection,$sql);

if($result){

 echo "<p>Query Executed Successfully</p>";

 if(gettype($result)!="boolean"){
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck>0){
 echo "<br/>";
 echo "<table id=\"appt\">";
 echo "<tr>";
 while ($fieldinfo = mysqli_fetch_field($result)) {
    echo "<th>".$fieldinfo->name."</th>";
 }
 echo "</tr>";


 while($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
    $num = count($row);
    echo "<tr>";
    for($i=0;$i<$num;$i++){
    echo "<td>" . $row[$i] . "</td>";
    }
    echo "</tr>";

 }

 echo "</table>";
 }
 }

}
else echo "<p>Invalid Input</p>";

?>
