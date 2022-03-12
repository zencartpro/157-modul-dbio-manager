<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2020, Vinos de Frutas Tropicales.
//
define('HEADING_TITLE', 'DbIo%s-Vorlagen konfigurieren');

define('TEXT_SCOPE_PUBLIC', 'Öffentlich');
define('TEXT_SCOPE_PRIVATE', 'Privat');
define('TEXT_SYSTEM_UPDATE', 'System');
define('TEXT_UNKNOWN_ADMIN', 'Unbekannt');

define('HEADING_TITLE_EDIT', 'Sie bearbeiten eine Vorlage für den <em>%s</em> Handler.');
define('HEADING_TITLE_NEW', 'Sie legen eine neue Vorlage für den <em>%s</em> Handler an.');
define('HEADING_TITLE_COPY', 'Sie kopieren eine Vorlage, die für den Handler <em>%s</em> definiert ist.');

define('HEADING_SCOPE', 'Geltungsbereich');
define('HEADING_TEMPLATE_NAME', 'Vorlagenname');
define('HEADING_DESCRIPTION', 'Beschreibung');
define('HEADING_UPDATED_BY', 'Zuletzt aktualisiert von');
define('HEADING_LAST_UPDATE', 'Letztes Aktualisierungsdatum');
define('HEADING_ACTION', 'Aktion');

define('COLUMN_HEADING_SCOPE', 'Vorlagenumfang:');
define('INSTRUCTIONS_SCOPE', 'Eine DbIo-Vorlage kann entweder <em>Privat</em> nur für Ihren Gebrauch oder <em>Öffentlich</em> sein und allen autorisierten Admin-Benutzern zur Verfügung stehen.');
define('COLUMN_HEADING_NAME', 'Vorlagenname:');
define('INSTRUCTIONS_NAME', 'Wenn Sie einen vorlagenbasierten <b>Export</b> durchführen, bildet der <em>Name</em> der Vorlage einen Teil des Dateinamens des Exports. Verwenden Sie nur alphanumerische Zeichen und Unterstriche (_) für den Namen.  Der von Ihnen gewählte Name muss innerhalb des gewählten <em>Umfangs</em> Ihrer verfügbaren Vorlagen eindeutig sein.');
define('COLUMN_HEADING_DESCRIPTION', 'Vorlagenbeschreibung:');
define('INSTRUCTIONS_DESCRIPTION', 'Verwenden Sie die Beschreibung der Vorlage (kein HTML erlaubt!), um sich an den Zweck der Vorlage zu erinnern.  Sie können die Beschreibung für jede von Ihrem Geschäft unterstützte Sprache anpassen.');
define('COLUMN_HEADING_CHOOSE_FIELDS', 'Wählen Sie Vorlagenfelder:');
define('COLUMN_HEADING_COPY_FIELDS', 'Vorlagenfelder:');
define('INSTRUCTIONS_CHOOSE', 'Sie können Felder aus den links stehenden <em>verfügbaren</em> Feldern in die für diese Vorlage gewählten Felder (rechts) verschieben.  Sie können mehrere Felder auf einmal auswählen, indem Sie die Taste &quot;Strg&quot; gedrückt halten, während Sie mit der Maus auf weitere Felder klicken.<br /><<br />Wenn Sie die Felder für diese Vorlage ausgewählt haben, können Sie mit den Schaltflächen die Felder innerhalb Ihrer benutzerdefinierten Liste nach oben oder unten verschieben.  Wenn die Vorlage für eine Operation <b>exportieren</b> verwendet wird, enthält die resultierende .CSV-Datei Spalten in der von Ihnen angegebenen Reihenfolge.');
define('INSTRUCTIONS_CHOOSE_COPY', 'Wenn Sie eine Vorlage <em>kopieren</em>, enthält die kopierte Vorlage zunächst die zuvor konfigurierten Felder.  Sobald die Vorlage kopiert ist, können Sie die Kopie bearbeiten, um die Felder anzupassen.  Wenn Sie nicht alle Felder sehen können, ziehen Sie die Dropdown-Liste mit der Maus nach unten, bis alle sichtbar sind.');

define('NO_TEMPLATES_EXIST', 'Es sind derzeit keine Vorlagen definiert.  Verwenden Sie die Schaltfläche &quot;Neue Vorlage&quot; um eine hinzuzufügen!');
define('TEXT_ENTER_REPORT_DESCRIPTION_HERE', 'Geben Sie hier die Beschreibung des Berichts ein.');

