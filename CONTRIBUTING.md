# Contributing to r.mdb

Vielen Dank für dein Interesse an r.mdb! Contributions sind willkommen.

## Verhaltensregeln
Bitte halte dich an den [Code of Conduct](./CODE_OF_CONDUCT.md).

## Entwicklungsumgebung
Voraussetzungen:
- PowerShell (>= 5.1 oder 7.x)
- PHP (>= 8.x)

Entwicklungsserver starten:
```powershell
Clear-Host
.\run-phpwebserver.ps1
```

## Coding Standards
- **PHP**: PSR-12 Style (wenn möglich `phpcs` verwenden).
- **JavaScript**: Linting mit ESLint (falls vorhanden).
- **PowerShell**: PSScriptAnalyzer (Empfehlung).
- **Dateien & Struktur**: Bevorzuge modulare, gut benannte Dateien.
- **Sensible Daten**: Niemals `.env` oder Zugangsdaten committen.

## Wichtige Projektkonvention
- **PowerShell-Startskripte beginnen immer mit `Clear-Host`.**

## Commits
Verwende nach Möglichkeit **Conventional Commits**:
- `feat: ...`, `fix: ...`, `docs: ...`, `refactor: ...`, `test: ...`, `chore: ...`

## Pull Requests
1. Fork / Branch erstellen (`feature/<kurzbeschreibung>`).
2. Tests/Linting lokal ausführen.
3. PR erstellen und kurz beschreiben, was geändert wurde und warum.
4. Mindestens ein Review abwarten.

## Issue Tracking
- Neue Features: `enhancement` Label
- Bugs: `bug` Label
- Fragen: `question` Label
