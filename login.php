<?php 

if(isset($_GET["logout"])){
    session_destroy();
    header("location: ./index.php?content=message&alert=logout");
}

?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form method="POST" action="./index.php?content=login_script">
                <div class="mb-3 mt-5 m">
                    <label for="inputemail" class="form-label">Vul uw email in</label>
                    <input name="email" type="email" class="form-control" id="inputemail" aria-describedby="emailHelp" autofocus>
                    <div id="emailHelp" class="form-text">We zullen uw gegevens niet delen met derden.</div>
                </div>
                <div class="mb-3 mt-5 m">
                    <label for="inputeww" class="form-label">Vul uw wachtwoord in</label>
                    <input name="password" type="password" class="form-control" id="inputemail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We zullen uw gegevens niet delen met derden.</div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Inloggen</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/speaker.png" alt="audio" class="w-50 mx-auto d-block">
        </div>
    </div>
</div>