<?php
require_once("dbconnection.php");
$query = "DELETE from user where id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $_POST["id"]);
$stmt->execute();
$result = $stmt->get_result();
