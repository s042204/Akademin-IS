<?php

require_once("dbconnection.php");

$query = "UPDATE user SET lastname = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $_POST["lastname"], $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();