<?php

require_once("dbconnection.php");

$query = "UPDATE user SET password = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $_POST["password"], $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();