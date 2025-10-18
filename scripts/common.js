$(document).ready(function() {
    function aktualisiereDatumUhr() {
        const jetzt = new Date();
        const datum = jetzt.toLocaleDateString('de-AT', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        const uhrzeit = jetzt.toLocaleTimeString('de-AT', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        $('#datumuhr').html('<i class="fa-regular fa-calendar-days"></i> ' + datum + ' <i class="fa-regular fa-clock"></i> ' + uhrzeit);
    }
    aktualisiereDatumUhr();
    setInterval(aktualisiereDatumUhr, 1000);
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
});

// assets/js/cookie-consent.js

(function () {
  "use strict";

  // Konfiguration
  var COOKIE_NAME = "cookie_consent_ok";
  var COOKIE_MAX_AGE_SECONDS = 60 * 60 * 24 * 365; // 1 Jahr
  var COOKIE_PATH = "/"; // gesamte Seite
  var COOKIE_SAMESITE = "Lax"; // sicherer Default

  function setCookie(name, value, maxAgeSeconds) {
    var parts = [];
    parts.push(name + "=" + encodeURIComponent(value));
    if (typeof maxAgeSeconds === "number") {
      parts.push("Max-Age=" + String(maxAgeSeconds));
    }
    parts.push("Path=" + COOKIE_PATH);
    parts.push("SameSite=" + COOKIE_SAMESITE);
    // Optional: wenn du https nutzt, kannst du Secure aktivieren:
    if (location.protocol === "https:") {
      parts.push("Secure");
    }
    document.cookie = parts.join("; ");
  }

  function getCookie(name) {
    var cookies = document.cookie ? document.cookie.split("; ") : [];
    for (var i = 0; i < cookies.length; i++) {
      var pair = cookies[i].split("=");
      var key = pair.shift();
      var val = pair.join("=");
      if (key === name) {
        return decodeURIComponent(val || "");
      }
    }
    return null;
  }

  function showBanner() {
    var el = document.getElementById("cookie-consent");
    if (el) el.style.display = "block";
  }

  function hideBanner() {
    var el = document.getElementById("cookie-consent");
    if (el) el.style.display = "none";
  }

  function accept() {
    setCookie(COOKIE_NAME, "1", COOKIE_MAX_AGE_SECONDS);
    hideBanner();
  }

  // Event: Klick auf OK
  document.addEventListener("click", function (ev) {
    if (ev.target && ev.target.id === "cc-accept") {
      ev.preventDefault();
      accept();
    }
    if (ev.target && ev.target.id === "open-cookie-settings") {
      ev.preventDefault();
      // „Einstellungen“: Beim reinen OK-Banner öffnen wir einfach erneut den Hinweis,
      // damit der Nutzer seine Entscheidung sehen/erneuern kann.
      // (Bei echten Kategorien würdest du hier ein Einstellungs-Modal öffnen.)
      if (!getCookie(COOKIE_NAME)) {
        showBanner();
      } else {
        // Bereits akzeptiert -> Banner kurz anzeigen, dann nach 3s wieder ausblenden
        showBanner();
        window.setTimeout(hideBanner, 3000);
      }
    }
  });

  // Falls du das JS auch auf Seiten ohne PHP-Abfrage nutzt (statisches HTML),
  // kannst du hier optional das Banner ausblenden, wenn Cookie bereits existiert.
  (function init() {
    var isAccepted = getCookie(COOKIE_NAME) === "1";
    var banner = document.getElementById("cookie-consent");
    if (banner) {
      banner.style.display = isAccepted ? "none" : "block";
    }
  })();

})();