<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
//
// last update: 2025-09-11 webchills
//
// Copyright (c) 2017-2025, Vinos de Frutas Tropicales.
//
define('HEADING_TITLE', 'DbIo%s-Vorlagen konfigurieren');

define('TEXT_SCOPE_PUBLIC', 'Öffentlich');
define('TEXT_SCOPE_PRIVATE', 'Privat');
define('TEXT_SYSTEM_UPDATE', 'System');
define('TEXT_UNKNOWN_ADMIN', 'Unbekannt');

define('HEADING_TITLE_EDIT', 'Sie bearbeiten eine Vorlage für den <em>%s</em>-Handler.');
define('HEADING_TITLE_NEW', 'Sie erstellen eine neue Vorlage für den <em>%s</em>-Handler.');
define('HEADING_TITLE_COPY', 'Sie kopieren eine Vorlage, die für den <em>%s</em>-Handler definiert ist.');

define('HEADING_SCOPE', 'Gültigkeitsbereich');
define('HEADING_TEMPLATE_NAME', 'Vorlagenname');
define('HEADING_DESCRIPTION', 'Beschreibung');
define('HEADING_UPDATED_BY', 'Zuletzt aktualisiert von');
define('HEADING_LAST_UPDATE', 'Datum der letzten Aktualisierung');
define('HEADING_ACTION', 'Aktion');

define('COLUMN_HEADING_SCOPE', 'Vorlagenbereich:');
define('INSTRUCTIONS_SCOPE', 'Eine DbIo-Vorlage kann entweder <em>privat</em> für Ihre persönliche Nutzung oder <em>öffentlich</em> und für alle autorisierten Admin-Benutzer verfügbar sein.');
define('COLUMN_HEADING_NAME', 'Vorlagenname:');
define('INSTRUCTIONS_NAME', 'Wenn Sie einen vorlagenbasierten <b>Export</b> durchführen, ist der <em>Name</em> der Vorlage Teil des Dateinamens des Exports. Verwenden Sie für den Namen nur alphanumerische Zeichen und Unterstriche (_). Der von Ihnen gewählte Name muss innerhalb des ausgewählten <em>Gültigkeitsbereichs</em> Ihrer verfügbaren Vorlagen eindeutig sein.');
define('COLUMN_HEADING_DESCRIPTION', 'Vorlagenbeschreibung:');
define('INSTRUCTIONS_DESCRIPTION', 'Verwenden Sie die Beschreibung der Vorlage (kein HTML erlaubt!), um sich an den Zweck der Vorlage zu erinnern. Sie können die Beschreibung für jede von Ihrem Shop unterstützte Sprache anpassen.');
define('COLUMN_HEADING_CHOOSE_FIELDS', 'Vorlagenfelder auswählen:');
define('COLUMN_HEADING_COPY_FIELDS', 'Vorlagenfelder:');
define('INSTRUCTIONS_CHOOSE', 'Sie können Felder aus den <em>verfügbaren</em> (auf der linken Seite) in die ausgewählten (auf der rechten Seite) für diese Vorlage verschieben. Sie können mehrere Felder gleichzeitig auswählen, indem Sie die Strg-Taste gedrückt halten und mit der Maus auf weitere Felder klicken.<br><br>Nachdem Sie die Felder für diese Vorlage ausgewählt haben, können Sie die Felder mit den Schaltflächen in Ihrer benutzerdefinierten Liste nach oben oder unten verschieben. Wenn die Vorlage für einen <b>Export</b> verwendet wird, enthält die resultierende CSV-Datei die Spalten in der von Ihnen festgelegten Reihenfolge.');
define('INSTRUCTIONS_CHOOSE_COPY', 'Wenn Sie eine Vorlage <em>kopieren</em>, enthält die kopierte Vorlage zunächst die zuvor konfigurierten Felder. Nachdem die Vorlage kopiert wurde, können Sie diese Kopie bearbeiten, um die Felder anzupassen. Wenn Sie nicht alle Felder sehen können, ziehen Sie die Dropdown-Liste mit der Maus nach unten, bis alle Felder sichtbar sind.');

define('NO_TEMPLATES_EXIST', 'Derzeit sind keine Vorlagen definiert. Verwenden Sie die Schaltfläche „Neue Vorlage“, um eine hinzuzufügen!');
define('TEXT_ENTER_REPORT_DESCRIPTION_HERE', 'Geben Sie hier die Beschreibung des Berichts ein.');

define('BUTTON_EDIT', 'Bearbeiten');
define('BUTTON_EDIT_TITLE', 'Klicken Sie hier, um diese Vorlage zu bearbeiten');
define('BUTTON_COPY', 'Kopieren');
define('BUTTON_COPY_TITLE', 'Klicken Sie hier, um diese Vorlage zu kopieren');
define('BUTTON_REMOVE', 'Entfernen');
define('BUTTON_REMOVE_TITLE', 'Klicken Sie hier, um diese Vorlage dauerhaft zu entfernen');
define('BUTTON_NEW', 'Neue Vorlage');
define('BUTTON_NEW_TITLE', 'Klicken Sie hier, um eine neue DbIo-Vorlage für den aktuellen Handler zu erstellen');

