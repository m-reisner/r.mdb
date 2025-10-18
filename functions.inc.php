<?php
# require php module "intl"
function displaydatetime() {
    date_default_timezone_set('Europe/Vienna');
    $locale = 'de_AT';
    $formatter = new IntlDateFormatter(
        $locale,
        IntlDateFormatter::FULL,    // Datum (Langformat)
        IntlDateFormatter::MEDIUM,  // Uhrzeit (z. B. 14:32:05)
        'Europe/Vienna'
    );
    $text = $formatter->format(new DateTime());
    $text = str_replace(' um ', ' <i class="fa-regular fa-clock"></i> ', $text);
    $html = '<i class="fa-regular fa-calendar-days"></i> ' . $text;
    return $html;
}

function cookiebanner() {
// Hinweis NUR anzeigen, wenn noch keine Entscheidung gespeichert ist.
  $hasConsent = isset($_COOKIE['cookie_consent_ok']) && $_COOKIE['cookie_consent_ok'] === '1';
  if (!$hasConsent):
  ?>
    <!-- Cookie-Hinweis -->
    <div id="cookie-consent" class="cc-wrap mainbrd text-bg-warning p-3" role="dialog" aria-live="polite" aria-label="Cookie-Hinweis">
      <div class="cc-box">
        <div class="cc-text">
          <i class="fa-solid fa-cookie-bite fa-2xl"></i>
          Diese Website verwendet nur technisch notwendige Cookies, um die grundlegenden Funktionen bereitzustellen.
          Mit Klick auf „OK“ stimmst du der Verwendung dieses erforderlichen Cookies zu.
          <a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/assets/datenschutz.php" target="_blank" rel="noopener">Mehr erfahren</a>
        </div>
        <br>
        <div class="cc-actions">
          <button id="cc-accept" class="cc-btn">OK</button>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php
}
?>