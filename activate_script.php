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
    $sql = "SELECT * FROM `register` WHERE `id` = $id";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){

        $record = mysqli_fetch_assoc($result);

        if ($record["activated"]){
            header("location: ./index.php?content=message&alert=already-active");
        }else {

            if (!strcmp($record["password"], $pwh)){
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
        
                $updatesql = "UPDATE `register` SET `password`='$password_hash', `activated` = 1 WHERE `register`.`id`=$id AND `password`='$pwh'";
        
                if(mysqli_query($conn, $updatesql)){
                    header("location: ./index.php?content=message&alert=updatesuccess");
                }else {
                    header("location: ./index.php?content=message&alert=updatesuccess&id=$id&pwh=$pwh");
                }
            }else {
                header("Location: ./index.php?content=message&alert=no-match-pwh");
            }
            
        }



    }else {
        header("Location: ./index.php?content=message&alert=nopwhm");
    }
}


?>