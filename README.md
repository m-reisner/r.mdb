# r.mdb

![Status](https://img.shields.io/badge/status-in_development-orange.svg)
![License](https://img.shields.io/badge/license-CC%20BY--NC--SA%204.0-blue.svg)
![Language](https://img.shields.io/badge/language-PHP%2C%20PowerShell-lightgrey.svg)

------------------------------------------------------------------------

## 🧭 Überblick

**r.mdb** ist eine zentrale **Management-Datenbank für IT-Systeme**,
deren Ziel es ist, einen\
**Single Point of Trust** für Infrastruktur- und Systeminformationen zu
schaffen.

Das Projekt soll langfristig Aufgaben wie\
- Automatisierung\
- Versionierung\
- Konfigurationsmanagement\
- Hardware- & Software-Inventarisierung\
- Monitoring

integriert abdecken und zu einer zentralen, erweiterbaren Plattform für
IT-Management werden.

------------------------------------------------------------------------

## 🧱 Technologie-Stack

Das Projekt basiert auf einer modularen Architektur mit folgenden
Kernkomponenten:

  -----------------------------------------------------------------------
  Komponente                       Beschreibung
  -------------------------------- --------------------------------------
  **PHP**                          Serverseitige Logik und API-Schicht

  **Bootstrap**                    Responsives Frontend-Framework

  **jQuery**                       UI-Interaktionen und dynamische
                                   Inhalte

  **SQLite / MySQL / MSSQL**       Unterstützte Datenbanksysteme

  **PowerShell**                   Automatisierung, Backend-Integration,
                                   Systemkommunikation
  -----------------------------------------------------------------------

------------------------------------------------------------------------

## 🚀 Startanweisung / Nutzung

### Voraussetzungen

-   **PowerShell** (mind. Version 5.1 oder PowerShell 7)
-   **PHP** (ab Version 8.x, mit eingebautem Webserver)
-   Lokaler Port (z. B. 8080) muss verfügbar sein

### Starten des Entwicklungsservers

Im Projekt-Root befindet sich das Skript **`run-phpwebserver.ps1`**,\
welches den eingebauten PHP-Webserver startet:

``` powershell
Clear-Host
.un-phpwebserver.ps1
```

Der Server startet anschließend lokal (Standard:
`http://localhost:8080`).

------------------------------------------------------------------------

## 📂 Projektstruktur

  ----------------------------------------------------------------------------
  Pfad                      Beschreibung
  ------------------------- --------------------------------------------------
  `/assets/`                Icons, Fonts, Stylesheets

  `/src/`                   PHP-Quellcode und API-Logik

  `/includes/`              Gemeinsame Funktionsbibliotheken

  `/modules/`               Erweiterbare Funktionsmodule

  `/scripts/`               PowerShell-Skripte und Automatisierung

  `/run-phpwebserver.ps1`   Startskript für lokale Entwicklungsumgebung

  `/LICENSE`                Lizenzinformationen

  `/README.md`              Diese Datei
  ----------------------------------------------------------------------------

------------------------------------------------------------------------

## ⚙️ Status

> **Aktueller Entwicklungsstand:**\
> 🧩 *In Entwicklung -- frühes Alpha-Stadium*
>
> Der Fokus liegt derzeit auf der Grundarchitektur und den
> Datenmodellen.

------------------------------------------------------------------------

## 🧑‍💻 Mitwirken

Das Projekt befindet sich aktuell in der Aufbauphase.\
Contributions, Ideen und Verbesserungsvorschläge sind willkommen.\
Sobald die Kernfunktionen stabil sind, wird eine **CONTRIBUTING.md**
bereitgestellt.

------------------------------------------------------------------------

## 🪪 Lizenz

Dieses Projekt steht unter der\
**Creative Commons Attribution--NonCommercial--ShareAlike 4.0
International (CC BY-NC-SA 4.0)** Lizenz.

Weitere Informationen findest du in der Datei [`LICENSE`](./LICENSE)\
oder unter
[creativecommons.org/licenses/by-nc-sa/4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/).

------------------------------------------------------------------------

© 2025 Martin Reisner -- Alle Rechte vorbehalten.
