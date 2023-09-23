[README] GROCERIES: ONLINE-SHOP
===============================

(German version see below / Deutsche Version s. unten)

Please mind that this project was conducted in Germany. Therefore, our online shop uses german wording and documents. Our provided code is written in english, also this README offers an english guide for setting up the online shop. We hope you find our online shop useful and are able to gather new findings for research purposes by using it. Please respect the copyright if you use this project for further research or other purposes. Thank you for your visit!

Bitte beachten Sie, dass dieses Projekt in Deutschland durchgeführt wurde. Daher verwenden wir in unserem Online-Shop deutsche Formulierungen und Dokumente. Unser bereitgestellter Code ist in Englisch verfasst, außerdem bietet diese README-Datei eine englische Anleitung zum Einrichten des Online-Shops. Wir hoffen, dass Sie unseren Online-Shop nützlich finden und durch seine Nutzung neue Erkenntnisse für Forschungszwecke gewinnen können. Bitte beachten Sie die Urheberrechte, wenn Sie dieses Projekt für weitere Forschungs- oder andere Zwecke verwenden. Danke für Ihren Besuch!

=========================

+++ English version +++

[INTRODUCTION]
Groceries is an online store project that can be used to evaluate food labels when purchasing groceries online. For this purpose, a simple online shop was implemented which contains example products. An online purchase (without actually completing the purchase) can then be carried out in a user study, for example to examine the influence of food labels when shopping for food online.

[ACCESS DATA TO THE ONLINE SHOP]
For security reasons, passwords are not stored in plain text in the database. Therefore, the individual passwords are hashed. You can log in using this syntax:

Username: user1
Password: user1

This applies analogously to all other stored accounts (user1, user2, ..., user12). Please mind the lower case.

-------------------------

[XAMPP CONFIGURATION & INSTALLATION]
The 'Groceries' website is accessed using an Apache server configured via XAMPP. Here is a brief guide:

    # HINT 0:
    It is assumed that the system is being tested on a Windows computer with Google Chrome as chosen web browser.

    0. Download XAMPP via https://www.apachefriends.org/index.html.
    1. Clone the 'groceries' directory to the desired location from the GitHub repository.
        1.1 Option 1: Save files from the 'groceries' directory directly in the 'htdocs' directory of XAMPP (e.g. 'C:/xampp/htdocs/groceries').
        1.2 Option 2: Use an alternative path as desired (e.g. 'C:/code/groceries').
    2. Start the now installed XAMPP Control Panel with administrator rights.

    # HINT 1:
    If in step 1. the 'groceries' directory was stored in the 'htdocs' directory of XAMPP (e.g. 'C:/xampp/htdocs'), step 3. can be skipped. Otherwise, the configuration of the correct alternative directory path (step 3.) is necessary.

    3. Configure correct directory path:
        3.1 Click the 'Config' button of the Apache module in the Control Panel.
        3.2 Select 'Apache (httpd.conf)'.
        3.3 In the 'httpd.conf' file that opens, look for the directory root ([CTRL] + [F], enter 'DocumentRoot'). Two lines starting with 'DocumentRoot' or '<Directory' are visible including the path information.
        3.4 For both path details, specify the path to the 'groceries' directory (e.g. 'C:/code/groceries').
        3.5 Save the 'httpd.conf' file and close the file.
    4. Click the 'Start' button of the Apache module in the Control Panel.
    5. Enter http://localhost/index.php in the web browser. The Groceries homepage, 'index.php' is called up. From here you can navigate through the individual pages using the website.

    # HINT 2:
    It can rarely happen that the CSS appears to be missing when the online shop is displayed when it is initially opened. To do this, clear the browser cache:

        0. Open your web browser.
        1. Press [STRG] + [SHIFT] + [ENTF].
        2. Check the box next to 'Cached images and files'.
        3. Click on 'Delete data' at the bottom right.
        4. Close the 'Settings' tab and go back to the 'Groceries' tab.
        5. Reload page ([F5]).

    # HINT 3:
    After the initial configuration, only steps 2., 4. and 5. are necessary to access the Groceries website again, provided that the Apache module was stopped again after the last use. Otherwise, only step 5. is necessary because the Apache module is still running.

    # HINT 4:
    JavaScript must be activated for the full functionality of the online shop!

    # HINT 5:
    The code was written in such a way that the browser should not cache the website and the cookies set (responsible for displaying the various conditions) are deleted when you log out. Otherwise, the different conditions may be stored in the cache and the conditions may be displayed in the wrong order or even skipped. Our own tests were no longer able to reproduce the problem. If this still occurs, the cookies must be deleted manually:

        0. Open your web browser.
        1. Press [STRG] + [SHIFT] + [ENTF].
        2. Check the box next to 'Cookies and other website data'.
        3. Click on 'Delete data' at the bottom right.
        4. Close the 'Settings' tab and go back to the 'Groceries' tab.
        5. Reload page ([F5]).

