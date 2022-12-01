<?php

require_once("dbconnection.php");

$query = "UPDATE info SET pazymys = ? WHERE id = ? AND dalykas = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("iis", $_POST["Pazymys"], $_POST['studentid'], $_POST["Dalykas"]);
$stmt->execute();
$result = $stmt->get_result();