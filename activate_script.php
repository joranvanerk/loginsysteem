<?php

include("./functions.php");

$id = $_POST["id"];
$pwh = $_POST["pwh"];
$password = sanitize($_POST["password"]);
$passwordCheck = sanitize($_POST["passwordCheck"]);

if (empty($_POST["password"]) || empty($_POST["passwordCheck"])){
    header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
}elseif (strcmp($password, $passwordCheck)){
    header("Location: ./index.php?content=message&alert=password-notsame&id=$id&pwh=$pwh");
}else {
    $sql = "SELECT * FROM `register` WHERE `id` = $id AND `password` = '$pwh'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){

    }else {
        header("Location: ./index.php?content=message&alert=nopwhm");
    }
}


?>