define('BUTTON_EDIT', 'Bearbeiten');
define('BUTTON_EDIT_TITLE', 'Klicken Sie hier, um diese Vorlage zu bearbeiten');
define('BUTTON_COPY', 'Kopieren');
define('BUTTON_COPY_TITLE', 'Klicken Sie hier, um diese Vorlage zu kopieren');
define('BUTTON_REMOVE', 'Entfernen');
define('BUTTON_REMOVE_TITLE', 'Klicken Sie hier, um diese Vorlage dauerhaft zu entfernen');
define('BUTTON_NEW', 'Neue Vorlage');
define('BUTTON_NEW_TITLE', 'Klicken Sie hier, um eine neue DbIo-Vorlage für den aktuellen Handler zu erstellen');
define('BUTTON_EDIT', 'Bearbeiten');
define('BUTTON_EDIT_TITLE', 'Klicken Sie hier, um diese DbIo-Vorlage zu bearbeiten');
define('BUTTON_INSERT', 'Einfügen');
define('BUTTON_INSERT_TITLE', 'Klicken Sie hier, um eine neue DbIo-Vorlage zu erstellen');
define('BUTTON_UPDATE', 'Aktualisieren');
define('BUTTON_UPDATE_TITLE', 'Klicken Sie hier, um diese DbIo-Vorlage zu aktualisieren');
define('BUTTON_RETURN', 'DbIo Manager');
define('BUTTON_RETURN_TITLE', 'Klicken Sie hier, um zur Hauptseite des DbIo-Managers zurückzukehren');
define('BUTTON_CANCEL', 'Abbrechen');
define('BUTTON_CANCEL_TITLE', 'Klicken Sie hier, um die aktuelle Aktion abzubrechen');

define('INSTRUCTIONS_MAIN', 
    'Verwenden Sie diese Seite, um eine Exportvorlage für den DbIo <em>%1$s</em> Handler anzupassen.  Sie können eine Teilmenge der von diesem Handler unterstützten Felder auswählen und auch die Reihenfolge anpassen, in der diese Felder in die zugehörigen Spalten der CSV-Datei exportiert werden.' .
    '<br /><br />' .
    'Der <em>Umfang</em> einer Vorlage kann entweder <b>' . TEXT_SCOPE_PUBLIC . '</b>, für alle Admin-Benutzer verfügbar, oder <b>' . TEXT_SCOPE_PRIVATE . '</b>, nur für Ihren Gebrauch verfügbar.  Sein <em>Name</em> bildet einen Teil des Namens einer exportierten csv-Datei, wenn die Vorlage zum Anpassen einer Exportaktion verwendet wird, z.B. <code>dbio.%1$s.template_name.datetime_string</code>.  Die von Ihnen zur Verfügung gestellte <em>Beschreibung</em> wird auf dem Hauptbildschirm <strong>Database I/O Manager</strong> angezeigt, wenn die Vorlage ausgewählt wird, und gibt Ihnen eine Bestätigung der Funktionen der Vorlage.'
);

define('ERROR_UNKNOWN_HANDLER', 'Es wurde ein unbekannter Handler-Name angegeben, bitte versuchen Sie es erneut.');
define('ERROR_TEMPLATE_NAME_EXISTS', 'Eine &quot;%3$s&quot; Vorlage namens \'%2$s\' existiert bereits für den <em>%1$s</em> Handler.  Bitte wählen Sie einen anderen Namen.');
define('ERROR_TEMPLATE_NAME_INVALID_CHARS', 'Der von Ihnen eingegebene Vorlagenname enthält ungültige Zeichen.  Bitte geben Sie den Namen erneut ein, indem Sie <b>nur</b> alphanumerische Zeichen und Unterstriche verwenden.');
define('ERROR_TEMPLATE_NAME_TOO_LONG', 'Der von Ihnen eingegebene Vorlagenname hat zu viele Zeichen.  Bitte geben Sie den Namen mit %u oder weniger Zeichen erneut ein.');
define('ERROR_TEMPLATE_NO_FIELDS', 'Bitte wählen Sie mindestens ein benutzerdefiniertes Feld für diese DbIo-Vorlage.');
define('SUCCESS_TEMPLATE_ADDED', 'Die DbIo-Vorlage mit dem Namen <em>%s</em> wurde erfolgreich hinzugefügt.');
define('SUCCESS_TEMPLATE_UPDATED', 'Die DbIo-Vorlage mit dem Namen <em>%s</em> wurde erfolgreich aktualisiert.');
define('SUCCESS_TEMPLATE_REMOVED', 'Die DbIo-Vorlage mit dem Namen <em>%s</em> wurde erfolgreich entfernt.');

define('JS_MESSAGE_CONFIRM_REMOVE', 'Sind Sie sicher, dass Sie diese Vorlage dauerhaft entfernen möchten?');
define('JS_MESSAGE_NAME_CANT_BE_EMPTY', 'Das Feld Vorlagenname darf nicht leer sein.');
define('JS_MESSAGE_NAME_TOO_LONG', 'Das Feld Vorlagenname darf nicht länger als %u Zeichen sein.');
define('JS_MESSAGE_AT_LEAST_ONE_FIELD', 'Eine Vorlagen-Anpassung muss mindestens ein Feld enthalten.');
define('JS_MESSAGE_ERRORS_EXIST', 'Sie müssen einige Änderungen an den Eingaben im Formular vornehmen:');
define('JS_MESSAGE_TRY_AGAIN', 'Bitte nehmen Sie diese Korrekturen vor und versuchen Sie es erneut.');
