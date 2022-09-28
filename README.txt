[README] GROCERIES: ONLINE-SHOP
===============================

[ZUGANGSDATEN ZUM ONLINE-SHOP]
Benutzername: User1
Kennwort: User1

Dies gilt analog für alle anderen hinterlegten Konten (User1, User2, ..., User12).


------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


[XAMPP-KONFIGURATION & INSTALLATION]
Der Aufruf der Webpräsenz von "Groceries" funktioniert mithilfe eines via XAMPP konfigurierten Apache-Servers. An dieser Stelle erfolgt hierzu eine Kurzanleitung:

    # HINWEIS 0:
    Es wird davon ausgegangen, dass das System auf einem Windows-Computer mit Google Chrome als Webbrowser getestet wird.

    0. Download von XAMPP über https://www.apachefriends.org/de/index.html.
    1. Abgegebenes "groceries"-Verzeichnis an gewünschter Stelle speichern.
        1.1 Möglichkeit 1: Dateien des "groceries"-Verzeichnisses direkt im "htdocs"-Verzeichnis von XAMPP (z.B. "C:/xampp/htdocs/groceries") speichern.
        1.2 Möglichkeit 2: Alternativen Pfad nach eigenem Wunsch (z.B. "C:/Studium/Bachelorarbeit/groceries") verwenden.
    2. Starten des nun installierten XAMPP Control Panel mit Administratorrechten.

    # HINWEIS 1:
    Wurde in Schritt 1. das "groceries"-Verzeichnis im "htdocs"-Verzeichnis von XAMPP (z.B. "C:/xampp/htdocs") hinterlegt, kann Schritt 3. übersprungen werden. Ansonsten ist die Konfiguration des korrekten alternativen Verzeichnispfades (Schritt 3.) nötig.

    3. Korrekten Verzeichnispfad konfigurieren:
        3.1 "Konfig"-Button des Apache-Moduls im Control Panel anklicken.
        3.2 "Apache (httpd.conf)" auswählen.
        3.3 In der sich öffnenden "httpd.conf"-Datei die Angabe der Verzeichniswurzel suchen ([STRG] + [F], "DocumentRoot" eingeben). Zwei Zeilen, beginnend mit "DocumentRoot" bzw. "<Directory" sind inkl. Pfadangabe sichtbar.
        3.4 Bei beiden Pfadangaben den Pfad zum "groceries"-Verzeichnis angeben (z.B. "C:/Studium/Bachelorarbeit/groceries").
        3.5 "httpd.conf"-Datei speichern und Datei schließen.
    4. "Starten"-Button des Apache-Moduls im Control Panel anklicken.
    5. Im Webbrowser http://localhost/index.php eingeben. Die Startseite von Groceries, "index.php" wird aufgerufen. Ab hier kann sich mithilfe der Website durch die einzelnen Seiten navigiert werden.

    # HINWEIS 2:
    Es kann passieren, dass bei der Darstellung des Online-Shops beim initialen Aufruf das CSS zu fehlen scheint. Hierzu ist der Browser-Cache zu leeren:

        0. Browser öffnen.
        1. [STRG] + [SHIFT] + [ENTF] drücken.
        2. Das Häkchen bei "Bilder und Dateien im Cache" setzen.
        3. Unten rechts auf "Daten löschen" klicken.
        4. "Einstellungen"-Tab schließen und wieder zum Groceries-Tab wechseln.
        5. Seite neu laden ([F5]).

    # HINWEIS 3:
    Für den erneuten Aufruf der Webpräsenz von Groceries sind nach der initialen Konfiguration nur noch die Schritte 2., 4. und 5. nötig, sofern das Apache-Modul nach der letzten Verwendung wieder gestoppt wurde. Ansonsten ist nur Schritt 5. nötig, da das Apache-Modul immer noch läuft.

    # HINWEIS 4:
    Für die vollständige Funktionalität des Online-Shops ist die Aktivierung von JavaScript zwingend erforderlich!

    # HINWEIS 5:
    Der Code wurde derart geschrieben, dass der Browser die Webseite nicht cachen soll und die gesetzten Cookies (verantwortlich für die Darstellung der verschiedenen Conditions) beim Logout gelöscht werden. Ansonsten kann es sein, dass die unterschiedlichen Conditions im Cache gespeichert werden und die Conditions in falscher Reihenfolge dargestellt oder gar übersprungen werden. Eigene Tests konnten das Problem nicht mehr reproduzieren. Sollte dies trotzdem auftreten, sind die Cookies manuell zu löschen.

        0. Browser öffnen.
        1. [STRG] + [SHIFT] + [ENTF] drücken.
        2. Das Häkchen bei "Cookies und andere Websitedaten" setzen.
        3. Unten rechts auf "Daten löschen" klicken.
        4. "Einstellungen"-Tab schließen und wieder zum Groceries-Tab wechseln.
        5. Seite neu laden ([F5]).


------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


[VERZEICHNISSTRUKTUR]
Im "groceries"-Verzeichnis liegen die einzelnen Webseiten als .php-Dateien. Insbesondere ist hier die "index.php"-Datei, welche die Startseite enthält, die shop.php-Datei, welche den Online-Shop enthält sowie diese README-Datei, relevant.

Weiterhin gibt es Unterverzeichnisse:
    - "db" enthält die Datenbank "webshop.db", auf welche durch die Verwendung des Online-Shops an einigen Stellen im Code Zugriff erfolgt.
	Die Datenbank enthält die konkreten Produkte inkl. hinterlegter Scores. Zusätzlich sind im Unterverzeichnis "res" die aus der Open Food Facts-Datenbank (https://de.openfoodfacts.org/) exportierten Ressourcen als .csv-Dateien hinterlegt, aus welchen die Tabelle "products" der Datenbank erstellt wurde.
    - "docs" enthält die verlinkten .pdf-Dateien (Einverständniserklärung und Teilnehmerinformationen zur Nutzerstudie).
    - "font" enthält die heruntergeladenen Ressourcen der Schriftart "Ubuntu Light".
    - "images" enthält sämtliches auf der Webpräsenz verwendetes Bildmaterial. Im Unterverzeichnis "products" sind die Produktbilder in wiederum entsprechenden Unterverzeichnissen hinterlegt.
	Das Unterverzeichnis "scores" enthält die für jedes Produkt hinterlegten Nutri-, Eco- und "Scale"-Scores.
    - "includes" enthält ausgelagerte Dateien, welche an einigen Stellen im Code über eine entsprechende PHP-include-Anweisung eingebunden werden.
	Dies betrifft z.B. Footer, Navbar und Meta-Informationen jeder Webseite, welche ausgelagert wurden, um eine Änderung "global" wirksam zu machen und nicht jede einzelne Webseite bei Änderungen erneut anfassen zu müssen.
	Das Stylesheet "style.css" und das JavaScript-Skript "scripts.js" sind hier ebenfalls hinterlegt.
    - "logs" enthält .log-Dateien, welche während der Durchführung der Studie (beim Anmelden eines Users) erzeugt werden und per Zeitstempel Ereignisse festhalten. Sie sind dabei einem angemeldeten Nutzer zugeordnet.