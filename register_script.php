<?php 

    // foreach ($_POST as $email => $value) {
    //     echo "<tr>";
    //     echo "<td>";
    //     echo $email;
    //     echo "</td>";
    //     echo "<td>";
    //     echo $value;
    //     echo "</td>";
    //     echo "</tr>";
    // }


    if (empty($_POST["email"])) {
        header("location: ./index.php?content=message&alert=no-email");
    } else {

    }


?> 