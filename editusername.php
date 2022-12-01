<?php

require_once("dbconnection.php");

$query = "UPDATE user SET username = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $_POST["username"], $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();