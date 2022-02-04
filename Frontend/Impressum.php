<!-- Created by @Antonia Geschke and Helen Laible-->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>Impressum & Policy</title>
    <link rel="stylesheet" href="../CSS/Impressum_styles.css">
    <script type="text/javascript" src="Impressum.js"></script>
</head>
<header>
    <?php
    include("../Frontend/NavBar.php");
    ?>
</header>
<body>

<div class="main-container">

    <div class="Impressum">
        <h1>Impressum</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.</p><br>
    </div>

    <div class="image">
        <BODY onload="ChangeImage()">
        <img name="slide" class="slideImage">
    </div>

    <div class="Policy">
        <h1>Policy</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.</p>
    </div>

    <br>
    <div class="Services">
        <h2>Antonia Geschke</h2>
        <ul class="Service">
            <li>Suchleiste Front- und Backend</li>
            <li>CreatePost Backend und Impressum, Datenbankimplementierung</li>
        </ul>
        <h2>Helen Laible</h2>
        <ul class="Service" >
            <li>Navigationsleiste</li>
            <li>CreatePost Frontend </li>
            <li>Profilseite Backend</li>
            <li>Dokumentation</li>
        </ul >

        <h2>Nguyen Duc Duong</h2>
        <ul class="Service">
            <li>Registrierungsseite Fronend</li>
            <li>Login-Seite Frontend </li>
            <li>FAQ</li>
            <li>UserProfileEdit-Page Froontend & Backend </li>
            <li> Mitarbeiterseite Backend (Account-/Contactdetails, PostID+Headline)</li>
        </ul>

        <h2>Tran Anh Hoang</h2>
        <ul class="Service">
            <li>LogIn Backend</li>
            <li>Registrierungsseite Backend </li>
            <li>Mitarbeiterseite Backend (Suche AccountID, Post löschen, Accountdetails updaten)</li>
            <li>LandingPage Front-und Backend </li>
            <li>SocialMedia Interaktionen Front-und Backend</li>
            <li>generelle Unterstützung bei allen Seiten</li>
        </ul>
    </div>

    <div class="documentation">

        <h1>Dokumentation – Webprojekt Linkvel</h1>
        <h2>Inhaltverzeichnis/Sitemap:</h2>

        <ol class="sitemap">
            <li><a href="#1">Definition der Themen und Anforderung des Projektes</a></li>
            <li><a href="#2">Erstellung BUC, SUC und Aktivitätsdiagramme</a></li>
            <li><a href="#3">Erstellung der Tabellenmodelle und Implementierung der Datenbank</a></li>
            <li><a href="#4">Erstellung von Mockups und Deklaration Design der Weboberfläche</a></li>
            <li><a href="#5">Navigationsbar</a></li>
            <li><a href="#6">Registrierung-Page</a></li>
            <li><a href="#7">Login-Page</a></li>
            <li><a href="#8">FAQ</a></li>
            <li><a href="#9">UserProfileEdit-Page</a></li>
            <li><a href="#10">Employee-Page</a></li>
            <li><a href="#11">Suchleiste</a></li>
            <li><a href="#12">Create Post Backend</a></li>
            <li><a href="#13">Nutzerprofil</a></li>
            <li><a href="#14">LandingPage – UserPost</a></li>
            <li><a href="#15">User-Like</a></li>
            <li><a href="#16">User Comment Post</a></li>
            <li><a href="#17">Map-Location</a></li>
            <li><a href="#18">Search AccountKey - Ajax</a></li>
            <li><a href="#19">Update User Data By Employee</a></li>
            <li><a href="#20">Delete Post By Employee</a></li>
            <li><a href="#21">Optionfeld Mitarbeiterdaten</a></li>
            <li><a href="#22">Known Bugs</a></li>
            <li><a href="#23">Verbesserungen</a></li>
            <li><a href="#24">Lessons learned</a></li>
            <li><a href="#25">Unser Fazit</a></li>
        </ol>

        <h2 id="1">1. Definition der Themen und Anforderung des Projektes </h2>
        <p class="anforderungen">
            Zu Beginn des Projektes haben wir uns einen ersten Eindruck der gestellten Anforderungen gemacht. Um in naher Zeit möglichst strukturiert zu können,
            haben wir die bevorstehenden Aufgaben eingeteilt und in verschiedenen Meilensteinen festgehalten. Wir haben des Weiteren geplant mindestens ein wöchentliches Treffen,
            je nach Pensum auch weitere zu vereinbaren, um ein aktives Verständnis für unsere Arbeit untereinander zu bekommen und um mögliche Probleme und unser weiteres Vorgehen
            zu besprechen. Dann kam es dann zu den ersten tatsächlichen Schritten und dem Start des Projektes. Ein Gruppenname war notwendig. Da es sich bei der Idee der Seite um einen
            Reiseblog handeln sollte, kombinierten wir letzten Endes die Wörter linked (vernetzt) und Travel (Reise), wodurch unser Projekt seinen Namen bekam. Linkvel.<br>
        </p>

        <h2 id="2">2. Erstellung BUC, SUC und Aktivitätsdiagramme</h2>
        <p>
            Der nächste Schritt beinhaltete die Erstellung verschiedener Diagramme, die wir zu gleichen Teilen untereinander aufteilten.
            Darunter Business Use-Cases und System-Use-Cases und Flussdiagramme, die die Funktionen, Eigenschaften und Möglichkeiten der späteren Website darstellt.
            So entstanden Use-Cases zu den verschiedenen Rollen wie Super-User, User und Admin mit den jeweiligen Berechtigungen und Funktionen.
            Das System-Use-Case zeigt das nochmal im Detail. Das Flussdiagramm verdeutlicht den Vorgang innerhalb der Website beim Vorgang der Registrierung.<br>
        </p>

        <h3>Unser USE-CASE-Diagramm:</h3>
        <img class="picture4" src="../DokumenationFolder/DocumetationImageFolder/usecase1.png">
        <p>
            Der Actor ist entweder ein Standard_User oder ein Super_User. Ein User kann nicht beides sein. Bevor der Standard_User oder der Super_User etwas machen kann,
            muss er sich in sein Account einloggen. Im Falle, dass der User neu ist und keinen vorhandenen Accountdaten hat, kann er sich registrieren. Nach dem Login haben
            beide die Funktionalität ihren User_Profil zu managen, d.h. sie können ihre persönlichen Daten ändern, ihr Profil so gestalten und auch ihr User_Account löschen, wenn sie das wollen.
            Der Unterschied zwischen den Standard_User und den Super_User ist es, dass der Super_User ein Post erstellen kann, welches alle besuchen und lesen können, die eingeloggt
            sind. Das wäre auch der einzige Unterschied. Um ein Post zu erstellen benötig der Post unbedingt mindesten ein Bild oder ein Video und dazu eine passende Text/Beschreibung
            des Posts.  Außerdem hat der Super_User vollen Zugriff auf die Kommentare seiner Posts. Er kann sowohl seine Kommentare noch dazu packen als auch auf andere Kommentare antworten.
            Falls es ein Kommentar gibt, dass dem Ersteller nicht gefällt, kann er sie löschen.
            Als Standard_User und Super_User kann man sich Posts anschauen die vom Ersteller (Super_User) freigegeben wurden anschauen. Beide haben die Möglichkeit
            nach deinem Post zu suchen und oder nach bsp. Kategorien, Erstelldatum, am meisten „geliket“, sortieren. Sie können dann die Posts lesen ein Kommentar zu dem Posts
            hinterlassen und auch teilen. Als Kommentar kann sowohl eine Frage als auch eine Antwort sein. Die Kommentare werden dann für alle eingeloggten Accounts sichtbar und so
            können andere User auf die jeweiligen Kommentare entweder fragen oder antworten.
        </p>

        <h3>Unser SYSTEM-CASE-Diagramm:</h3>
        <img class="picture4" src="../DokumenationFolder/DocumetationImageFolder/systemusecase.png"><br>
        <p>
            Der Actor ist entweder ein Standard_User oder ein Super_User. Ein User kann nicht beides sein. Bevor der Standard_User oder der Super_User etwas machen kann, muss er sich in sein Account einloggen. <br>
            Im Falle, dass der User neu ist und keinen vorhandenen Accountdaten hat, kann er sich registrieren. Nach dem Login haben beide die Funktionalität ihren User_Profil zu managen, d.h. sie können ihre persönlichen Daten ändern, ihr Profil so gestalten und auch ihr User_Account löschen, wenn sie das wollen. <br>
            Der Unterschied zwischen den Standard_User und den Super_User ist es, dass der Super_User ein Post erstellen kann, welches alle besuchen und lesen können, die eingeloggt sind. Das wäre auch der einzige Unterschied. Um ein Post zu erstellen benötig der Post unbedingt mindesten ein Bild oder ein Video und dazu eine passende Text/Beschreibung des Posts.  Außerdem hat der Super_User vollen Zugriff auf die Kommentare seiner Posts. Er kann sowohl seine Kommentare noch dazu packen als auch auf andere Kommentare antworten. Falls es ein Kommentar gibt, dass dem Ersteller nicht gefällt, kann er sie löschen.
            Als Standard_User und Super_User kann man sich Posts anschauen die vom Ersteller (Super_User) freigegeben wurden anschauen. Beide haben die Möglichkeit nach deinem Post zu suchen und oder nach bsp. Kategorien, Erstelldatum, am meisten „geliket“, sortieren. Sie können dann die Posts lesen ein Kommentar zu dem Posts hinterlassen und auch teilen. Als Kommentar kann sowohl eine Frage als auch eine Antwort sein. Die Kommentare werden dann für alle eingeloggten Accounts sichtbar und so können andere User auf die jeweiligen Kommentare entweder fragen oder antworten.
        </p>

        <h2 id="3">3. Erstellung der Tabellenmodelle und Implementierung der Datenbank</h2>
        <p>
            Infolgedessen kam es zur Grundlage der Datenbank. Die Erstellung des ER-Modells und des darauf aufbauenden Tabellen-Modells.
            Die Datenbank sollte Datensätze über User, der in Standard-User und Super-User unterteilt ist, enthalten sowie Mitarbeiter.
            Über beide sollten Datensätze wie Adresse und Account-Details und Kontaktdaten gespeichert sein.
            Des Weiteren werden Posts, Likes und Kommentare gespeichert.
            Das erstellte ER-Modell war die Grundlage für das darauffolgende Tabellen-Modell, das alle Bereiche unserer zu erstellender Datenbank beinhaltet.
            In einem unserer Meetings im November fand eine grobe Ideensammlung für die finale Datenbank statt, dessen Implementierung kurz darauffolgte.<br>
        </p>

        <h3>ER-Modell & Tabellen-Modell:</h3>
        <img class="picture4" src="../DokumenationFolder/DocumetationImageFolder/tabellenmodell.png"><br>

        <h2 id="4">4. Erstellung von Mockups und Deklaration Design der Weboberfläche</h2>
        <p>
            Nahezu zeitgleich gab es erste Überlegungen wie die Seiten strukturiert und anschaulich umgesetzt werden können.
            Mit Hilfe von Mockups kamen wir schnell auf eine zufriedenstellende Möglichkeit das Optische mit den Funktionalitäten und Anforderungen zu
            kombinieren die einerseits gestellt worden sind und die wir selbst gerne hätten. Im nächsten Meeting einigten wir uns darauf das Design durch CSS, und
            die nice-to-have Funktionen hintenanzustellen und uns zunächst auf die wichtigsten Sachen zu konzentrieren. <br>
        </p>

        <h3>Unsere Mock-Ups:</h3>
        <img class="picture4" src="../DokumenationFolder/DocumetationImageFolder/Mock-Up.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/Mock-Up%20Handy.png"><br>

        <h2 id="5">5. Navigationsbar</h2>
        <p>
            Die Navigationsleiste stellte uns im Hinblick auf die Responsivität der Seiten kurzzeitig vor einige Probleme.
            Um die Bedienung der Website möglichst einfach zu machen wollten wir auf ein Burger-Menü verzichten.
            Die Idee einer normalen Navigationsleiste in Kombination, diese ab einer bestimmten Breite zum Burger-Menü zusammenzufassen, löste das Problem.<br>
            Die Navigationsleiste umfasst die Funktionen entweder durch das anklicken der "Startseite" oder "LinkVel" jeder Zeit auf die Startseit (LandingPge) zurückzukehren.
            Unter "Mein Konto" erscheint ein Dropdown Menu, dass einem die Optionen gibt sein Profil anzeigen zu lassen oder es zu bearbeiten. Sollte der jeweilige Besucher
            zum Zeitpunkt nicht angemeldet sein, wird auch eine Fehlerseite weitergeleitet, die ihm die Option gibt, auf die LogIn-Seite zu kommen.
            Die Ansicht der Navigationsleiste orientiert sich an dem jeweiligen Zustandes der Session. Ist man angemeldet so zeigt sie den Option Logout statt Login an.
            Ist man nicht angemeldet eben Login. Ist ein Admin angemeldet entfällt das Dropdown-Menu. Um den Nutzern oder Besuchern ein Gefühl der Persönlichkeit zu vermitteln, wird
            je nach dem ob man angemeldet ist mit Hallo du oder Hallo (Nutzername) auf der Seite willkommen geheißen.
            In der minimierten Ansicht enthält das Burgermenu die identischen Funktionen, jedoch entfällt das Logo und die Wilkommensworte ab einer bestimmten Breite.
            Jetzt kann der Nutzer nur noch über "Startseite" auf die Landingpage zurückkehren.
            <br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/navbar.png"><br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/navbar_mitarbeiter.png"><br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/burgermenu.png"><br>
        </p>

        <h2 id="6">6. Registrierung-Page</h2>

        <h3>1.Phase: Registrieren</h3>
        <p>
            Der User registriert sich, indem er alle Pflichtfelder ausfüllt. Die Pflichtfelder sind Vorname, Nachname, Adresse, Postleitzahl, Land (woher der User kommt), Username, E-Mail, Geburtsdatum, Passwort
            und Handynummer. Ob die Daten, die der User eingibt, auch in der realen Welt existieren, kann man nicht überprüfen. Dies kann zur schlechten Datenqualität führen. Dieses Problem gilt auch auf andere Seiten
            wie UserProfileEdit, wo Daten manipuliert werden.
            Jedoch ist es möglich, dass man die Syntax bestimmte Zeichenketten und auch das Alter der Personen überprüfen kann, um sich Registrieren zu können. Das wird auch bei unserer Registrierung realisiert.
            Unsere Überprüfung im Hintergrund wird wie folgt durchgeführt:
            Im ersten Schritt wird zunächst im Frontend die Telefonnummer als auch die Email-Adresse auf einen spezifischen Syntax überprüft. Ist dieser nicht korrekt wird ein Javascript Alerttextbox ausgelöst, der
            den User auf seinen Fehler aufmerksam macht. Desweiterem wird auch das Alter überprüft, ist der User unter 16 Jahre alt, wird auch eine Fehlermeldung ausgegeben. Falls alles korrekt eingegeben und der Haken
            bei „Ich akzeptiere die AGB und Datenschutz“ gesetzt wurde (ist auch Pflichtfeld), wird im zweiten Teil die Daten aus den Formulartextboxen von PHP über die Postmethode abgeholt und auch im Backend überprüft.
            Nun können zwei Szenarien eintreten, dieses wird in den beiden Fällen im folgenden Bereich beschrieben.
        </p>
        <h3>Hier im Flussdiagramm zusammengefasst:</h3>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/Aktivitäsdiagramm_Registrierung_Final.png"><br>

        <h3>1. Fall - Daten werden korrekt angegeben </h3>
        <p>
            Hat der User korrekte Daten eingebenden, so werden diese in die Datenbank eingetragen und abgespeichert. Nach der erfolgreichen Registration wird der User auf eine Bestätigungsseite geleitet, wo
            dem User angezeigt wird, dass er sich ein Account auf der Linkvel-Webseite erstellt hat, Danach kann er auf „Beginne deine virtuelle Reise“ klicken, dann wird der User auf die Landing-Page (Startseite)
            geleitet, jedoch ist er noch nicht angemeldet und muss die noch tun bevor seine richtig „virtuelle Reise“ beginnen kann (siehe Registrierung-Page 1.Phase 6.Bild).
            Dabei wird im Backend zusätzliche der User auf einen Standard User und auch sein Account_Create_Time_Date und LastLog_In_Date_Time gesetzt. Diese sind jeweils Daten, welche die Rolle des Users angibt und
            seinen Account Registrierungsdatum sowie Logindatum festgehalten.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/seq-diag.regis.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/registrierung3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/registrierung4.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/registrierung5.png"><br>

        <h3>2. Fall</h3>
        <p>
            Pflichtfelder wie Email, Handynummer oder/und Alter werden geprüft auf die richtige Syntax überprüft, wie bei Email muss ein „@“ in dem Feld enthalten sein oder das bei Handynummer, dass
            nicht weniger als 10 Zahlen eingetragen werden darf und zusätzlich wird das Alter des Users überprüft. Der User muss dabei älter als 16 Jahre Alt sein. Außerdem wird auch im Backend überprüft ob der User
            sich bereits bei linkvel registiert hat. Dabei wird ein abgleich der Emailadresse und der Username in der Datenbank mit den eingegebenen Userdaten. Sind diese bereits in der Datenbank hinterlegt, so kann
            der User sich nicht noch einmal registrieren. Wurden die Daten falsch eingegeben, so kann der User sich auch nicht registrieren. Der Registrierung wird unterbrochen und der User wird auch eine Fehlermelde
            Seite weitergeleitet.
        </p>

        <h3>Fehlermeldung Registrierung:</h3>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/fail.seq.regis.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/registrierung3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/failedregistration.png"><br>

        <h2 id="7">7. Login-Page</h2>

        <h3>1. Phase: Login</h3>
        <p>
            Der User muss sich einloggen, bevor er irgendetwas machen kann. Falls der User noch kein Account hat, kann er auf Registration klicken und er wechselt zur Registration (siehe Registrierungs-Page).
            Nach der Registration kann er sich dann mit seinen Anmeldedaten (Username & Password) einloggen, indem er dann auf den Login-Knopf klickt. Im Hintergrund wird in der Datenbank überprüft, ob es
            übereinstimmende Anmeldedaten in der Datenbank gibt oder nicht.
        </p>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/ablaufdiagramm.login.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/login1.png"><br>


        <h3>1. Fall</h3>
        <p>
            Daten stimmen einem Account überein: Dann wird der User zu der Landing Page (Hauptseite) weitergeleitet. Im Backend wird außerdem das
            die Anmeldezeit und -datum der Anmeldung des User in der Datenbank überschrieben.
        </p>

        <h3>2. Fall</h3>
        <p>
            Daten stimmen keinen Account überein: Dann dem User auf eine Error-Page weitergeleitet, dass seine Anmeldedaten keinem Account übereinstimmt und er kann dann die Anmeldung erneut versuchen.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/login3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/login4.png"><br>

        <h2 id=8>8. FAQ-Page</h2>

        <h3>1. Phase: Login</h3>
        <p>
            Siehe Login-Page => 1.Phase
        </p>

        <h3>2. Phase: Der User hat eine Frage</h3>
        <p>
            Der User hat eine offene Frage, die er sich nicht beantworten kann. Um seine Frage/Fragen zu beantworten sollte er sich auf die FAQ-Seite begeben.
            Dazu klickt er auf eins der beiden maskierten Verlinkungen (siehe FAQ Page 2.Phase-2.Bild), danach wird er zu der FAQ Page weitergeleitet. => 3.Phase
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/faq1.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/faq2.png"><br>

        <h3>3. Phase: Die Frage vom User wird/wurde beantwortet</h3>
        <p>
            Die FAQ-Seite ist dazu da, damit der User auf seine Fragen eine Schnelle Antwort bekommen. Auf der FAQ-Seite gelandet, kann der User ein paar vorgefertigte Fragen von dem Linkvel-Team durchlesen
            und schauen, ob es eine Frage gibt, die der vom User ähnelt. Um die Antworten zu den Fragen zu sehen, muss der User auf die Frage anklicken und es erscheint die Antwort direkt darunter.
        </p>

        <h3>1.Fall – Passende Antwort gefunden:</h3>
        <p>
            Prozess beendet / Wenn der User noch offene Fragen hat, kann er sich noch rumschauen oder es gibt noch andere Anliegen … => 2.Fall
        </p>

        <h3>2.Fall – Keine passende Antwort gefunden:</h3>
        <p>
            Im unteren Teil der FAQ-Seite befindet sich ein Kontaktbereich, wo der User das Formular ausfüllt und dann auf „Senden“ klickt.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/faq3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/faq4.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/faq5.png"><br>


        <h2 id=9>9. UserProfileEdit-Page</h2>

        <h3>1.Phase: Login</h3>
        <p>
            Siehe Login-Page => 1.Phase
        </p>

        <h3>2.Phase: Der User möchte sein Profildaten ändern</h3>
        <p>
            Der User hat Daten, die er auf sein Profil ändern möchte. Um seine persönlichen- also auch seine Accountdaten ändern zu können, folgt der User die beiden Steps, die auf dem
            Bild markiert sind (siehe UserProfileEdit Page 2.Phase-2.Bild) danach wird er zu der UserProfileEdit Page weitergeleitet. => 3.Phase
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/changeProfil.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/changeprofil2.png"><br>

        <h3>3. Phase: Userdaten werden geändert und gespeichert</h3>
        <p>
            Auf der UserProfileEdit-Seite angekommen, kann der User seine persönlichen- also auch seine Accountdaten ändern.
        </p>

        <h3>1. Fall – User möchte seine Daten ändern:</h3>
        <p>
            Daten, die der User ändern kann, sind seine Vor-, Mittel-, Nachname, Adresse, Postleitzahl, Land, E-Mail und Password. Andere Daten wie Geburtstag, Geschlecht, Benutzername und Telefonnummer sind nicht
            erlaubt. Am Anfang stehen in den Felder, wo der User später seine Änderungen einträgt, noch die Daten, die noch bis zur Änderung gelten in einem Label. Um die Daten von dem User zu ändern, füllt er die
            Felder aus, die dem User zutreffen.
            Der User muss nicht alle Felder ausfüllen damit er die Änderungen abspeichern kann. Die Felder, die der User nicht ändert, bleiben die vorigen Daten bestehen. Für die Abspeicherung klickt der User auf den
            Speicher-Button, dann wird er auf eine Weitere Seite geleitet, wo der User eine Bestätigung bekommt, dass seine Daten erfolgreich geändert wurden (sieht UserProfileEdit-Page 3.Phase 3.Bild), dann kann der
            User auf den Zurück-zu-deinem-Profil-Button klicken, dann wird er zu sein Profil Page weitergeleitet.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/profiledit4.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/profiledit3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/profiledit5.png"><br>

        <h3>2. Fall – User möchte seine Daten nicht ändern:</h3>
        <p>
            Um seine Daten nicht mehr zu ändern, klickt der User auf den Zurück-Button, dann wird der User zurück auf sein Profil Page geleitet.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/profiledit6.png"><br>

        <h2 id=10>10. Employee-Page</h2>

        <h3>1. Phase: Login</h3>
        <p>
            Siehe Login-Page => 1.Phase
            Der Employee meldet sich wie ein normaler User an, aber der Unterschied ist, dass der Employee in der Navigationsbar sein extra Feld hat, welches ihn zu den Mitarbeiterbereich führt.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee1.png"><br>

        <h3>2. Phase: Als Mitarbeiter im Mitarbeiter-Bereich</h3>
        <p>
            1.Bereich: AccountId suchen <br>
            Im ersten Bereich kann der Mitarbeiter den AccountId von einem User herausfinden, in dem der Mitarbeiter der Vor- und Nachname oder Benutzername und Email des gesuchten
            Users richtig ein eingibt. Dann erscheint im AccountID-Feld die Id vom gesuchten User oder es wird das Wort „undefined“ ausgegeben, wenn zu den Daten kein User gefunden wurde.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee2.png"><br>

        <p>
            2.Bereich: User-Daten anzeigen <br>
            Wenn der Mitarbeiter den AccountId vom gesuchten User nicht kennt, muss er im 1.Bereich zurück und dann den AccountId erst suchen. Wenn er den AccountId kennt, trägt er
            den AccountId in das Feld „Hier die AccountID:“ und drückt dann auf User-Daten-Button suchen. Wenn keine Eingabe vorhanden ist und den der Button gedrückt wird, erscheint ein „undefinded“
            (siehe Employee-Page 2.Phase 6.Bild)  oder „Es wurden keine Daten gefunden“ (siehe Employee-Page 2.Phase 7.Bild). Falls in dem Feld ein AccountId drinsteht, wird im Hintergrund geprüft, ob es in
            der Datenbank ein AccountId gibt der mit den AccountId übereinstimmt, der als Mitarbeiter eingegeben wurde. Bei einer Übereinstimmung der beiden AccountId wird einige Daten des gefunden User in einer
            Tabelle ausgegeben. Die ausgegebenen Daten als Standard-User sind AccountId, Vorname, Mittelname, Nachname, Geburtstag, Adresse, Postleitzahl, Land, Email und StandardUserToken/SuperUserToken. Dann wird
            es noch eine Tabelle geben, wenn der User ein SuperUser ist. Die Tabelle enthalt die PostId und die Überschrift und ist dafür geeignet, damit der Mitarbeiter bestimmte Post löschen kann.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee4.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee2.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee5.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee6.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/employee7.png"><br>

        <h2 id="11">11. Suchleiste</h2>
        <p>
            Der User gibt seinen Suchbegriff in die Suchleiste der Navigationsbar ein und bestätigt die Eingabe.<br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/searchingbox.png"><br>
            <br>
            Intern speichert die „Search.php“ Seite den Suchbegriff in einer Variablen und ruft mit dem Begriff die Funktion Search(String $Statement) der Klasse „CSearch“ auf.
            Innerhalb dieser Funktion wird geprüft, ob es sich bei dem Suchbegriff um eine Hashtag oder eine Überschrift handelt und abhängig davon die Funktion SearchHashtag(String $Statement) oder SearchHeadline(String $Statement) aufgerufen.
            Innerhalb der Funktionen wird in der Datenbank mittels einer SQL-Abfrage nach dem Begriff gesucht und die Ergebnisse in einem Array gespeichert und zurück gegeben.
            Währenddessen werden die Ergebnisse in einer neuen Variable bei „Search.php“ gespeichert.<br>
            Außerdem wird dem Nutzer ein Text angezeigt, der ihm mitteilt, wie viele Beiträge gefunden wurden.
            <br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/searchresult.png"><br>
            <br>
            Falls keine Ergebnisse gefunden wurden, wird dem Nutzer ein Text ausgegeben, der darauf hinweist, dass keine Beiträge gefunden wurden und die Möglichkeit bietet zur Startseite zurück zugehen.
            Wenn die SQL-Abfrage zu Ergebnissen führt wird die Funktion showPostResult() aufgerufen. Dies führt dazu, dass alle Posts die zu dem Suchbegriff passen ausgegeben. <br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/nochresults.png"><br>
            <br>
            Flussdiagramm für die Suchfunktion: <br>
            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/flowchartsearch.png"><br>
            <br>
        </p>

        <h2 id="12">12. Create Post Backend</h2>
        <p>
            Das Backend bekommt mittels $_POST und $_FILES Methode die Daten für das Erstellen des Beitrags. Diese werden in Variablen gespeichert. Im darauffolgenden Schritt wird die Richtigkeit der Eingaben
            durch die Funktion validateAll(…) der Klasse „CCreatePostValidation“ geprüft. Bei der Funktion wird beispielsweise geprüft, dass Hashtags mit „#“ starten und es sich bei der Bilddatei um eine „jpg“, „png
            oder „jpeg“ Dateien handelt. Des weiteren werden alle Eingaben auf ihre Länge und Werte geprüft.
            Falls alle eingegeben Werte auf ihre Korrektheit geprüft wurden wird das hochgeladen Bild in einem neuen Pfad gespeichert. Dieser besteht aus dem Benutzernamen und dem aktuellen Zeitstempel. Dieser Pfad
            wird mit den anderen eingegebenen Werten und dem aktuellen Datum in der Datenbank gespeichert.
            Der User wird im Anschluss auf die Seite „SuccessfullUpload.php“ weitergeleitet. Dort wird der Nutzer informiert, dass der Beitrag erstellt wurde und hat die Möglichkeit mittels eines Links entweder noch
            einen Beitrag zu erstellen oder zur Startseite zurückzukehren.
        </p>

            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/successfullpost.png"><br>

            <p>
            Falls die Angaben nicht richtig sind, wird der Nutzer nur an die „failedUpload.php“ Seite weitergeleitet und informiert, dass etwas schiefgelaufen ist und erhält die Möglichkeit zurückzukehren.<br>
            </p>

            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/failedpost.png"><br>

            <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/flowchartPost.png"><br>

        <h2 id="13">13. Profil ansehen</h2>
        <p>
            Zu Beginn startet eine Funktion die Mithilfe der Session, die Accountkey den Vornamen gegebenenfalls den zweiten Namen und Nachnamen ermittelt.
            Außerdem wird die Rolle des Users ermittelt, sowie der letzte Login. Im Hauptteil der Seite werden über weitere Datenbankabfragen wieder Vorname, gegebenenfalls der zweite Name und Nachname sowie Geburtsdatum, Telefonnummer, Adresse, Postleitzahl, Land, Benutzername und die Email des angemeldeten User importiert.
            Dazu gibt es die Klasse CUserDataLoading.php. Zu Beginn wird erstmal die ServerConnention hergestellt. Mittels get-Funktionen und dem AccountKey wird durch query eine Datenbankabfrage gestartet die die angeforderten Datensätze aus der Datenbank lesen soll.
            Execute führt dann im nächsten Schritt die Anforderung aus und das Abfrageergebnis wird zurückgegeben und gefecht.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/profiledit6.png"><br>


        <h2 id="14">14. Landing Page – UserPost</h2>
        <p>
            Wie im Flussdiagramm beschrieben, lässt sich die LandingPage mittels PHP im Backend als HMTL Generator erzeugen. Wichtig ist hierbei zu beachten, dass jeder der einzelnen Identifier
            einzigartig sein musst Diese sind notwendig um die Erstellung der Post JavaScript,
            AJAX anwenden zu können um die User Interaktionen in Kraftsetzen zu können.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/landingpage3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/landingpage1.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/landingpage2.png"><br>

        <h2 id="15">15. User-Like</h2>

        <p>
            Der Like - Icons und die Funktionalität zu einem Post wird mittels PHP im backend erstellt. Dabei werden die speziellen Identifier dazu genutzt, um die Interaktionen mit dem Post umzusetzen.
            Drückt der User auf den Like-Button so wird JavaScript an getriggert. Dabei wird zunächst geprüft, ob der User sich eingeloggt hat, wenn dies nicht der Fall ist, so wird mittels der alert-Funktion
            den User dazu angefordert sich einzuloggen, um die Interaktion realisieren zu können.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/userlike2.png"><br>


            Im technischen wird folgendes realisiert:

            <li> Post wird mittels PHP im Backend realisiert</li>
            <li> Like Button wird beim Post Erstellung mit generiert und erhält einzigartige ID- Identifier und einen JavaScript- Funktion UpdateLikes()</li>
            <li> dabei werden folgende Parameter übergeben, die sowohl die Überprüfung des eingeloggten Users mittels der Session als auch die Überschrift und der zu verändernden Bereich
                durch DOM und JavaScript (in den Fall den Like Button) übergeben. </li>


        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/userlike4.%20png.png"><br>

        <li> mittels des Session Cookie wird überprüft, ob der User eingeloggt ist </li>
        <br>
        <p>
            Im Sequenzdiagramm wird detailliert beschrieben, wie die Daten an das Backend mittels AJAX umgesetzt wird. Um liken zu können ist es notwendig sich einzuloggen.
            Nachdem man eingeloggt ist, wird außerdem im Backend überprüft, ob ein User bereits diesen Post geliked hat. Dabei wird mittels des AccountKey eine SQL-Abfrage im Backend aufgerufen,
            welches überprüft, ob der User bereits in den Tabellen der Likes zu dem gewählten Post bereits hinterlegt wurde. Ist das der Fall, so wird zwar die Farbe des Like-Button geändert, aber die
            Gesamtanzahl der Likes wird nicht inkrementiert, da in der Datenbank keine neuen Daten in der Like-Tabellen geschrieben wurde.
            Hat der User noch kein Like zum Post hinterlegt, so wird in der Tabelle like, die Daten geschrieben und die Farbe des Like-Button geändert.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/userlike3.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/userlike1.png"><br>


        <h2 id="16">16. User Comment Post</h2>

        <p>
            Die Generierung des Icons, sowie Funktionen des User comment post werden sehr ähnlich zu Userlike erstellt. Auch hier wird mittels PHP im backend alles erstellt.
            Um kommentieren zu können muss der User angemeldet sein und einen Text eingeben. Ist das Textfeld leer oder der User nicht angemeldet, so wird ein Fehler Meldung ausgegeben.
            Diese Überprüfungen erfolgen im JavaScript vor der Versendung an das Backend. Die verschiedenen Fehler werden mittels Alert-Boxen den User angezeigt.
            Hat der User sich eingeloggt und auch einen Text verfasst, so kann er diese mittels des Button „Senden“ an das Backend mittels Ajax senden. Wird dieser in der Datenbank geschrieben, so wird die
            Gesamtanzahl der Kommentare zu einen Post inkrementiert und im „Comment-Label“ angezeigt.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/usercommentpost0.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/usercommentpost1.png"><br>

        <p>
            (Sequenzdiagramm: UserCommentPost + Fehlermeldungen)
        </p>


        <h2 id="17>">17. Map-Location</h2>

        <p>
            Das beste Feature in unserem Projekt ist sicherlich die „Map-Location Funktion“. Dieses war eines der ersten Ideen, die unser Projekt maßgeblich beeinflusst haben und dazu verleitet hat das Projekt
            durchzuführen. Jeder Superuser ist verpflichtet Koordinaten zu seinem Post anzugeben. Dadurch ist es möglich mittels eines API, in den Fall Google Map Api und den Koordinaten aus der Datenbank
            herauszulesen und diesen der API als Paramater mitzugeben. Dadurch ist es möglich den Standort des Posts über Google Map zu referenziert und anzuzeigen. Dies steigert den User Experience und gibt den
            Social Media Eigenschaft eine weiter besondere Duftnote. Im technischen Detail wird mittels JavaScript die Funktion showLocation() aufgerufen. Dieses erhält als Parameter die Überschrift des Post.
            Damit kann man die ID des Post ausfündig machen und die dazugehören Koordinaten aus der Datenbank rausholen. Mittels der PHP-Methode „showLocation()“ werden die Koordinaten aus der Datenbank in eine
            String der API als Parameter mit übergeben und zurückgegeben. Dieser String wird mittels der Methode „open()“ vom Objekt „window“ in einen neuen Fenster geöffnet.
            Hier im Bild: Standort des ersten Posts auf der Brücke „Pont 25 de Abril“ in Lissabon, Portugal.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/maplocation0.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/maplocation1.png"><br>


        <h2 id="18">18. Search AccountKey – Ajax</h2>

        <p>
            Aus dem Diagramm anschaulich dargestellt.
            Mittels diesen ID kann der Employee/Mitarbeiter weitere Aktionen ausführen.
            Im technischen Detail wir mittels JavaScript und AJAX eine Datenbankabfrage im Backend durchgeführt. Gibt es ein Ergebnis so wird dieser im DOM in der Box angezeigt.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/SearchAccountKey1.png"><br>

        <p>
            Datensatz wurde gefunden:
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/SearchAccountKey3.png"><br>

        <p>
            Keine Daten gefunden:
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/SearchAccountKey2.png"><br>


        <h2 id="19">19. Update User Data By Employee</h2>

        <p>
            Über den AccountID erhält der Employee alle Daten, die er benötigt, um Account Daten eines Users anzuzeigen. (Ist auch im Optionfeld der Mitarbeiter  gleichen Prinzips).
            Nun könnne die Mitarbeiter, nachdem er die Daten des Users gelesen hat auch verändern, dazu muss man ein AccountID im Formular eingeben und dazu auch noch die zu ändernde Daten in dem
            Formular der User Daten eintragen. Über AJAX wird es an das Backend gesendet und geschrieben. Beim erfolgreichen Überschreiben wird eine Meldung ausgegeben.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/UpdateData2.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/UpdateData1.png"><br>


        <h2 id="20">20. DeletePostByEmployee</h2>
        <img class="picture" src="../DokumenationFolder/DocumetationImageFolder//deletepost1.png"><br>
        <p>
            Mittels des PostID/PostKey, welches beim suchen des User angezegt wird, kann der Employee auch Post und die dazugehörigen Likes und Comment löschen.
            Ist das PostID/PostKey - Feld leer wird eine Fehhlermeldung ausgegeben.
            Wurde der Post erfolgreich gelöscht wird eine.
            Für die detalierten Bilder in ImageFolder genauer anschauen.
        </p>


        <h2 id="21"> 21. Optionfeld Mitarbeiterdaten</h2>

        <p>
            Beim Option Feld der Mitarbeiterdaten, wird im generellen, sehr ähnlich zum Search AccountKey, das gleiche Verfahren verwendet. Hierbei ist nur den Unterschied, dass man nicht mittels des
            Namens einen User sucht, sondern mittels des angegebenen Wertes im Option Feld direkt in der Mitarbeiter Tabelle in der Datenbank über diesen Wert gesucht.
            Auch hier wird mittels JavaScript und AJAX die Daten an das Backend geschickt und mittels SQL-Datenbank abfrage die Daten über PHP als Tabellenform angezeigt.
        </p>

        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/MitarbeiterDaten_1.png"><br>
        <img class="picture2" src="../DokumenationFolder/DocumetationImageFolder/MitarbeiterDaten_2.png"><br>

        <p>
            ALLE USERINTERAKTION IST ALS EIN FLUSSDIAGRAMM im DokemenationsFolder NACH ZU LESEN DA DIESES ZU GROß IST.
        </p>

        <h2 id="22"> 22. Known Bugs</h2>

        <p>
            Leider haben wir bis Dato nicht geschafft, jegliche Bugs aus unserem Projekt zu verbannen. Beispielsweise das Problem des einerseits responsiven Footers als auch die Abgrenzung zum Seiteninhalt.
            Auch die ausgiebige Überprüfung und das Testen der Formulare haben auf Grund der fehlenden Zeit leider etwas gelitten und konnten nicht vollumfänglich ausprobiert werden.
            Das Ändern eines Passwort über das Formular der Employee-Seite beinhaltet leider ebenfalls noch einige kleine Fehler, die gegebenenfalls auftreten.
            Letztlich hat das CSS der Landing Page teilweise einige Formatierungsfehler. In den Überschriften kommt es daher leider in bestimmten Größen vor, dass die
            diese etwas flackert oder einen ungewollten Slide-Effekt aufweist.
        </p>

        <h2 id="23"> 23. Verbesserungen</h2>

        <ul class="Verbesserungen" >
            <li>	MCV -Pattern für besseren Projektstruktur </li>
            <li>	besseren Code-Style </li>
            <li>	mehr Userinteraktionen und Foto Gallery </li>
            <li>	weiter Einbettung von Medien wie zum Beispiel Audio – Files </li>
            <li>	bessere Überprüfung der Eingabe Daten in Backend und Frontend </li>
            <li>	Unittest </li>
            <li>	IT-Sicherheitslücken beheben </li>
            <li>	Bessere Anpassung des CSS und bessere User Experience Design </li>
        </ul>

        <h2 id="24"> 24. Lessons learned</h2>
        <ul class="Lessons_learned">
            <li>	stetige Entwicklung und Verbesserung des Codes </li>
            <li>	Erlernung der Programmiersprachen PHP, JavaScript </li>
            <li>	Erlernung der Auszeichnungssprache HMTL und CSS </li>
            <li>	gute Zusammenarbeit der einzelnen Mitglieder </li>
            Probleme die gelöst wurden:
            <li>	Durchstich zwischen Backend und Frontend </li>
            <li>	Interaktive Webseite (Liken, Posten, Standort) </li>
            <li>	automatisiert Post aus erstellen und dazugehörigen Daten aus der Datenbank laden </li>
            <li>	Login und Session </li>
            <li>	AJAX für Formulare </li>
            <li>	Responsive Seiten mittels CSS </li>
            <li>	Schnittstellenerzeugung für Wiederverwendung von Codes </li>
        </ul>

        <h2 id="25"> 25. Unser Fazit</h2>
        <p>
            Unser Projekt "linkvel" ist nun beendet und rückblickend ist uns Folgendes in Erinnerung geblieben und vielleicht auch eine Lehre für weitere Projekte.<br>
            Es ist wichtig, sich im Team erstmal ein wenig kennenzulernen und ein Gefühl für die Personen zu bekommen, mit welchen man arbeiten wird. Meilensteine, eine grobe Zeiteinteilung und
            sich die nächsten Schritte vor Augen zu halten ist eine große Hilfe. Auch Regelmäßige Treffen und Hilfe untereinander waren sehr wichtig, um ein Verständnis für die Arbeit der anderen zu bekommen.
            Wir haben schnell gemerkt, dass es wichtig ist die Erkenntnisse der aktuellen Vorlesungen mit einfließen zu lassen und direkt umzusetzen. Es ist außerdem sehr hilfreich, wenn es eine Art Teamleader, wie es
            Hoang für uns übernommen hat gibt. Natürlich hatte das Projekt Höhen und Tiefen, aber ich denke alles in allem können und sind wir zufrieden mit unserer Leistung und dem Ergebnis.
        </p>

    </div>
</div>
</body>
</html>
