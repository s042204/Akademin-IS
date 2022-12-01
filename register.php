<?php

require_once("dbconnection.php");

// echo"<pre>";
// var_dump($_POST);
// exit;

$query = "INSERT INTO user (username, name, lastname, password, grupe, role) VALUES (?, ?, ?, ?, ?, ?)";
//var_dump($query);
$stmt = $conn->prepare($query);
$stmt->bind_param("ssssss", $_POST["username"], $_POST["name"], $_POST["lastname"], $_POST["password"], $_POST["group"], $_POST["role"]);
$stmt->execute();


// lastname, password, group, role
//, $_POST["lastname"], $_POST["password"], $_POST["group"], $_POST["role"]