<?php
require 'config.inc.php';
require 'functions.inc.php';

// Optionale Sicherheitsheader
header('Referrer-Policy: strict-origin-when-cross-origin');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 0');
?>
<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="r.mdb - Management Database">
        <meta name="theme-color" content="#7aa01f">
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
        <!-- script src="<?php echo $c->url; ?>/scripts/fontawesome/all.min.js"></script -->
        <script src="<?php echo $c->url; ?>/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="white-overlay"></div>
        <div class="container-fluid w-100 px-0 d-flex align-items-center justify-content-between">
            <div id="menu" class="mainbrd left">
                <img src="/images/icons/r-32x32.png" alt=""><span class="apptitle">&nbsp;<?php echo $c->title;?> </span>
                <nav class="mainmenu">
                    <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard"><i class="fa-solid fa-gauge"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Server"><i class="fa-solid fa-server"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Coimputer"><i class="fa-solid fa-computer"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Drucker"><i class="fa-solid fa-print"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Netzwerk"><i class="fa-solid fa-network-wired"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Start"><i class="fa-solid fa-house"></i></a>
                    <a href="#" class="push-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Einstellungen"><i class="fa-solid fa-gear"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Benutzer"><i class="fa-solid fa-user"></i></a>
                </nav>
            </div>
            <br/>
            <div id="datumuhr" class="mainbrd right text-nowrap">
                <?= displaydatetime(); ?>
            </div>
        </div>
<div class="container-fluid px-0 mx-0">
  <div id="content" class="mainbrd">
                <h1>Dashboard</h1>
                <p><?php
                $options = ['cost' => 12,];
                echo password_hash("adminPW!", PASSWORD_BCRYPT, $options);
                ?> </p>
        </div>
        </div>
        <?php echo cookiebanner(); ?>
        <script src="<?php echo $c->url; ?>/scripts/common.js"></script>
    </body>
</html>