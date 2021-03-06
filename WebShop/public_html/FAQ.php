<!DOCTYPE html>
<html lang="de">
<title>FAQ</title>
<meta charset="UTF-8">

<?php
include "header.php";
?>
    <script src="../js/FAQ.js"></script>

    <main class="w3-padding-32 w3-sidebar-height">
        <div class="w3-container w3-content-margin">
            <div class="w3-quarter w3-row w3-padding-48">
                <aside class=" w3-light-grey w3-bar-block w3-border w3-card w3-round">
                    <span class="fa-2x w3-bar-item w3-border-bottom w3-border-black">FAQ</span>
                    <button onclick="questionSwitch('Kundenkonto')" class=" w3-bar-item w3-button w3-border-bottom">1.
                        Kundenkonto
                    </button>
                    <button onclick="questionSwitch('Bestellung')" class="w3-bar-item w3-button w3-border-bottom">2.
                        Bestellung
                    </button>
                    <button onclick="questionSwitch('Bezahlung')" class="w3-bar-item w3-button w3-border-bottom">3.
                        Bezahlung
                    </button>
                    <button onclick="questionSwitch('Versand')" class="w3-bar-item w3-button w3-border-bottom">4.
                        Versand & Lieferung
                    </button>
                    <button onclick="questionSwitch('Lieferung')" class=" w3-bar-item w3-button w3-border-bottom">5.
                        Widerrufsrecht, Rücksendung & Umtausch
                    </button>
                </aside>
            </div>
            <div class="w3-threequarter w3-row">

                <div class="w3-row-padding w3-padding-16 w3-container w3-left-align">
                    <div class="w3-bar w3-border-bottom w3-margin-bottom">
                        <span class=" fa-2x fa-tex">FRAGEN ZU UNSEREN PRODUKTEN</span>

                    </div>
                    <section class="w3-content">

                        <div class="Kundenkonto w3-hide w3-show w3-animate-opacity">
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo1')">Welche Versandmöglichkeiten stehen mir zur
                                Verfügung?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo1">
                                <p class="w3-padding">
                                    Wir bieten derzeit nur Standardversand an.
                                </p>
                            </article>

                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo2')">Wie lange beträgt die Lieferzeit?
                            </button>


                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo2">
                                <p class="w3-padding">
                                    Beim Standardversand erfolgt die Lieferung innerhalb der auf der jeweiligen
                                    Artikeldetailseite angegebenen
                                    Werktage (Montag bis Samstag, allgemeine Feiertage ausgenommen). In der Regel können
                                    Sie von einer
                                    Lieferzeit von 2-3 Werktagen ab Bestelleingang ausgehen, sofern nicht eine längere
                                    Lieferzeit auf der
                                    Artikeldetailseite der jeweiligen von Ihnen bestellten Artikel angegeben ist.
                                    <br>
                                    Im Fall der Vorauskasse beginnt die Lieferzeit nach Zahlungseingang auf unserem
                                    Bankkonto, andernfalls nach
                                    Vertragsschluss. Der Kaufgegenstand wird für einen Zeitraum von fünf Kalendertagen
                                    für Sie reserviert.
                                    <br>
                                    Bei der Bestellung mehrerer Artikel ist zur Berechnung die jeweils späteste
                                    Lieferzeitangabe der im
                                    Warenkorb befindlichen Artikel für die Berechnung maßgeblich. Bei Waren, bei denen
                                    im Einzelfall ein
                                    gesonderter Termin zum Start der Auslieferung angegeben ist, beginnt die Lieferfrist
                                    frühestens mit diesem
                                    Termin.
                                    <br>
                                    Bei Speditionsartikeln setzt sich der Spediteur mit Ihnen in Verbindung, um einen
                                    taggenauen Liefertermin zu
                                    vereinbaren.
                                    <br>
                                    Sobald Ihre Bestellung auf dem Weg zu Ihnen ist, erhalten Sie eine
                                    Versandbestätigung per E-Mail. Mit der
                                    darin enthaltenen persönlichen Sendungsnummer können Sie Ihre Sendung mit nur einem
                                    Klick verfolgen.

                                </p>
                            </article>

                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo3')">Welche Versandkosten fallen an?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo3">
                                <p class="w3-padding">
                                    Für den Versand Ihrer Bestellung fällt, unabhängig vom Bestellwert, einmalig eine
                                    Versandkostenpauschale in
                                    Höhe von 4,95 Euro an. Dies gilt auch, wenn in Ausnahmefällen Ihre Bestellung in
                                    mehreren Paketen versandt
                                    wird.
                                    <br>
                                    Beim Versand von sperrigen Gütern wird zzgl. der Versandkostenpauschale von 4,95
                                    Euro ein
                                    Versandkostenzuschlag in Höhe von 5,95 Euro berechnet.
                                    <br>
                                    Bei besonders großen Artikeln fallen, zusätzlich zu der Versandkostenpauschale von
                                    4,95 Euro,
                                    Speditionskosten in Höhe von 29,95 Euro an.
                                    <br>
                                    Bitte beachten Sie, dass der Versandkostenzuschlag in Einzelfällen abweichen kann.
                                    Die Versandkosten und
                                    eventuelle Versandkostenzuschläge sind in der jeweiligen Artikelbeschreibung auf
                                    lidl.de gesondert
                                    ausgewiesen.

                                </p>
                            </article>


                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo4')">Wohin kann das Paket geliefert werden?


                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo4">
                                <p class="w3-padding">
                                    Wir liefern Ihr Paket problemlos und zuverlässig an jede gewünschte Adresse in
                                    Deutschland. Gerne liefern
                                    wir Ihr Paket an eine von der Rechnungsanschrift abweichende Adresse – sofern sich
                                    Rechnungs- und
                                    Lieferadresse in Deutschland befinden. Wir liefern direkt zu Ihnen nach Hause;
                                    sollten Sie tagsüber nicht
                                    zuhause sein, können Sie gerne die Adresse von Ihren Eltern, Freunden, Nachbarn etc.
                                    als Lieferadresse
                                    angeben.
                                    <br>
                                    Alternativ können Sie Ihr Paket (max. Größe 60 x 35 x 35 cm) auch an eine
                                    DHL-Packstation Ihrer Wahl
                                    ausliefern lassen. Sollte die Sendung aufgrund Ihrer Maße für die Packstation
                                    ungeeignet sein, wird DHL das
                                    Paket nach Möglichkeit an eine Postfiliale umleiten und Sie darüber informieren.
                                    Nähere Informationen und
                                    die Möglichkeit einer Registrierung finden Sie auf Paket.de.
                                    Genießen Sie die Vorteile einer DHL-Packstation:
                                    <br>
                                    Sendungen rund um die Uhr empfangen und versenden*
                                    9 Tage Zeit für die Abholung Ihres Pakets
                                    Sicherheit des Packstationsfachs mittels mTAN
                                    Deutschlandweit stehen 2.650 Packstationen zur Verfügung
                                    <br>
                                    Der Retourenschein befindet sich in Ihrem Paket und dient als Beleg für die
                                    Auslieferung. Ihre Rechnung
                                    senden wir per E-Mail im PDF-Format zu.
                                    <br>
                                    *An einzelnen Packstationen können die Öffnungszeiten abweichen.
                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo5')">Habe ich ein Widerrufsrecht?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo5">
                                <p class="w3-padding">
                                    Wir liefern Ihr Paket problemlos und zuverlässig an jede gewünschte Adresse in
                                    Deutschland. Gerne liefern
                                    wir Ihr Paket an eine von der Rechnungsanschrift abweichende Adresse – sofern sich
                                    Rechnungs- und
                                    Lieferadresse in Deutschland befinden. Wir liefern direkt zu Ihnen nach Hause;
                                    sollten Sie tagsüber nicht
                                    zuhause sein, können Sie gerne die Adresse von Ihren Eltern, Freunden, Nachbarn etc.
                                    als Lieferadresse
                                    angeben.
                                    <br>
                                    Alternativ können Sie Ihr Paket (max. Größe 60 x 35 x 35 cm) auch an eine
                                    DHL-Packstation Ihrer Wahl
                                    ausliefern lassen. Sollte die Sendung aufgrund Ihrer Maße für die Packstation
                                    ungeeignet sein, wird DHL das
                                    Paket nach Möglichkeit an eine Postfiliale umleiten und Sie darüber informieren.
                                    Nähere Informationen und
                                    die Möglichkeit einer Registrierung finden Sie auf Paket.de.
                                    Genießen Sie die Vorteile einer DHL-Packstation:
                                    <br>
                                    Sendungen rund um die Uhr empfangen und versenden*
                                    9 Tage Zeit für die Abholung Ihres Pakets
                                    Sicherheit des Packstationsfachs mittels mTAN
                                    Deutschlandweit stehen 2.650 Packstationen zur Verfügung
                                    <br>
                                    Der Retourenschein befindet sich in Ihrem Paket und dient als Beleg für die
                                    Auslieferung. Ihre Rechnung
                                    senden wir per E-Mail im PDF-Format zu.
                                    <br>
                                    *An einzelnen Packstationen können die Öffnungszeiten abweichen.
                                </p>
                            </article>
                        </div>
                        <div class="Bestellung w3-hide w3-animate-opacity">
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo6')">Wie erhalte ich die Rechnung zu meiner Bestellung?

                            </button>

                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo6">
                                <p class="w3-padding">


                                    Die Rechnung zu Ihrer Bestellung erhalten Sie automatisch per E-Mail im PDF-Format.
                                    Außerdem können Sie Ihre
                                    Rechnungen jederzeit online in Ihrem Kundenkonto einsehen und downloaden. Die
                                    Rechnung enthält folgende
                                    Angaben:
                                </p>

                                <ul>
                                    <li>Rechnungsdaten</li>
                                    <li>Vollständige Anschrift</li>
                                    <li>Artikelbezeichnung</li>
                                    <li>Bestellmenge</li>
                                    <li>Versandkosten zzgl. eventueller Versandkostenzuschläge</li>
                                    <li>Zahlungsart</li>
                                    <li>QR-Code</li>

                                </ul>

                                <p class="w3-padding">
                                Sollten Sie keinen Drucker zur Verfügung haben, können Sie unseren Kundenservice
                                kontaktieren, damit Sie die
                                gewünschte Rechnung postalisch zugeschickt bekommen.

                                </p>
                            </article>

                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo7')">
                                Gibt es einen Mindestbestellwert?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo7">
                                <p class="w3-padding">


                                    Nein, um bei uns zu bestellen, müssen Sie keinen Mindestbestellwert beachten.
                                    <br>
                                    Falls Sie bei Ihrer Bestellung jedoch einen Gutschein einlösen möchten, kann es ggf.
                                    einen Mindestbestellwert, sowie weitere Einlösebedingungen geben. Bitte beachten Sie
                                    dazu auch unsere allgemeinen Nutzungsbedingungen für Gutscheine, sowie die
                                    jeweiligen themenspezifischen Gutscheinbedingungen.

                                </p>
                            </article>
                        </div>
                        <div class="Bezahlung w3-hide w3-animate-opacity">
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo8')">Kann ich mit dem Spediteur einen Liefertermin vereinbaren?



                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo8">
                                <p class="w3-padding">


                                    Im Lidl-Onlineshop werden folgende Zahlungsarten angeboten:
                                    <br><br>
                                    Rechnung,
                                    Lastschrift,
                                    Vorauskasse,
                                    PayPal,
                                    Kreditkarte,
                                    Ratenkauf,
                                    Zahlpause,
                                    Gutschein
                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir im Einzelfall bestimmte Zahlungsarten
                                    nicht anbieten können.

                                </p>
                            </article>

                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo9')">Kann ich mit dem Spediteur einen Liefertermin vereinbaren?


                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo9">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo10')">Was muss ich bei der Zahlung per PayPal beachten?


                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo10">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo11')">Kann ich mehrere Gutscheincodes bei einer Bestellung einlösen?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo11">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo12')">Wie wird der Gutscheincode eingelöst?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo12">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                        </div>
                        <div class="Versand w3-hide w3-animate-opacity">
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo13')">Warum erhalte ich mehrere Rechnungen zu einer Bestellung?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo13">
                                <p class="w3-padding">


                                    Im Lidl-Onlineshop werden folgende Zahlungsarten angeboten:
                                    <br><br>
                                    Rechnung,
                                    Lastschrift,
                                    Vorauskasse,
                                    PayPal,
                                    Kreditkarte,
                                    Ratenkauf,
                                    Zahlpause,
                                    Gutschein
                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir im Einzelfall bestimmte Zahlungsarten
                                    nicht anbieten können.

                                </p>
                            </article>

                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo14')">Was muss ich bei der Zahlung per Lastschrift beachten?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo14">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo15')">Wie funktioniert der Ratenkauf?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo15">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo16')">Wo finde ich Videos zu meinem Artikel?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo16">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN, Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen. Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                        </div>
                        <div class="Lieferung w3-hide w3-animate-opacity">
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo18')">Kann ich meinen Artikel umtauschen?
                                zur
                                Verfügung?


                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo18">
                                <p class="w3-padding">


                                    Im Lidl-Onlineshop werden folgende Zahlungsarten angeboten:
                                    <br><br>
                                    Rechnung,
                                    Lastschrift,
                                    Vorauskasse,
                                    PayPal,
                                    Kreditkarte,
                                    Ratenkauf,
                                    Zahlpause,
                                    Gutschein
                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir im Einzelfall bestimmte
                                    Zahlungsarten
                                    nicht anbieten können.

                                </p>
                            </article>

                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo19')">Mir liegen keine Retourenunterlagen vor. Was tun?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo19">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen
                                    Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung
                                    genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck
                                    der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung
                                    eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code
                                    auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN,
                                    Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen.
                                    Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte
                                    Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo20')">Wie kann ich eine online bestellte Matratze zurücksenden?

                            </button>
                            <article class="w3-hide w3-container w3-animate-right w3-animate-opacity" id="Demo20">
                                <p class="w3-padding">

                                    Beim Kauf auf Rechnung zahlen Sie den gesamten Rechnungsbetrag innerhalb von 14
                                    Tagen nach Versand der Ware, abzüglich der Beträge von eventuellen
                                    Rücksendungen.
                                    Die Bezahlung erfolgt ganz einfach per Überweisung an die in der Rechnung
                                    genannte
                                    Bankverbindung.

                                    <br><br>
                                    Vergessen Sie bitte nicht, Ihre 9-stellige Bestellnummer als Verwendungszweck
                                    der
                                    Überweisung einzutragen.

                                    <br><br>
                                    Sie können die Überweisung Ihres Rechnungsbetrages auch bequem durch Nutzung
                                    eines
                                    Scan-Verfahrens innerhalb Ihres Online-Bankings vornehmen (soweit Ihre Hausbank
                                    diese Funktion anbietet bzw. unterstützt). Dazu scannen Sie einfach den QR-Code
                                    auf
                                    Ihrer Rechnung oder laden das digitale Rechnungsdokument innerhalb Ihres
                                    Online-Bankings hoch. Dabei werden die Überweisungsdaten wie Empfänger, IBAN,
                                    Betrag
                                    und Verwendungszweck automatisch in den Überweisungsträger übernommen.
                                    Anschließend
                                    können Sie die Zahlung wie gewohnt in Ihrem Online-Banking freigeben. Bei
                                    technischen Fragen zum Scan-Verfahren, wie zum Beispiel der Einrichtung der
                                    Funktionalität, wenden Sie sich bitte an Ihre Hausbank.

                                    <br><br>
                                    Bitte haben Sie Verständnis dafür, dass wir den Rechnungskauf für bestimmte
                                    Artikel
                                    und Bestellungen nicht anbieten können. Der Kauf auf Rechnung setzt zudem eine
                                    positive Bonitätsüberprüfung voraus.

                                    <br><br>
                                    Wir akzeptieren weder Bargeld noch Schecks und können leider bei Verlust keine
                                    Haftung übernehmen.

                                </p>
                            </article>
                            <button class="w3-button w3-block w3-light-grey w3-left-align w3-border"
                                    onclick="showAnswer('Demo11')">Ist die Rücksendung kostenlos?

                            </button>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>


<?php
include "footer.php";
?>