<?php

require_once("dbconnection.php");

$query = "SELECT * from user where role = 'studentas'";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

$students = [];
while($row = $result->fetch_assoc()){

    $students[] = $row;
}

$query = "SELECT * from user where role = 'destytojas'";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

$destyt = [];
while($row = $result->fetch_assoc()){

    $destyt[] = $row;
}

?>

<table>
    <h1>Studentai</h1>
  <tr>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Grupe</th>
    <th>📝</th>
    <th>📝</th>
    <th>🗑️</th>
  </tr>
 
  <?php
 
 foreach($students as $student){
    echo "<tr>";
    echo "<td>". $student["name"] ."</td>";
    echo "<td>". $student["lastname"] ."</td>";
    echo "<td>". $student["grupe"] ."</td>";
    echo '<td><a href="/studentedit.php?id='.$student["id"].'">redaguoti pažymius</a></td>';
    echo '<td><a href="/adminstud.php?id='.$student["id"].'">redaguoti informaciją</a></td>';
    echo '<td><a href="/delete.php?id='.$student["id"].'">Ištrinti</a></td>';
    echo "</tr>";
 }

 ?>
<hr>
</table>
<hr>
<table>
    <h1>Dėstytojai</h1>
  <tr>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>📝</th>
    <th>🗑️</th>
  </tr>
 
  <?php
 
 foreach($destyt as $destytojas){
    echo "<tr>";
    echo "<td>". $destytojas["name"] ."</td>";
    echo "<td>". $destytojas["lastname"] ."</td>";
    echo '<td><a href="/destytojasedit.php?id='.$destytojas["id"].'">redaguoti informaciją</a></td>';
    echo '<td><a href="/delete.php?id='.$student["id"].'">Ištrinti</a></td>';
    echo "</tr>";
 }

 ?>
<hr>
</table>
<hr>

<?php
echo '<td><a href="/registration.php?id='.$student["id"].'">Registruoti nauja vartotoja</a></td>';
?>