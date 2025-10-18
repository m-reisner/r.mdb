<?php
require '../config.inc.php';
require '../functions.inc.php';

// Optionale Sicherheitsheader
header('Referrer-Policy: strict-origin-when-cross-origin');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 0');
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="r.mdb - Management Database">
<meta name="theme-color" content="#7aa01f">
<title>Datenschutzerklärung</title>
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
<style>
  .mainbrd_login {
  position: relative;   /* <--- Wichtig! */
  border: 1px solid #fff;
  border-radius: 12px;
  padding: 10px;
  margin: 5px;
  background-color: #fff;
}
.cc-btn {
width: 100%;
padding: 10px;
border: none;
border-radius: 6px;
background-color: #99bb26;
color: white;
font-size: 1em;
cursor: pointer;
}
</style>
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
<div class="mainbrd">
<h1>Datenschutzerklärung</h1>

<h2>1. Verantwortlicher</h2>
<p>Verantwortlich für die Datenverarbeitung auf dieser Webseite ist:</p>
<p>
<b>Martin Reisner - r.mdb Projekt</b><br>
Weitere Informationen finden Sie unter der Seite <a href="https://github.com/m-reisner" target="_blank" rel="noopener noreferrer">https://github.com/m-reisner</a>.<br>
</p>

<h2>2. Erhebung und Verwendung personenbezogener Daten</h2>
<p>Beim Besuch dieser Webseite werden keine personenbezogenen Daten gespeichert, es sei denn, Sie melden sich an oder verwenden Funktionen, die eine Sitzung (Session) erfordern.</p>

<h2>3. Verwendung von Cookies</h2>
<p>Diese Webseite verwendet ausschließlich technisch notwendige Session-Cookies. Diese Cookies sind erforderlich, um grundlegende Funktionen der Seite bereitzustellen, beispielsweise um Sie während einer Sitzung eingeloggt zu halten.</p>
<p>Session-Cookies werden automatisch gelöscht, sobald Sie den Browser schließen. Eine darüber hinausgehende Speicherung oder Auswertung findet nicht statt.</p>

<h2>4. Keine Weitergabe von Daten</h2>
<p>Es erfolgt keine Weitergabe personenbezogener Daten an Dritte und keine Analyse des Nutzungsverhaltens.</p>

<h2>5. Server-Logs</h2>
<p>Der Webserver kann technische Informationen (z. B. IP-Adresse, Zeitpunkt des Zugriffs, verwendeter Browser) temporär in Logdateien speichern, um die Sicherheit und Funktionsfähigkeit der Seite zu gewährleisten. Diese Daten werden nicht mit anderen Datenquellen zusammengeführt und nach kurzer Zeit automatisch gelöscht.</p>

<h2>6. Ihre Rechte</h2>
<p>Sie haben das Recht auf Auskunft über die gespeicherten personenbezogenen Daten, sowie auf Berichtigung, Löschung und Einschränkung der Verarbeitung. Bitte wenden Sie sich dazu an die oben genannte Kontaktadresse.</p>

<h2>7. Änderungen dieser Datenschutzerklärung</h2>
<p>Diese Datenschutzerklärung kann bei Bedarf angepasst werden, um sie an rechtliche Anforderungen oder technische Änderungen anzupassen.</p>

<p>Stand: Oktober 2025</p>
<br>
<div class="cc-actions">
  <button id="cc-accept" class="cc-btn" onclick="window.close()">Fenster schließen!</button>
</div>
</div>
<script src="<?php echo $c->url; ?>/scripts/common.js"></script>
</body>
</html>