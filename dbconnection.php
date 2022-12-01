<?php

$conn = new mysqli("localhost", "root", "", "praktinis_darbas");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
