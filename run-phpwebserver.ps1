Clear-Host

# ============================
#   PHP-Devserver (cross OS)
# ============================

# --- Einstellungen ---
$ServerIPv4 = "127.0.0.1"       # bei Bedarf auf "0.0.0.0" ändern
$HttpPort   = 8000

# --- Hilfsfunktion: PHP suchen ---
function Resolve-PhpPath {
    # 1) explizit per Env
    if ($env:PHP_PATH -and (Test-Path -Path $env:PHP_PATH)) { return $env:PHP_PATH }

    # 2) in PATH
    $cmd = (Get-Command php -ErrorAction SilentlyContinue)?.Source
    if ($cmd) { return $cmd }

    # 3) OS-spezifische, typische Orte
    if ($IsWindows) {
        $candidates = @(
            "C:\php\php.exe",
            "${env:ProgramFiles}\PHP\php.exe",
            "${env:ProgramFiles(x86)}\PHP\php.exe"
        )
    }
    elseif ($IsMacOS) {
        $candidates = @(
            "/opt/homebrew/bin/php",    # Apple Silicon (aktuelles Homebrew)
            "/usr/local/bin/php"        # Intel-Macs (älteres Homebrew)
        )
    }
    elseif ($IsLinux) {
        $candidates = @(
            "/usr/bin/php",
            "/usr/local/bin/php",
            "/bin/php",
            "/snap/bin/php",
            "/opt/lampp/bin/php"
        )
    }
    else {
        $candidates = @()
    }

    foreach ($p in $candidates) {
        if (Test-Path -Path $p) { return $p }
    }

    return $null
}

# --- Laufzeit-Info ---
Write-Host "Development lokal PHP WebServer" -ForegroundColor Cyan
Write-Host "===============================" -ForegroundColor Cyan
Write-Host "Server wird gestartet." -ForegroundColor Yellow

# --- PHP prüfen ---
$PhpCmd = Resolve-PhpPath
if (-not $PhpCmd) {
    Write-Host "PHP wurde nicht gefunden. Bitte PHP installieren oder den Pfad in `\$env:PHP_PATH` setzen." -ForegroundColor Red
    exit 1
}

# --- Working Directory / Pfade ---
$DocRoot = $PSScriptRoot
$LogsDir = Join-Path $PSScriptRoot "logs"
if (-not (Test-Path $LogsDir)) { New-Item -ItemType Directory -Path $LogsDir | Out-Null }

$StdOutLog = Join-Path $LogsDir "stdout.txt"
$StdErrLog = Join-Path $LogsDir "stderr.txt"

# --- Hinweise ---
Write-Host -NoNewline "Die URL zur Seite lautet: " -ForegroundColor Yellow
Write-Host -NoNewline "http://$ServerIPv4`:$HttpPort/" -ForegroundColor Blue
Write-Host "." -ForegroundColor Yellow

Write-Host -NoNewline "Meldungen der Konsole werden in der Datei " -ForegroundColor Yellow
Write-Host -NoNewline "http://$ServerIPv4`:$HttpPort/logs/stdout.txt" -ForegroundColor Blue
Write-Host " mitgeschrieben." -ForegroundColor Yellow

Write-Host -NoNewline "Fehlermeldungen werden in der Datei " -ForegroundColor Yellow
Write-Host -NoNewline "http://$ServerIPv4`:$HttpPort/logs/stderr.txt" -ForegroundColor Blue
Write-Host " mitgeschrieben." -ForegroundColor Yellow

Write-Host "Beenden des Servers erfolgt mit [Strg]+[C]." -ForegroundColor Magenta

# --- Argumente (sauber als Array) ---
$Arguments = @(
    "-S", "$ServerIPv4`:$HttpPort",
    "-t", $DocRoot
)

# --- Prozessstart ---
$StartParams = @{
    FilePath               = $PhpCmd
    ArgumentList           = $Arguments
    RedirectStandardOutput = $StdOutLog
    RedirectStandardError  = $StdErrLog
    WorkingDirectory       = $DocRoot
    NoNewWindow            = $true   # auf macOS/Linux ohne Effekt, schadet nicht
    Wait                   = $true
}

Start-Process @StartParams