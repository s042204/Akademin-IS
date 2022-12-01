<?php

require_once("dbconnection.php");

$userid = $_GET["id"];

$query = "SELECT * from user where id = ? ";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<form action="editusername.php" method="post">
    <h3>Username: </h3>
    <?php
    echo "" . $row["username"] . " " . "";
    ?>
    <input type="text" placeholder="Iveskite nauja username" name="username">
    <button type="submit">Keisti</button>
    <hr>
    <?php
    echo'<input type="hidden" name="id" value="';
    echo $userid;
    echo '">';
    ?>
</form>

<form action="editname.php" method="post">
    <h3>Name: </h3>
    <?php
    echo "" . $row["name"] . " " . "";
    ?>
    <input type="text" placeholder="Iveskite nauja name" name="name">
    <button type="submit">Keisti</button>
    <hr>
    <?php
    echo'<input type="hidden" name="id" value="';
    echo $userid;
    echo '">';
    ?>
</form>

<form action="editlastname.php" method="post">
    <h3>Lastname: </h3>
    <?php
    echo "" . $row["lastname"] . " " . "";
    ?>
    <input type="text" placeholder="Iveskite nauja lastname" name="lastname">
    <button type="submit">Keisti</button>
    <hr>
    <?php
    echo'<input type="hidden" name="id" value="';
    echo $userid;
    echo '">';
    ?>
</form>

<form action="editpass.php" method="post">
    <h3>Password: </h3>
    <?php
    echo "" . $row["password"] . " " . "";
    ?>
    <input type="text" placeholder="Iveskite nauja password" name="password">
    <button type="submit">Keisti</button>
    <hr>
    <?php
    echo'<input type="hidden" name="id" value="';
    echo $userid;
    echo '">';
    ?>
</form>

<form action="editrole.php" method="post">
    <h3>Role: </h3>
    <?php
    echo "" . $row["role"] . " " . "";
    ?>
    <input type="text" placeholder="Iveskite nauja role" name="role">
    <button type="submit">Keisti</button>
    <hr>
    <?php
    echo'<input type="hidden" name="id" value="';
    echo $userid;
    echo '">';
    ?>
</form>