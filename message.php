<?php
    foreach ($_GET as $alert => $value) {
        echo "<tr>";
        echo "<td>";
        echo $alert;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


?>