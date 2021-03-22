<?php

    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

    switch($alert){
        case "no-email" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            Uw e-mailadres is onjuist of niet ingevuld!
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "emailexists" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            Het ingevulde e-mailadres bestaat al!
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "registererror" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            Er is een fout opgetreden, probeer het later nogmaals. Al doet dit probleem zich vaker voor, contacteer dan een medeweker.
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "register-success" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            Uw account is aangemaakt, controleer uw inbox.
          </div>';
          header("Refresh: 3; ./index.php?content=login");
        break;
        case "hacker-alert" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
          U heeft geen rechten op deze pagina.
        </div>';
        header("Refresh: 3; ./index.php?content=register");
      break;
        default;
            header("Location: ./index.php?content=home");
    break;
    }
?>