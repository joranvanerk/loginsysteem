<?php 

    


    if (empty($_POST["email"])) {
        header("location: ./index.php?content=message&alert=no-email");
    } else {
        include("./connect_db.php");
        include("./functions.php");

        $email = sanitize($_POST["email"]);

        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)){
            header("Location: ./index.php?content=message&alert=emailexists");
        }else {
            $password = "geheim";
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO `register` (`id`, `email`, `password`, `userrole`)VALUES (NULL, '$email', '$password_hash', 'customer')";

            if (mysqli_query($conn, $sql)) {

                $id = mysqli_insert_id($conn);
                $to = $email;
                $subject = "Activeer uw account voor audio-master";
                $message = '<!doctype html>
                <html lang="en">
                  <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                
                  </head>
                  <body>
                    <div class="container-fluid" style="background-color: #146eff;">
                    <br>
                    <h1 style="color: white; font-family: Sans-serif; text-align: center;">Activeer uw account</h1>
                    <p style="color: white; font-family: sans-serif; text-align: center;">Uw account is succesvol aangemaakt, u hoeft hem alleen nog maar te activeren!</p>
                    <br>
                    </div>
                    <br>
                    <br>
                    <div style="text-align: center;">
                    <a href="http://www.audio-master.nl/index.php?content=activate&id=' . $id . '&pwh=' . $password_hash . '" class="btn btn-primary btn-lg">Account activeren</a>
                    <p>Deel deze koppeling niet met derden.</p></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">Audio-Master 2021</h5>
    <p class="card-text" style="text-align: center;">Bedankt voor uw vertrouwen in audio-master.</p>
  </div>
</div>
                
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                  </body>
                </html>';

                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: admin@audio-master.com\r\n";
                $headers .= "Cc: joranvanerk1@gmail.com";

                mail($to, $subject, $message, $headers);

                header("Location: ./index.php?content=message&alert=register-success");
            }else {
                header("Location: ./index.php?content=message&alert=registererror");
            }
        }
    }


?> 