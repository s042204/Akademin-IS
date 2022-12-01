<?php

require_once("dbconnection.php");

$query = "UPDATE user SET name = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $_POST["name"], $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();
