<?php 

    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if(empty($email) || empty($password)){
        header("location: ./index.php?content=message&alert=loginformempty");
    }else {
        $result = mysqli_query($conn, "SELECT * FROM `register` WHERE `email` = '$email'");

        if(!mysqli_num_rows($result)){
            // email onbekend
            header("location: ./index.php?content=message&alert=email-unknown");
        }else {
            $record = mysqli_fetch_assoc($result);

            if(!$record["activated"]){
                header("location: ./index.php?content=message&alert=not-active");
            }elseif (!password_verify($password, $record["password"])){
                // password not correct
                header("location: ./index.php?content=message&alert=mno");
            }else {
                // password correct

                $_SESSION["id"] = $record["id"];
                $_SESSION["userrole"] = $record["userrole"];

                switch($record["userrole"]){
                    case 'customer':
                        header("location: ./index.php?content=c-home");    
                    break;
                    case 'root':
                        header("location: ./index.php?content=r-home");    
                    break;
                    case 'admin':
                        header("location: ./index.php?content=a-home");    
                    break;
                    case 'moderator':
                        header("location: ./index.php?content=m-home");    
                    break;
                    default:
                        header("location: ./index.php?content=home");    
                    break;
                }
            }
        }
    }

?>