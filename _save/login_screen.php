<?php
require 'config.inc.php';
require 'functions.inc.php';
?>
<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="r.mdb - Management Database">
        <title><?php echo $c->title; ?></title>
        <link rel="icon"             href="<?php echo $c->url; ?>/favicon.ico" type="image/x-icon">
        <link rel="icon"             href="<?php echo $c->url; ?>/images/icons/favicon-32x32.png"    sizes="32x32" type="image/png">
        <link rel="icon"             href="<?php echo $c->url; ?>/images/icons/favicon-16x16.png"    sizes="16x16" type="image/png">
        <link rel="apple-touch-icon" href="<?php echo $c->url; ?>/images/icons/apple-touch-icon.png" sizes="180x180">
        <link rel="apple-touch-icon" href="<?php echo $c->url; ?>/images/icons/apple-touch-icon.png">
        <link rel="manifest"         href="<?php echo $c->url; ?>/site.webmanifest">
        <link rel="preload"          href="<?php echo $c->url; ?>/styles/common.css" as="style">
        <link rel="stylesheet"       href="<?php echo $c->url; ?>/styles/bootstrap/bootstrap.min.css">
        <link rel="stylesheet"       href="<?php echo $c->url; ?>/styles/fontawesome/all.min.css">
        <link rel="stylesheet"       href="<?php echo $c->url; ?>/styles/common.css">        
        <script src="<?php echo $c->url; ?>/scripts/jquery-3.7.1.min.js"></script>
        <script src="<?php echo $c->url; ?>/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="white-overlay"></div>
        <div class="container-fluid px-0 d-flex align-items-center justify-content-between">
            <div id="menu" class="mainbrd_login left">
                <img src="/images/icons/r-32x32.png" alt=""><span class="apptitle">&nbsp;<?php echo $c->title;?> </span>
            </div>
            <div id="datumuhr" class="mainbrd right text-nowrap">
                <?= displaydatetime(); ?>
            </div>
        </div>
        <link rel="stylesheet"       href="<?php echo $c->url; ?>/styles/login_screen.css">
        <div id="login-box" class="mainbrd">
            <h2>Anmeldung</h2>
            <form>
                <input type="text" placeholder="Benutzername" required>
                <input type="password" placeholder="Passwort" required>
                <button type="submit">Login</button>
            </form>
        </div>
        <script src="<?php echo $c->url; ?>/scripts/common.js"></script>
    </body>
</html>

