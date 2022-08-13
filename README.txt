# XAMPP-KONFIGURATION & INSTALLATION:
Der Aufruf der Webpräsenz von "Groceries" funktioniert mithilfe eines via XAMPP konfigurierten Apache-Servers. An dieser Stelle erfolgt hierzu eine Kurzanleitung:

    0. Download von XAMPP über https://www.apachefriends.org/de/index.html.
    1. Abgegebenes "groceries"-Verzeichnis an gewünschter Stelle speichern.
        1.1 Möglichkeit 1: Dateien des "groceries"-Verzeichnisses direkt im "htdocs"-Verzeichnis (z.B. "C:/xampp/htdocs") speichern.
        1.2 Möglichkeit 2: Alternativen Pfad nach eigenem Wunsch (z.B. "C:/Studium/Bachelorarbeit/groceries") verwenden.
    2. Starten des nun installierten XAMPP Control Panel mit Administratorrechten.

    # HINWEIS 1:
    Wurde in Schritt 1. das "groceries"-Verzeichnis im "htdocs"-Verzeichnis von XAMPP (z.B. "C:/xampp/htdocs") hinterlegt, kann Schritt 3. übersprungen werden. Ansonsten ist die Konfiguration des korrekten alternativen Verzeichnispfads (Schritt 3.) nötig.

    3. Korrekten Verzeichnispfad konfigurieren:
        3.1 "Konfig"-Button des Apache-Servers im Control Panel anklicken.
        3.2 "Apache (httpd.conf)" auswählen.
        3.3 In der sich öffnenden "httpd.conf"-Datei die Angabe der Verzeichniswurzel suchen ([STRG] + [F], "DocumentRoot" eingeben). Zwei Zeilen, beginnend mit "DocumentRoot" bzw. "<Directory" sind inkl. Pfadangabe sichtbar.
        3.4 Bei beiden Pfadangaben den Pfad zum "groceries"-Verzeichnis angeben (z.B. "C:/Studium/Bachelorarbeit/groceries").
        3.5 "httpd.conf"-Datei speichern und Datei schließen.
    4. "Starten"-Button des Apache-Servers im Control Panel anklicken.
    5. Im Webbrowser http://localhost/index.php eingeben. Die Startseite von Groceries, "index.php" wird aufgerufen. Ab hier kann sich mithilfe der Website durch die einzelnen Seiten navigiert werden oder es erfolgt ein Aufruf einer anderen Seite durch z.B. http://localhost/produkte.php.

    # HINWEIS 2:
    Für den erneuten Aufruf der Webpräsenz von Groceries sind nach der initialen Konfiguration nur noch die Schritte 2., 4. und 5. nötig, sofern der Apache-Server nach der letzten Verwendung wieder gestoppt wurde. Ansonsten ist nur Schritt 5. nötig, da der Apache-Server immer noch läuft.

-------------------------------------------------------------------------------------

# VERZEICHNISSTRUKTUR:
Im "groceries"-Verzeichnis liegen die einzelnen Webseiten als .php-Dateien. Insbesondere ist hier die "index.php"-Datei, welche die Startseite enthält, relevant.

Weiterhin gibt es Unterverzeichnisse:
    - "db" enthält die Datenbank "produkte.db", auf welche durch die Verwendung des Online-Shops an einigen Stellen im Code Zugriff erfolgt. Die Datenbank enthält die konkreten Produkte inkl. hinterlegter Scores. Zusätzlich sind im Unterverzeichnis "res" die aus der Open Food Facts-Datenbank (https://de.openfoodfacts.org/) exportierten Ressourcen als .csv-Dateien hinterlegt, aus welchen die "produkte.db"-Datenbank erstellt wurde.
    - "font" enthält die heruntergeladenen Ressourcen der Schriftart "Ubuntu Light".
    - "images" enthält sämtliches auf der Webpräsenz verwendetes Bildmaterial. Im Unterverzeichnis "products" sind hierbei die Produktbilder hinterlegt. Das Unterverzeichnis "scores" enthält die für jedes Produkt hinterlegten Nutri-, Eco- und "Marco"-Scores.
    - "includes" enthält ausgelagerte Dateien, welche an einigen Stellen im Code über eine entsprechende PHP-include-Anweisung eingebunden werden. Dies betrifft z.B. Footer, Navbar und Meta-Informationen jeder Webseite, welche ausgelagert wurden, um eine Änderung "global" wirksam zu machen und nicht jede einzelne Webseite bei Änderungen erneut anfassen zu müssen. Das Stylesheet "style.css" und das JavaScript-Skript "scripts.js" sind hier ebenfalls hinterlegt.