<?php


require_once("dbconnection.php");


$query = "SELECT role, id from user where username = ? and password = ? ";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $_POST["username"], $_POST["password"]);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if(mysqli_num_rows($result)==1){
    if($row["role"]==="studentas"){
        header("Location: studentas.php?id=" . $row["id"]);
        exit;
    }
    elseif($row["role"]==="destytojas"){
        header("Location: destytojas.php");
        exit;
    }
    elseif($row["role"]==="admin"){
        header("Location: admin.php");
        exit;
    }
}
else{
    echo "Something wrong";
    header("Location: index.php?error=login");
}
