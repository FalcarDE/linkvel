<!-- Created by @Antonia Geschke-->
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


        <dv class="Impressum">
            <h1>Impressum</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                consequat.</p><br>
        </dv>

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

    <div class="sitemap">
        <li><a href="#Meilenstein 1">Definition der Themen und Anforderung des Projektes</a></li>
        <li><a href="#Meilenstein 2">Erstellung BUC, SUC und Aktivitätsdiagramme</a></li>
        <li><a href="#Meilenstein 3">Meilenstein 3</a></li>
        <li><a href="#Meilenstein 4">Meilenstein 4</a></li>
        <li><a href="#Meilenstein 5">Meilenstein 5</a></li>
        <li><a href="#Meilenstein 6">Meilenstein 6</a></li>
        <li><a href="#Meilenstein 7">Meilenstein 7</a></li>
        <li><a href="#Meilenstein 8">Meilenstein 8</a></li>
        <li><a href="#Meilenstein 9">Meilenstein 9</a></li>
        <li><a href="#Meilenstein 10">Meilenstein 10</a></li>
    </div>

    <div class="documentation">

        <h2 id="Meilenstein 1">Meilenstein 1 - Definition der Themen und Anforderung des Projektes </h2>
        <p>
            Zu Beginn des Projektes haben wir uns einen ersten Eindruck der gestellten Anforderungen gemacht. Um in naher Zeit möglichst strukturiert zu können, haben wir die bevorstehenden Aufgaben eingeteilt und in verschiedenen Meilensteinen festgehalten.
            Wir haben des Weiteren geplant mindestens ein wöchentliches Treffen, je nach Pensum auch weitere zu vereinbaren, um ein aktives Verständnis für unsere Arbeit untereinander zu bekommen und um mögliche Probleme und unser weiteres Vorgehen zu besprechen.
            Dann kam es dann zu den ersten tatsächlichen Schritten und dem Start des Projektes. Ein Gruppenname war notwendig. Da es sich bei der Idee der Seite um einen Reiseblog handeln sollte, kombinierten wir letzten Endes die Wörter linked (vernetzt) und Travel (Reise), wodurch unser Projekt seinen Namen bekam. Linkvel.<br>
        </p>

        <h2 id="Meilenstein 2">Meilenstein 2 - Erstellung BUC, SUC und Aktivitätsdiagramme</h2>
        <p>
            Der nächste Schritt beinhaltete die Erstellung verschiedener Diagramme, die wir zu gleichen Teilen untereinander aufteilten.
            Darunter Business Use-Cases und System-Use-Cases und Flussdiagramme, die die Funktionen, Eigenschaften und Möglichkeiten der späteren Website darstellt. So entstanden Use-Cases zu den verschiedenen Rollen wie Super-User, User und Admin mit den jeweiligen Berechtigungen und Funktionen.
            Das System-Use-Case zeigt das nochmal im Detail. Das Flussdiagramm verdeutlicht den Vorgang innerhalb der Website beim Vorgang der Registrierung.<br>
        </p>

        <h2 id="Meilenstein3">Meilenstein 3 - Erstellung der Tabellenmodelle und Implementierung der Datenbank</h2>
        <p>
            Infolgedessen kam es zur Grundlage der Datenbank. Die Erstellung des ER-Modells und des darauf aufbauenden Tabellen-Modells.
            Die Datenbank sollte Datensätze über User, der in Standard-User und Super-User unterteilt ist, enthalten sowie Mitarbeiter.
            Über beide sollten Datensätze wie Adresse und Account-Details und Kontaktdaten gespeichert sein.
            Des Weiteren werden Posts, Likes und Kommentare gespeichert.
            Das erstellte ER-Modell war die Grundlage für das darauffolgende Tabellen-Modell, das alle Bereiche unserer zu erstellender Datenbank beinhaltet.
            In einem unserer Meetings im November fand eine grobe Ideensammlung für die finale Datenbank statt, dessen Implementierung kurz darauffolgte.<br>
        </p>

        <h2 id="Meilenstein4">Meilenstein 4 - Erstellung von Mockups und Deklaration Design der Weboberfläche</h2>
        <p>
            Nahezu zeitgleich gab es erste Überlegungen wie die Seiten strukturiert und anschaulich umgesetzt werden können.
            Mit Hilfe von Mockups kamen wir schnell auf eine zufriedenstellende Möglichkeit das Optische mit den Funktionalitäten und Anforderungen zu
            kombinieren die einerseits gestellt worden sind und die wir selbst gerne hätten. Im nächsten Meeting einigten wir uns darauf das Design durch CSS, und
            die nice-to-have Funktionen hintenanzustellen und uns zunächst auf die wichtigsten Sachen zu konzentrieren. <br>
        </p>

        <h2 id="Meilenstein5">Meilenstein 5 - Erstellung Login und Registrierungs-formular</h2>

        <h2 id="Meilenstein6">Meilenstein 6 - Anbindung der Datenbank mit Login und Registrierungs-formular</h2>

        <h2 id="Meilenstein7">Meilenstein 7 - Erstellung: Navigationsbar, FAQ – Seite, Suchleiste, Impressum, Policy, Login-Fehlerseite</h2>

        <h3>Navigationsbar</h3>
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
            <img class="picture" src="../image/changeProfilSite/navbar.png">
            <img class="picture" src="../image/changeProfilSite/burgermenu.png">
        </p>

        <h3>FAQ</h3>
        <p>
        1.Phase: User Login<br>
        Der User muss sich einloggen, bevor er irgendetwas machen kann. Falls der User noch kein Account hat, kann er auf Registration klicken und er wechselt zur Registration. Nach der Registration kann er sich dann mit seinen Anmeldedaten (Username&Password) einloggen, indem er dann auf den Login-Knopf klickt. Im Hintergrund wird überprüft, ob es übereinstimmende Anmeldedaten in der Datenbank gibt oder nicht. <br>
        1.Fall – Daten stimmen einem Account überein: Dann wird der User zu der Landing Page (Hauptseite) weitergeleitet … => 2.Step<br>
        2.Fall – Daten stimmen keinen Account überein: Dann dem User mitgeteilt, dass seine Anmeldedaten keinem Account übereinstimmt und er kann dann die Anmeldung erneut versuchen.<br>

        <img class="picture" src="../image/changeProfilSite/FlowChartFAQ.png">
        <img class="picture"" src="../image/changeProfilSite/LogIn.png">
        <br>

        2.Phase: Der User hat eine Frage<br>
        Der User hat eine offene Frage, die er sich nicht beantworten kann. Um seine Frage/Fragen zu beantworten sollte er sich auf die FAQ-Seite begeben. Dazu klickt er auf eins der beiden maskierten Verlinkungen (siehe FAQ Page 2.Phase-2.Bild), danach wird er zu der FAQ Page weitergeleitet. => 3.Phase <br>
        <img class="picture3" src="../image/changeProfilSite/FlowChartFAQ2.png">
        <br>

         3.Phase: Die Frage vom User wird/wurde beantwortet<br>
         Die FAQ-Seite ist dazu da, damit der User auf seine Fragen eine Schnelle Antwort bekommen. Auf der FAQ-Seite gelandet, kann der User ein paar vorgefertigte Fragen von dem Linkvel-Team durchlesen und schauen, ob es eine Frage gibt, die der vom User ähnelt. Um die Antworten zu den Fragen zu sehen, muss der User auf die Frage anklicken und es erscheint die Antwort direkt darunter.<br>
         1.Fall – Passende Antwort gefunden: Prozess beendet / Wenn der User noch offene Fragen hat, kann er sich noch rumschauen oder es gibt noch andere Anliegen … =>
         2.Fall – Keine passende Antwort gefunden:  Im unteren Teil der FAQ-Seite befindet sich ein Kontaktbereich, wo der User das Formular ausfüllt und dann auf „Senden“ klickt.
        <img class="picture" src="../image/changeProfilSite/FlowChartFAQ3.png">

            <!--FAQ-Seite fehlt-->
        </p>

        <h3>UserProfileEdit-Page</h3>
        <p>
            1.Phase: Login<br>
            Siehe FAQ-Page => 1.Phase<br>
            2.Phase: Der User möchte sein Profildaten ändern<br>
            Der User hat Daten, die er auf sein Profil ändern möchte. Um seine persönlichen- also auch seine Accountdaten ändern zu können, folgt der User die beiden Steps, die auf dem Bild markiert sind (siehe UserProfileEdit Page 2.Phase-2.Bild) danach wird er zu der UserProfileEdit Page weitergeleitet. => 3.Phase<br>
            <img class="picture" src="../image/changeProfilSite/changeProfil.png">
            <img class="picture" src="../image/changeProfilSite/LandingPagechangeProfil.png">
            <br>
            3.Phase: Userdaten werden geändert und gespeichert<br>
            Auf der UserProfileEdit-Seite angekommen, kann der User seine persönlichen- also auch seine Accountdaten ändern.<br>
            <br>
            1.Fall – User möchte seine Daten ändern:<br>
            Daten, die der User ändern kann, sind seine Vor-, Mittel-, Nachname, Adresse, Postleitzahl, Land, E-Mail und Password. Andere Daten wie Geburtstag, Geschlecht und Benutzername sind nicht erlaubt. Am Anfang stehen in den Felder, wo der User später seine Änderungen einträgt, noch die Daten, die noch bis zur Änderung gelten. Um die Daten von dem User zu ändern, füllt er die Felder aus, die dem User zutreffen. Der User muss nicht alle Felder ausfüllen damit er die Änderungen abspeichern kann. Für die Abspeicherung klickt der User auf den Speicher-Button, dann wird er auf eine Weitere Seite geleitet, wo der User eine Bestätigung bekommt, dass seine Daten erfolgreich geändert wurden (sieht UserProfileEdit-Page 3.Phase 3.Bild), dann kann der User auf den Zurück-zu-deinem-Profil-Button klicken, dann wird er zu sein Profil Page weitergeleitet.<br>
            <br>
            <img class="picture" src="../image/changeProfilSite/changeprofilsite.png">
            <img class="picture" src="../image/changeProfilSite/successfullchange.png">
            <br>
            2.Fall – User möchte seine Daten nicht ändern:
            Um seine Daten nicht mehr zu ändern, klickt der User auf den Zurück-Button, dann wird der User zurück auf sein Profil Page geleitet.<br>
            <img class="picture" src="../image/changeProfilSite/successfullchange2.png">
            <br>
        </p>
    <h3>Suchleiste</h3>
        <p>
            Der User gibt seinen Suchbegriff in die Suchleiste der Navigationsbar ein und bestätigt die Eingabe.<br>
            <img class="picture" src="../image/changeProfilSite/searchingbox.png">
            <br>
            Intern speichert die „Search.php“ Seite den Suchbegriff in einer Variablen und ruft mit dem Begriff die Funktion Search(String $Statement) der Klasse „CSearch“ auf.
            Innerhalb dieser Funktion wird geprüft, ob es sich bei dem Suchbegriff um eine Hashtag oder eine Überschrift handelt und abhängig davon die Funktion SearchHashtag(String $Statement) oder SearchHeadline(String $Statement) aufgerufen.
            Innerhalb der Funktionen wird in der Datenbank mittels einer SQL-Abfrage nach dem Begriff gesucht und die Ergebnisse in einem Array gespeichert und zurück gegeben.
            Währenddessen werden die Ergebnisse in einer neuen Variable bei „Search.php“ gespeichert.<br>
            Außerdem wird dem Nutzer ein Text angezeigt, der ihm mitteilt, wie viele Beiträge gefunden wurden.
            <br>
            <img class="picture2" src="../image/changeProfilSite/searchresult.png">
            <br>
            Falls keine Ergebnisse gefunden wurden, wird dem Nutzer ein Text ausgegeben, der darauf hinweist, dass keine Beiträge gefunden wurden und die Möglichkeit bietet zur Startseite zurück zugehen.
            Wenn die SQL-Abfrage zu Ergebnissen führt wird die Funktion showPostResult() aufgerufen. Dies führt dazu, dass alle Posts die zu dem Suchbegriff passen ausgegeben. <br>
            <img class="picture" src="../image/changeProfilSite/nochresults.png">
            <br>
            Flussdiagramm für di Suchfunktion: <br>
            <img class="picture" src="../image/changeProfilSite/flowchartsearch.png">
            <br>
        </p>

        <h3>Create Post Backend</h3>
        <p>
            Das Backend bekommt mittels $_POST und $_FILES Methode die Daten für das Erstellen des Beitrags. Diese werden in Variablen gespeichert.
            Im darauffolgenden Schritt wird die Richtigkeit der Eingaben durch die Funktion validateAll(…) der Klasse „CCreatePostValidation“ geprüft.
            Bei der Funktion wird beispielsweise geprüft, dass Hashtags mit „#“ starten und es sich bei der Bilddatei um eine „jpg“, „png oder „jpeg“ Dateien handelt.
            Des weiteren werden alle Eingaben auf ihre Länge und Werte geprüft.<br>

            Falls alle eingegeben Werte auf ihre Korrektheit geprüft wurden wird das hochgeladen Bild in einem neuen Pfad gespeichert. Dieser besteht aus dem Benutzernamen und dem aktuellen Zeitstempel.
            Dieser Pfad wird mit den anderen eingegebenen Werten und dem aktuellen Datum in der Datenbank gespeichert.<br>

            Der User wird im Anschluss auf die Seite „SuccessfullUpload.php“ weitergeleitet. Dort wird der Nutzer informiert, dass der Beitrag erstellt wurde und hat die Möglichkeit mittels eines Links entweder noch einen Beitrag zu erstellen oder zur Startseite zurückzukehren.<br>

            <img class="picture" src="../image/changeProfilSite/successfullpost.png">
            <br>
            Falls die Angaben nicht richtig sind, wird der Nutzer nur an die „failedUpload.php“ Seite weitergeleitet und informiert, dass etwas schiefgelaufen ist und erhält die Möglichkeit zurückzukehren.<br>
            <img class="picture" src="../image/changeProfilSite/failedpost.png">
            <br>
            <img class="picture" src="../image/changeProfilSite/flowchartPost.png">
        </p>

        <h3>Nutzerprofil</h3>
        <p>

        </p>
    </div>
</div>

</body>
</html>
