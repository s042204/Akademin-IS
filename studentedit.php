<?php

require_once("dbconnection.php");

$studentoid = $_GET["id"];

$query = "SELECT * from user where id = ? ";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $studentoid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo"<h1>".$row["name"]. " ". $row["lastname"]. "</h1>";

$sql = "SELECT dalykas from info where id = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $studentoid);
$stmt->execute();
$result = $stmt->get_result();

$dalykai = [];
while($row = $result->fetch_assoc()){
    $dalykai[] = $row["dalykas"];
}


?>
<form action="editpazymi.php" method="post">
    <label for="dalykas">Pasirinkite dalyka:</label>

    <select name="Dalykas" id="dalykas">
    <?php
    foreach($dalykai as $d){
        echo "<option value=".$d.">".$d."</option>";
    }
    ?>
    </select>

    <label for="pazymys">Iveskite pazymi:</label>

    <select name="Pazymys" id="pazymys">
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    </select>
    <?php
    echo'<input type="hidden" name="studentid" value="';
    echo $studentoid;
    echo '">';
    ?>
    <button type="submit">Keisti</button>
</form>