define('BUTTON_INSERT', 'Einfügen');
define('BUTTON_INSERT_TITLE', 'Klicken Sie hier, um eine neue DbIo-Vorlage zu erstellen');
define('BUTTON_UPDATE', 'Aktualisieren');
define('BUTTON_UPDATE_TITLE', 'Klicken Sie hier, um diese DbIo-Vorlage zu aktualisieren');
define('BUTTON_RETURN', 'DbIo-Manager');
define('BUTTON_RETURN_TITLE', 'Klicken Sie hier, um zur Hauptseite des DbIo-Managers zurückzukehren');
define('BUTTON_CANCEL', 'Abbrechen');
define('BUTTON_CANCEL_TITLE', 'Klicken Sie hier, um die aktuelle Aktion abzubrechen');

define('INSTRUCTIONS_MAIN',
'Auf dieser Seite können Sie eine Exportvorlage für den DbIo-Handler <em>%1$s</em> anpassen. Sie können eine Teilmenge der von diesem Handler unterstützten Felder auswählen und auch die Reihenfolge anpassen, in der diese Felder in die zugehörigen Spalten der CSV-Datei exportiert werden. Weitere Informationen finden Sie in diesem <a href="https://github.com/lat9/dbio/wiki/Manage-DbIo-Templates" target="_blank" rel="noreferrer noopener">Wiki-Artikel</a>.' .
'<br><br>' .
'Der <em>Gültigkeitsbereich</em> einer Vorlage kann entweder <b>' . TEXT_SCOPE_PUBLIC . '</b> sein, verfügbar für alle Admin-Benutzer, oder <b>' . TEXT_SCOPE_PRIVATE . '</b>, nur für Ihre Verwendung verfügbar. Der <em>Name</em> der Vorlage wird Teil des Namens einer exportierten CSV-Datei, wenn die Vorlage zum Anpassen einer Exportaktion verwendet wird, z. B. <code>dbio.%1$s.template_name.datetime_string</code>. Die von Ihnen angegebene <em>Beschreibung</em> wird auf dem Hauptbildschirm des <strong>Database I/O Manager</strong> angezeigt, wenn die Vorlage ausgewählt wird, und gibt Ihnen eine Bestätigung der Funktionen der Vorlage. '
);

define('ERROR_UNKNOWN_HANDLER', 'Es wurde ein unbekannter Handlername angegeben. Bitte versuchen Sie es erneut.');
define('ERROR_TEMPLATE_NAME_EXISTS', 'Eine Vorlage mit dem Namen \'%2$s\' und dem Platzhalter \'%3$s\' existiert bereits für den Handler <em>%1$s</em>. Bitte wählen Sie einen anderen Namen.');
define('ERROR_TEMPLATE_NAME_INVALID_CHARS', 'Der von Ihnen eingegebene Vorlagenname enthält ungültige Zeichen. Bitte geben Sie den Namen erneut ein und verwenden Sie dabei <b>nur</b> alphanumerische Zeichen und Unterstriche.');
define('ERROR_TEMPLATE_NAME_TOO_LONG', 'Der von Ihnen eingegebene Vorlagenname enthält zu viele Zeichen. Bitte geben Sie den Namen erneut ein und verwenden Sie dabei %u oder weniger Zeichen.');
define('ERROR_TEMPLATE_NO_FIELDS', 'Bitte wählen Sie mindestens ein benutzerdefiniertes Feld für diese DbIo-Vorlage aus.');
define('SUCCESS_TEMPLATE_ADDED', 'Die DbIo-Vorlage mit dem Namen <em>%s</em> wurde erfolgreich hinzugefügt.');
define('SUCCESS_TEMPLATE_UPDATED', 'Die DbIo-Vorlage mit dem Namen <em>%s</em> wurde erfolgreich aktualisiert.');
define('SUCCESS_TEMPLATE_REMOVED', 'Die DbIo-Vorlage mit dem Namen <em>%s</em> wurde erfolgreich entfernt.');

define('JS_MESSAGE_CONFIRM_REMOVE', 'Möchten Sie diese Vorlage wirklich dauerhaft entfernen?');
define('JS_MESSAGE_NAME_CANT_BE_EMPTY', 'Das Feld „Vorlagenname” darf nicht leer sein.');
define('JS_MESSAGE_NAME_TOO_LONG', 'Das Feld „Vorlagenname” darf nicht länger als %u Zeichen sein.');
define('JS_MESSAGE_AT_LEAST_ONE_FIELD', 'Eine Vorlagenanpassung muss mindestens ein Feld enthalten.');
define('JS_MESSAGE_ERRORS_EXIST', 'Sie müssen einige Änderungen an den Eingaben im Formular vornehmen:');
define('JS_MESSAGE_TRY_AGAIN', 'Bitte nehmen Sie diese Korrekturen vor und versuchen Sie es erneut.');
