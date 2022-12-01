<?php

require_once("dbconnection.php");

$query = "UPDATE user SET role = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $_POST["role"], $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();