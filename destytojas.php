<?php

require_once("dbconnection.php");

$query = "SELECT * from user where role = 'studentas' ";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

$students = [];
while($row = $result->fetch_assoc()){

    $students[] = $row;
}

?>

<table>
  <tr>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Grupe</th>
    <th>📝</th>
  </tr>
 
  <?php
 
 foreach($students as $student){
    echo "<tr>";
    echo "<td>". $student["name"] ."</td>";
    echo "<td>". $student["lastname"] ."</td>";
    echo "<td>". $student["grupe"] ."</td>";
    echo '<td><a href="/studentedit.php?id='.$student["id"].'">redaguoti</a></td>';
    echo "</tr>";
 }

 ?>

</table>