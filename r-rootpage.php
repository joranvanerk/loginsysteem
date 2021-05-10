<?php 

if(!isset($_SESSION["id"])){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

if($_SESSION["userrole"] != 'root'){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

?>
r-rootpage