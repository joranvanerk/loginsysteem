<?php 

if(!isset($_SESSION["id"])){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

if($_SESSION["userrole"] != 'admin'){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

?>

a-users