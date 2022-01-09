<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <title>FAQ-Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Anpassung für Ansicht auf andere Geräte -->
    <link rel="stylesheet" href="../CSS/FAQ_Page_Style.css">
        <script src = "FAQ_Page.js" defer></script>
    </head>

        <body>



        <?php include "../Frontend/NavBar.html"?>


        <!-- <h1>FAQ</h1> -->
        <div class = Image-Box alt= "faq">
            <img id="FAQ-Bild" src="../image/FAQ_Image.jpg" alt = "FAQ-Bild" />
        </div>



         <div class="accordion">

             <div class = "headline">
                 <h2>Häufig gestellte Fragen</h2>
             </div>

<!-- 1.------------------------------------------------------------------------------------------------------------- -->

             <div class="accordion-item">

                 <!-- ---------------------------------------- -->

                 <div class="accordion-item-header">
                     <h3>Wie kann man ein Post erstellen/veröffentlichen?</h3>
                 </div>

                 <!-- ---------------------------------------- -->
                 <div class="accordion-item-body">

                     <div class="accordion-item-body-content">
                         <h4>Auf unserer Webseite unterscheiden wir zwischen zwei Rollen. Es gibt einmal den Standard-User und den Super-User. Um ein Post zu erstellen, muss man die Rolle Super-User haben.  </h4>
                     </div>
                 <!-- ---------------------------------------- -->
                 </div>
             </div>

<!-- 1.------------------------------------------------------------------------------------------------------------- -->

             <div class="accordion-item">

                 <!-- ---------------------------------------- -->

                 <div class="accordion-item-header">
                     <h3>Wie wird man ein Super-User?</h3>
                 </div>

                 <!-- ---------------------------------------- -->
                 <div class="accordion-item-body">

                     <div class="accordion-item-body-content">
                         <h4>Nach der Registrierung ist jeder neue User ein Standard-User und um ein Super-User zu werden,
                             muss man das Linkvel-Team kontaktieren, dass man die Rolle als Super-User bekommen möchte.
                             Nach Erhalt der Mitteilung wird es geprüft und wenn nichts dazwischen kommt wird ihnen dir Super-User Rolle zugeteilt.</h4>
                     </div>

                     <!-- ---------------------------------------- -->
                 </div>
             </div>

<!-- 1.------------------------------------------------------------------------------------------------------------- -->

             <div class="accordion-item">

                 <!-- ---------------------------------------- -->

                 <div class="accordion-item-header">
                     <h3>Wie setzt man sich mit dem Linkvel-Team in Verbindung?</h3>
                 </div>

                 <!-- ---------------------------------------- -->
                 <div class="accordion-item-body">

                     <div class="accordion-item-body-content">
                         <h4>Unterhalb der FAQ-Seite gibt es ein Bereich dafür, um uns zu kontaktieren. Füllen Sie dazu
                             die notwendigen Felder aus. Da diese Webseite erst vor kurzem veröffentlicht wurde, ist das
                             zurzeit die einzige Methode. In der Zukunft wird es sicherlich auch eine andere Methode geben.</h4>
                     </div>

                     <!-- ---------------------------------------- -->
                 </div>
             </div>



<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->


             <div class = "headline">
                 <h2>Allgemeine Fragen</h2>
             </div>

<!-- 2.------------------------------------------------------------------------------------------------------------- -->

            <div class="accordion-item">

            <!-- ---------------------------------------- -->

                <div class="accordion-item-header">
                    <h3>Was ist der Unterschied zwischen Standard-User und Super-User?</h3>
                </div>

            <!-- ---------------------------------------- -->
                <div class="accordion-item-body">

                        <div class="accordion-item-body-content">
                            <h4> Als Standard-User hat alle Möglichkeiten und Funktionen, die unsere Webseite zu bieten hat.
                                <br>
                                <br>
                                <p>Beispielsweise:</p>
                                <li>das persönliche Profil bearbeiten</li>
                                <li>Account Daten ändern (z.B. Password oder E-Mail)</li>
                                <li>Post, die veröffentlicht wurden zu besuchen, lesen, liken, teilen und darunter zu kommentieren</li>
                                <li>...</li>
                                <br>
                                => Der große Unterschied ist, dass nur der Super-User ein Post verfassen darf und der Standard-User nicht.
                            </h4>

                        </div>

            <!-- ---------------------------------------- -->
                </div>
            </div>

<!-- 2.------------------------------------------------------------------------------------------------------------- -->

            <div class="accordion-item">

            <!-- ---------------------------------------- -->

                <div class="accordion-item-header">
                    <h3>Wann tun, wenn ein Post die Richtlinie verletzt?</h3>
                </div>

            <!-- ---------------------------------------- -->
                <div class="accordion-item-body">

                    <div class="accordion-item-body-content">
                        <h4>
                            In diesem Fall sollte man das Linkvel-Team schnellstmöglich informieren. Jedoch kommt es nicht
                            so häufig vor, dass ein Post die Richtlinien verstößt und falls es zutrifft, dann
                            wird es meisten von den Mitarbeiten von der Webseite runtergenommen und der User bekommt daraufhin
                            eine angemessene Bestrafung.
                        </h4>
                    </div>

            <!-- ---------------------------------------- -->
                </div>
            </div>

<!-- 2.------------------------------------------------------------------------------------------------------------- -->

            <div class="accordion-item">

            <!-- ---------------------------------------- -->

                <div class="accordion-item-header">
                    <h3>Wie sucht man nach einem bestimmten User oder Post?</h3>
                </div>

            <!-- ---------------------------------------- -->
                <div class="accordion-item-body">

                    <div class="accordion-item-body-content">
                        <h4>Ganz oben in der Navigationsbar befindet sich eine Suchleiste. Dort kann man dann nach den bestimmen User oder Post suchen.
                            Dazu wird einem die Suchfilter behilflich sein.</h4>
                    </div>

            <!-- ---------------------------------------- -->
                </div>
            </div>




<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->



         </div>

        </body>



        <footer>
            <div class="contact-section">
                <h1>Kontaktieren Sie uns </h1>
                <p> Sie haben Fragen an das Linkvel-Team? Bitte füllen Sie das Formular aus und wir melden uns schnellstmöglich bei Ihnen.</p>
                <div class="border"></div>

                <form class = "contact-form" action="FAQ_Page.php" method= "post">
                    <input type="text"          class = "contact-form-text"           placeholder = "Benutzername">
                    <input type="email"         class = "contact-form-text"           placeholder = "Email">
                    <input type="tel"           class = "contact-form-text"           placeholder = "Handynummer">

                    <textarea class="contact-form-text" placeholder= "Nachrricht ..."></textarea>
                    <input type="submit"        class = "contact-form-button"         value= "Senden">
                </form>
            </div>
        </footer>
</html>