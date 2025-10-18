# Branch Protection Checklist (GitHub)

Diese Checkliste dokumentiert empfohlene Einstellungen, um den `main`-Branch zu schützen.

## Einstellungen (GitHub → Settings → Branches → Add rule)

- **Branch name pattern:** `main`
- ✅ **Require a pull request before merging**
  - **Required approvals:** `1`
- ✅ **Require status checks to pass before merging**
  - **Status checks that must pass:**
    - `php-ci`
    - `pwsh-lint`
  - ✅ **Require branches to be up to date before merging**
- ✅ **Include administrators**
- ⛓️ Optional: **Require signed commits** (falls GPG/SSH-Signing genutzt wird)
- 🔐 Optional: **Restrict who can push to matching branches** (bei Teams)

## Hinweise
- CI-Workflows: `.github/workflows/ci.yml` (PHP Syntax, PowerShell Lint)
- Abhängigkeiten: `.github/dependabot.yml`
- Vorlagen: `.github/ISSUE_TEMPLATE/*`, `.github/PULL_REQUEST_TEMPLATE.md`

## Prozessempfehlung
1. Feature-Branch erstellen: `feature/<kurzbeschreibung>`
2. Commits signieren (optional, empfohlen)
3. PR eröffnen, Templates ausfüllen
4. Reviews einholen, CI grün abwarten
5. Squash & Merge (empfohlen) oder Rebase & Merge
