<?php 
if (isset($_GET["content"])) {
    $active = $_GET["content"];
}else {
    $active = "";
}
?>

<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Audio-Master</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <?php if(isset($_SESSION["id"])){
        switch($_SESSION["userrole"]){
          case 'admin':
            echo '<li class="nav-item">
        <a class="nav-link'; echo (in_array($active, ["a-home", ""])) ? "active" : "";  echo '" aria-current="page" href="./index.php?content=a-home">Home</a>
      </li>';
          break;
          case 'root':
            echo '<li class="nav-item">
        <a class="nav-link'; echo (in_array($active, ["r-home", ""])) ? "active" : "";  echo '" aria-current="page" href="./index.php?content=r-home">Home</a>
      </li>';
          break;
          case 'customer':
            echo '<li class="nav-item">
        <a class="nav-link'; echo (in_array($active, ["c-home", ""])) ? "active" : "";  echo '" aria-current="page" href="./index.php?content=c-home">Home</a>
      </li>';
          break;
          case 'moderator':
            echo '<li class="nav-item">
        <a class="nav-link'; echo (in_array($active, ["m-home", ""])) ? "active" : "";  echo '" aria-current="page" href="./index.php?content=m-home">Home</a>
      </li>';
          break;
          default:
            echo '<li class="nav-item">
        <a class="nav-link'; echo (in_array($active, ["a-home", ""])) ? "active" : "";  echo '" aria-current="page" href="./index.php?content=home">Home</a>
      </li>';
          break;
        }
      }else {
        echo '<li class="nav-item">
        <a class="nav-link'; echo (in_array($active, ["home", ""])) ? "active" : "";  echo '" aria-current="page" href="./index.php?content=home">Home</a>
      </li>';
      } 
      ?>
        <li class="nav-item">
          <a class="nav-link <?php if ( $active == "iem" ) { echo "active"; }?>" href="./index.php?content=iem">IEM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ( $active == "microfoons" ) { echo "active"; }?>" href="./index.php?content=microfoons">Microfoons</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if ( $active == "xlr" || $active == "jack" || $active == "usb" ) { echo "active"; }?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Plugs
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php if ( $active == "xlr" ) { echo "active"; }?>" href="./index.php?content=xlr">XLR</a></li>
            <li><a class="dropdown-item <?php if ( $active == "jack" ) { echo "active"; }?>" href="./index.php?content=jack">JACK</a></li>
            <li><a class="dropdown-item <?php if ( $active == "usb" ) { echo "active"; }?>" href="./index.php?content=usb">USB</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <?php if(isset($_SESSION["id"])){
        switch($_SESSION["userrole"]){
          case 'admin':

            echo '       
            
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin beheer
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="./index.php?content=a-users">Gebruikers</a></li>
                  <li><a class="dropdown-item" href="./index.php?content=a-reset">Reset wachtwoorden</a></li>
                </ul>
              </li>
          
          ';

          break;
          case 'root':
            echo '<li class="nav-item">
            <a class="nav-link" href="./index.php?content=r-rootpage">Rootpage</a>
          </li>';
          break;
          case 'moderator':

          break;
          case 'customer':
          
          break;
          default:

          break;
        }

        echo '<li class="nav-item">
        <a class="nav-link'; if ( $active == "login" ) { echo "active"; } echo '" href="./index.php?content=login&logout">Uitloggen</a>
      </li>';
      }else {
        echo '        <li class="nav-item">
        <a class="nav-link'; if ( $active == "register" || $active == "" ) { echo "active"; } echo '" href="./index.php?content=register">Registreer</a>
      </li>
    <li class="nav-item">
      <a class="nav-link'; if ( $active == "login" ) { echo "active"; } echo '" href="./index.php?content=login">Aanmelden</a>
    </li>';
      }
      
      
      
      
      
      ?>
      </ul>
    </div>
  </div>
</nav>