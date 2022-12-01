<?php

require_once("dbconnection.php");

$query = "UPDATE user SET grupe = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $_POST["grupe"], $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();
