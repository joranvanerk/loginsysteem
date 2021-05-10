<?php 

if(!isset($_SESSION["id"])){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

if($_SESSION["userrole"] != 'moderator'){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

?>
m-home