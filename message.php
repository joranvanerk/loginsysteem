<?php

    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "";
    $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
  

    switch($alert){
        case "no-email" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
            Uw e-mailadres is onjuist of niet ingevuld!
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "emailexists" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
            Het ingevulde e-mailadres bestaat al!
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "registererror" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
            Er is een fout opgetreden, probeer het later nogmaals. Al doet dit probleem zich vaker voor, contacteer dan een medeweker.
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "register-success" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
            Uw account is aangemaakt, controleer uw inbox.
          </div>';
          header("Refresh: 3; ./index.php?content=login");
        break;
        case "hacker-alert" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
          U heeft geen rechten op deze pagina.
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "password-empty" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
          U heeft een wachtwoordveld niet ingevuld, probeer het opnieuw!
        </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
      break;
        case "password-notsame" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
          De ingevulde wachtwoorden komen niet overeen!
        </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
      break;
        case "nopwhm" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
          Uw account staat niet geregistreerd in de database
        </div>';
        header("Refresh: 3; ./index.php?content=register");
      break;
        case "updatesuccess" :
          echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
          Uw account is succesvol aangemaakt, u wordt doorgestuurd naar de inlog pagina..
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "updatefail" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          Er ging iets fout, uw account is niet aangemaakt!
        </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
      break;
        case "already-active" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          Account is al actief! Login met uw bestaande wachtwoord.
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "no-match-pwh" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          Uw activatie link gegevens zijn niet correct, registreer opnieuw!
        </div>';
        header("Refresh: 3; ./index.php?content=register");
      break;
        case "loginformempty" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          U heeft een veld niet juist ingevuld, probeer het opnieuw!
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "email-unknown" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          Email niet bekend!
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "not-active" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          Uw account is niet actief, controleer uw email!
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "mno" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          Uw ingevoerde gegevens zijn niet correct, probeer het opnieuw!
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        case "logout" :
          echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
          U bent uitgelogd.
        </div>';
        header("Refresh: 3; ./index.php?content=login");
      break;
        default;
            header("Location: ./index.php?content=home");
    break;
    }
?>