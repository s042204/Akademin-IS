<?php

require_once("dbconnection.php");

$studentoid = $_GET["id"];

$query = "SELECT * from info where id = ? ";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $studentoid);
$stmt->execute();
$result = $stmt->get_result();

$info = [];

while($row = $result->fetch_assoc()){
    $info[] = $row;
}

?>

<table>
  <tr>
    <th>Paskaita</th>
    <th>Destytojas</th>
    <th>Pazymys</th>
  </tr>
 <?php
 
 foreach($info as $student){
    echo "<tr>";
    echo "<td>". $student["dalykas"] ."</td>";
    echo "<td>". $student["destytojas"] ."</td>";
    echo "<td>". $student["pazymys"] ."</td>";
    echo "</tr>";
 }

 ?>


</table>