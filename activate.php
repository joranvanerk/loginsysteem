<?php 

if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("location: ./index.php?content=message&alert=hacker-alert");
}

?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form method="POST" action="./index.php?content=activate_script">
                <div class="mb-3 mt-5 m">
                    <label for="inputpassword" class="form-label">Kies een nieuw wachtwoord:</label>
                    <input name="password" type="password" class="form-control" id="inputpassword" aria-describedby="passwordhelp">
                    <div id="passwordhelp" class="form-text">Kies een veilig wachtwoord.</div>

                    <label for="inputpasswordcheck" class="form-label">Herhaal het wachtwoord:</label>
                    <input name="passwordcheck" type="password" class="form-control" id="inputpasswordcheck" aria-describedby="passwordcheckhelp">
                    <div id="passwordcheckhelp" class="form-text">Voer nogmaals uw wachtwoord in.</div>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Activeer</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/headset.png" alt="audio" class="w-50 mx-auto d-block">
        </div>
    </div>
</div>