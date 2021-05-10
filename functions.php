<?php

include("./connect_db.php");

function sanitize($raw_data) {
    global $conn;
    $data = htmlspecialchars($raw_data);
    $data = mysqli_real_escape_string($conn, $data);
    $data = trim($data);
    return $data;
}

function am_password_hash(){

    $t = time();

    $password = $t/60;

    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
    return array("password_hash" => $password_hash,
                "time" => $t,
                "t60" => $password);

}


?>