-------------------------

[DIRECTORY STRUCTURE]
The individual websites are located in the 'groceries' directory as .php files. In particular, the 'index.php' file, which contains the homepage, the 'shop.php' file, which contains the online shop, and this 'README.txt' file, are relevant here.

There are also subdirectories:
    - 'db' contains the database 'webshop.db', which is accessed in some places in the code when using the online shop.
    The database contains the specific products including stored scores. In addition, the resources exported from the Open Food Facts database (https://world.openfoodfacts.org/) are stored as .csv files in the 'res' subdirectory, from which the 'products' table of the database was created.
    - 'docs' contains the linked .pdf files (declaration of consent and participant information for the user study), which where used in our user study.
    - 'font' contains the downloaded resources of the 'Ubuntu Light' font.
    - 'images' contains all image material used on the website. In the 'products' subdirectory, the product images are stored in corresponding subdirectories.
    The 'scores' subdirectory contains the Nutri, Eco and 'Scale' scores stored for each product.
    - 'includes' contains external files, which are included in some places in the code using a corresponding PHP include statement.
    This applies, for example, to the footer, navbar and meta information of each website, which has been outsourced in order to make a change effective 'globally' and not to have to touch each individual website again when changes are made.
    The stylesheet 'style.css' and the JavaScript script 'scripts.js' are also stored here.
    - 'logs' contains .log files that are generated during the execution of the study (when a user logs in) and record events using a time stamp. These are assigned to a logged in user.

=========================

+++ Deutsche Version +++

[EINLEITUNG]
Groceries ist ein Online-Shop-Projekt, welches genutzt werden kann, um Lebensmittelkennzeichnungen beim Online-Kauf von Lebensmitteln zu evaluieren. Hierzu wurde ein simpler Online-Shop implementiert, welcher Beispielprodukte enthält. Ein Einkauf im Online-Kauf (ohne tatsächlichen Kaufabschluss) kann dann in einer Nutzerstudie durchgeführt werden, um z. B. den Einfluss der Lebensmittelkennzeichnungen beim Online-Shopping von Lebensmitteln zu untersuchen.

[ZUGANGSDATEN ZUM ONLINE-SHOP]
Aus Sicherheitsgründen werden Passwörter nicht im Klartext in der Datenbank gespeichert. Daher werden die einzelnen Passwörter gehasht. Sie können sich mit dieser Syntax anmelden:

Benutzername: user1
Kennwort: user1

Dies gilt analog für alle anderen hinterlegten Konten (user1, user2, ..., user12). Bitte achten Sie auf die Kleinschreibung.

-------------------------

[XAMPP-KONFIGURATION & INSTALLATION]
Der Aufruf der Webpräsenz von "Groceries" funktioniert mithilfe eines via XAMPP konfigurierten Apache-Servers. An dieser Stelle erfolgt hierzu eine Kurzanleitung:

    # HINWEIS 0:
    Es wird davon ausgegangen, dass das System auf einem Windows-Computer mit Google Chrome als Webbrowser getestet wird.

    0. Download von XAMPP über https://www.apachefriends.org/de/index.html.
    1. "groceries"-Verzeichnis an gewünschte Stelle aus dem GitHub-Repository klonen.
        1.1 Möglichkeit 1: Dateien des "groceries"-Verzeichnisses direkt im "htdocs"-Verzeichnis von XAMPP (z. B. "C:/xampp/htdocs/groceries") speichern.
        1.2 Möglichkeit 2: Alternativen Pfad nach eigenem Wunsch (z. B. "C:/code/groceries") verwenden.
    2. Starten des nun installierten XAMPP Control Panel mit Administratorrechten.

    # HINWEIS 1:
    Wurde in Schritt 1. das "groceries"-Verzeichnis im "htdocs"-Verzeichnis von XAMPP (z. B. "C:/xampp/htdocs") hinterlegt, kann Schritt 3. übersprungen werden. Ansonsten ist die Konfiguration des korrekten alternativen Verzeichnispfades (Schritt 3.) nötig.

    3. Korrekten Verzeichnispfad konfigurieren:
        3.1 "Konfig"-Button des Apache-Moduls im Control Panel anklicken.
        3.2 "Apache (httpd.conf)" auswählen.
        3.3 In der sich öffnenden "httpd.conf"-Datei die Angabe der Verzeichniswurzel suchen ([STRG] + [F], "DocumentRoot" eingeben). Zwei Zeilen, beginnend mit "DocumentRoot" bzw. "<Directory" sind inkl. Pfadangabe sichtbar.
        3.4 Bei beiden Pfadangaben den Pfad zum "groceries"-Verzeichnis angeben (z. B. "C:/code/groceries").
        3.5 "httpd.conf"-Datei speichern und Datei schließen.
    4. "Starten"-Button des Apache-Moduls im Control Panel anklicken.
    5. Im Webbrowser http://localhost/index.php eingeben. Die Startseite von Groceries, "index.php" wird aufgerufen. Ab hier kann sich mithilfe der Webseite durch die einzelnen Seiten navigiert werden.

    # HINWEIS 2:
    Selten kann es passieren, dass bei der Darstellung des Online-Shops beim initialen Aufruf das CSS zu fehlen scheint. Hierzu ist der Browser-Cache zu leeren:

        0. Browser öffnen.
        1. [STRG] + [SHIFT] + [ENTF] drücken.
        2. Das Häkchen bei "Bilder und Dateien im Cache" setzen.
        3. Unten rechts auf "Daten löschen" klicken.
        4. "Einstellungen"-Tab schließen und wieder zum "Groceries"-Tab wechseln.
        5. Seite neu laden ([F5]).

    # HINWEIS 3:
    Für den erneuten Aufruf der Webpräsenz von Groceries sind nach der initialen Konfiguration nur noch die Schritte 2., 4. und 5. nötig, sofern das Apache-Modul nach der letzten Verwendung wieder gestoppt wurde. Ansonsten ist nur Schritt 5. nötig, da das Apache-Modul immer noch läuft.

    # HINWEIS 4:
    Für die vollständige Funktionalität des Online-Shops ist die Aktivierung von JavaScript zwingend erforderlich!

    # HINWEIS 5:
    Der Code wurde derart geschrieben, dass der Browser die Webseite nicht cachen soll und die gesetzten Cookies (verantwortlich für die Darstellung der verschiedenen Conditions) beim Logout gelöscht werden. Ansonsten kann es sein, dass die unterschiedlichen Conditions im Cache gespeichert werden und die Conditions in falscher Reihenfolge dargestellt oder gar übersprungen werden. Eigene Tests konnten das Problem nicht mehr reproduzieren. Sollte dies trotzdem auftreten, sind die Cookies manuell zu löschen:

        0. Browser öffnen.
        1. [STRG] + [SHIFT] + [ENTF] drücken.
        2. Das Häkchen bei "Cookies und andere Websitedaten" setzen.
        3. Unten rechts auf "Daten löschen" klicken.
        4. "Einstellungen"-Tab schließen und wieder zum "Groceries"-Tab wechseln.
        5. Seite neu laden ([F5]).

-------------------------

[VERZEICHNISSTRUKTUR]
Im "groceries"-Verzeichnis liegen die einzelnen Webseiten als .php-Dateien. Insbesondere ist hier die "index.php"-Datei, welche die Startseite enthält, die "shop.php"-Datei, welche den Online-Shop enthält sowie diese "README.txt"-Datei, relevant.

Weiterhin gibt es Unterverzeichnisse:
    - "db" enthält die Datenbank "webshop.db", auf welche durch die Verwendung des Online-Shops an einigen Stellen im Code Zugriff erfolgt.
	Die Datenbank enthält die konkreten Produkte inkl. hinterlegter Scores. Zusätzlich sind im Unterverzeichnis "res" die aus der Open Food Facts-Datenbank (https://de.openfoodfacts.org/) exportierten Ressourcen als .csv-Dateien hinterlegt, aus welchen die Tabelle "products" der Datenbank erstellt wurde.
    - "docs" enthält die verlinkten .pdf-Dateien (Einverständniserklärung und Teilnehmerinformationen zur Nutzerstudie), die in unserer Nutzerstudie verwendet wurden.
    - "font" enthält die heruntergeladenen Ressourcen der Schriftart "Ubuntu Light".
    - "images" enthält sämtliches auf der Webpräsenz verwendetes Bildmaterial. Im Unterverzeichnis "products" sind die Produktbilder in wiederum entsprechenden Unterverzeichnissen hinterlegt.
	Das Unterverzeichnis "scores" enthält die für jedes Produkt hinterlegten Nutri-, Eco- und "Scale"-Scores.
    - "includes" enthält ausgelagerte Dateien, welche an einigen Stellen im Code über eine entsprechende PHP-include-Anweisung eingebunden werden.
	Dies betrifft z. B. Footer, Navbar und Meta-Informationen jeder Webseite, welche ausgelagert wurden, um eine Änderung "global" wirksam zu machen und nicht jede einzelne Webseite bei Änderungen erneut anfassen zu müssen.
	Das Stylesheet "style.css" und das JavaScript-Skript "scripts.js" sind hier ebenfalls hinterlegt.
    - "logs" enthält .log-Dateien, welche während der Durchführung der Studie (beim Anmelden eines Users) erzeugt werden und per Zeitstempel Ereignisse festhalten. Diese sind dabei einem angemeldeten Nutzer zugeordnet.

=========================

© 2022-2023 | Groceries | Marco Druschba