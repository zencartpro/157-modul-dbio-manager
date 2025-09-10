<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2025, Vinos de Frutas Tropicales.
//
// Last updated: DbIo v2.0.2
//
define('HEADING_TITLE', 'Database I/O (DbIo) Manager');

define('TEXT_ALL_ORDERS_STATUS_VALUES', 'Alle Werte');

define('TEXT_IS_EXPORT_ONLY', "Der '%s' DbIo-Handler unterstützt keine Importaktion.");

define('TEXT_SCOPE_PUBLIC', 'Öffentlich');
define('TEXT_SCOPE_PRIVATE', 'Privat');

define('TEXT_FORMAT_CONFIG_INFO', 'Dieser Abschnitt zeigt die aktuellen Einstellungen, die den Betrieb des <em>DbIo Managers</em> beeinflussen.  Die Werte für <em>DbIo Einstellungen</em> können <a href="%s">hier</a> geändert werden.');
define('TEXT_DBIO_SETTINGS', 'DbIo Einstellungen');
define('TEXT_CSV_DELIMITER', 'CSV: Begrenzer');
define('TEXT_CSV_ENCLOSURE', 'CSV: Anlage');
define('TEXT_CSV_ESCAPE', 'CSV: Escape');
define('TEXT_CSV_ENCODING', 'CSV: Verschlüsselung');
define('TEXT_CSV_DATE_FORMAT', 'CSV: Import-Datumsformat');
define('TEXT_FILE_DEFAULT_SORT_ORDER', 'Standard-Dateisortierfolge');
define('TEXT_ALLOW_DUPLICATE_MODELS', 'Produkte: Doppelte Artikelnummern zulassen');
define('TEXT_AUTO_CREATE_CATEGORIES', 'Produkte: Kategorien automatisch erstellen');
define('TEXT_INSERT_REQUIRES_COMMAND', 'Produkte: Artikel anlegen erfordert Befehl');
define('TEXT_MAX_EXECUTION', 'Maximale Ausführungszeit');
define('TEXT_SPLIT_RECORD_COUNT', 'Anzahl geteilter Datensätze');
define('TEXT_DEBUG_ENABLED', 'Fehlersuche aktiviert');
define('TEXT_DATE_FORMAT', 'Anzeige/Protokoll-Datumsformat');
define('TEXT_DBIO_SYSTEM_SETTINGS', 'System-Einstellungen');
define('TEXT_MAX_UPLOAD_FILE_SIZE', 'Maximale Upload-Dateigröße');
define('TEXT_CHARSET', 'Interne Zeichenkodierung');
define('TEXT_DB_CHARSET', 'Datenbank-Zeichenkodierung');
define('TEXT_DEFAULT_LANGUAGE', 'Standardsprache');
define('TEXT_CHOOSE_HANDLER', 'Wählen Sie den zu verwendenden Handler:');

define('LEGEND_EXPORT', 'Export');
define('LEGEND_CONFIGURATION', 'Konfiguration');
define('LEGEND_FILE_ACTIONS', 'Datei-Aktionen');
define('LEGEND_FILE_UPLOADS', 'Datei-Uploads');

define('TEXT_INSTRUCTIONS', 'Der <b><i>DbIo Manager</i></b> bietet Ihnen <em>Handler</em>, die den Export und, bedingt, den Import von Datenbankinformationen unter Verwendung einer CSV-Datei (kommagetrennter Wert) ermöglichen.  Wählen Sie den zu verwendenden Handler aus der Dropdown-Liste unten aus, und die Funktionen dieses Handlers, z.B. Filter und/oder Optionen zur Anpassung von Vorlagen, werden angezeigt.');

define('DBIO_BUTTON_DELETE', 'Löschen');
define('DBIO_BUTTON_DELETE_TITLE', 'Klicken Sie hier, um die aktuell ausgewählte(n) Datei(en) vom Server zu löschen.');
define('DBIO_BUTTON_GO', 'Weiter');
define('DBIO_BUTTON_GO_TITLE', 'Klicken Sie hier, um die gewählte Aktion für die unten gewählte Datei auszuführen.');
define('TEXT_AUTO_DOWNLOAD', 'Export sofort nach Erstellung herunterladen');
define('BUTTON_EXPORT', 'Export');
define('BUTTON_EXPORT_TITLE', 'Klicken Sie hier, um die mit dem ausgewählten DbIo-Bericht verbundenen Informationen zu exportieren.');
define('BUTTON_UPLOAD', 'Upload');
define('BUTTON_UPLOAD_TITLE', 'Klicken Sie hier, um die ausgewählte Datei hochzuladen.');

define('TEXT_FILE_ACTION_DELETE_INSTRUCTIONS', 'Sie können eine oder mehrere der unten aufgeführten Dateien vom Server entfernen. Wählen Sie die zu löschende(n) Datei(en) aus und klicken Sie dann auf die Schaltfläche &quot;Löschen&quot;.');

define('TEXT_SHOW_HIDE_FILTERS', 'Klicken Sie auf diese Schaltfläche, um die Filter für <strong>alle</strong>Handler anzuzeigen (oder auszublenden).  Wenn die Filter <em>ausgeblendet</em> sind, dann gelten sie nicht für den aktuellen Export.');
define('TEXT_BUTTON_MANAGE_CUSTOMIZATION', 'Vorlagen verwalten');
define('LABEL_CHOOSE_CUSTOMIZATION', 'Vorlage wählen:');
define('TEXT_ALL_FIELDS', 'Alle Felder');
define('TEXT_ALL_FIELDS_DESCRIPTION', 'Der aktuelle Export wird alle Felder enthalten, die vom aktuellen Handler unterstützt werden.');

define('DBIO_FORM_SUBMISSION_ERROR', 'Bei der Einreichung Ihres Formulars fehlten einige Werte, bitte versuchen Sie es erneut.');

define('TEXT_NO_DBIO_FILES_AVAILABLE', 'Für den <em>%s</em>-Handler sind keine Import-/Export-Dateien verfügbar.');
define('ERROR_FILENAME_MISMATCH', 'Bitte wählen Sie eine Upload-Datei, die mit dem aktuellen Handler (%1$s) verknüpft ist, z.B. <em>dbio.%1$s.*.csv</em>.');
define('TEXT_UPLOAD_FOR_IMPORT_ONLY', 'Der <em>%s</em>-Handler unterstützt keine Datei-Importe, daher wurden Datei-Uploads deaktiviert.');
define('TEXT_CHOOSE_ACTION', 'Wählen Sie die Aktion, die für die unten gewählte Datei ausgeführt werden soll:');
define('TEXT_FILE_UPLOAD_INSTRUCTIONS', 'Sie können auch eine Datei von Ihrem Computer (Erweiterungen %2$s <b>nur</b>) für den Import mit dem <em>DbIo Manager</em> hochladen.  Wählen Sie eine Datei, die vom aktuellen Handler (%1$s) verarbeitet werden kann, z.B. <em>dbio.%1$s.*.csv</em>, und klicken Sie dann auf die Schaltfläche &quot;Upload&quot;.');
define('TEXT_CHOOSE_FILE', 'Ihre Datei:');

define('DBIO_ACTION_PLEASE_SELECT', 'Bitte wählen Sie');
define('DBIO_ACTION_SPLIT', 'Teilen');
define('DBIO_ACTION_DELETE', 'Löschen');
define('DBIO_ACTION_FULL_IMPORT', 'Import (vollständig)');
define('DBIO_ACTION_CHECK_IMPORT', 'Import (nur Kontrolle)');
define('DBIO_ACTION_DOWNLOAD', 'Download');

define('TEXT_FILE_ACTION_INSTRUCTIONS', 
    'Die folgenden dateibezogenen Aktionen werden unterstützt, könnten aber durch den aktuellen <em>Handler</em> eingeschränkt sein:' . PHP_EOL .
    '<ol>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_SPLIT . '</strong>: Teilt eine CSV-Datei in mehrere Dateien auf, wobei die aktuelle Einstellung Ihres Shops für <b>Anzahl geteilter Datensätze</b> verwendet wird, so dass Sie große Datenmengen abschnittsweise herunterladen können.</li>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_DOWNLOAD . '</strong>: Lädt die ausgewählte Datei (entweder .csv oder .log) für Ihre Überprüfung auf Ihren Computer herunter.</li>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_FULL_IMPORT . '</strong>: Diese Aktion, die nur aktiviert ist, wenn der ausgewählte Handler Importe unterstützt, verwendet die ausgewählte .csv-Datei, um Änderungen an Ihrer Datenbank vorzunehmen.</li>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_CHECK_IMPORT . '</strong>: Diese Aktion, die nur dann aktiviert ist, wenn der ausgewählte Handler Importe unterstützt, gibt Ihnen die Möglichkeit, die Datenbankaktionen zu überprüfen, die bei einem &quot;vollständigen&quot; Import durchgeführt werden; es finden keine Datenbankänderungen statt.  Nach Abschluss wird eine Protokolldatei erzeugt, die die <em>DbIo</em> Analyse enthält.</li>' . PHP_EOL .
    '</ol>' . PHP_EOL .
    'Wählen Sie eine <em>Aktion</em> und eine zugehörige Datei und klicken Sie dann auf die Schaltfläche &quot;Weiter&quot;.' . PHP_EOL
);

define('HEADING_CHOOSE_FILE', 'Datei wählen');
define('HEADING_FILENAME', 'Dateiname');
define('HEADING_BYTES', 'Bytes');
define('HEADING_LAST_MODIFIED', 'Datum der letzten Änderung');
define('HEADING_DELETE', 'Löschen?');

define('TEXT_SORT_NAME_ASC', 'Klicken Sie hier, um nach Dateiname aufsteigend zu sortieren');
define('TEXT_SORT_NAME_DESC', 'Klicken Sie hier, um nach Dateiname absteigend zu sortieren');
define('TEXT_SORT_SIZE_ASC', 'Klicken Sie hier, um nach Dateigröße aufsteigend zu sortieren');
define('TEXT_SORT_SIZE_DESC', 'Klicken Sie hier, um nach Dateigröße absteigend zu sortieren');
define('TEXT_SORT_DATE_ASC', 'Klicken Sie hier, um nach Dateidatum aufsteigend zu sortieren');
define('TEXT_SORT_DATE_DESC', 'Klicken Sie hier, um nach Dateidatum absteigend zu sortieren');

define('TEXT_VIEW_STATS', 'Importdetails anzeigen');
define('TEXT_IMPORT_LAST_STATS', 'Klicken Sie hier, um die Details über den letzten DbIo-Import einzusehen');

define('ERROR_CHOOSE_FILE_ACTION', 'Bitte wählen Sie die Aktion für die Datei &quot;%s&quot;.');

define('SUCCESSFUL_FILE_IMPORT', 'Der DbIo-Import aus der Datei &quot;%1$s&quot; wurde erfolgreich abgeschlossen.  %2$u Datensätze wurden verarbeitet.');
define('CAUTION_FILE_IMPORT', 'Der DbIo-Import aus Datei &quot;%1$s&quot; wurde mit %2$u Fehlern und %3$u Warnungen abgeschlossen. %4$u Datensätze wurden eingefügt oder aktualisiert.');

define('ERROR_CANT_DELETE_FILE', 'Die angeforderte Datei (%s) wurde nicht gelöscht; sie wurde nicht gefunden oder ihre Berechtigungen sind nicht richtig gesetzt.');
define('SUCCESS_FILE_DELETED', 'Die angeforderte Datei (%s) wurde erfolgreich gelöscht.');

define('ERROR_CANT_SPLIT_FILE_OPEN_ERROR', 'Die angeforderte Datei (%s) wurde nicht geteilt; sie konnte nicht geöffnet werden.');
define('ERROR_CREATING_SPLIT_FILE', 'Während des Split-Vorgangs ist ein Fehler aufgetreten.  Die Datei (%s) konnte nicht erstellt werden.');
define('ERROR_WRITING_SPLIT_FILE', 'Beim Schreiben des Datensatzes #%$2u der geteilten Datei (%$1s) ist ein Fehler aufgetreten.');
define('ERROR_SPLIT_INPUT_NOT_AT_EOF', 'Beim Lesen der geteilten Eingabedatei (%s) ist ein unbekannter Fehler aufgetreten.  Die Operation wurde abgebrochen.');
define('WARNING_FILE_TOO_SMALL_TO_SPLIT', 'Die Datei (%1$s) enthält zu wenige Datensätze (%2$u) zum Aufteilen.');
define('FILE_SUCCESSFULLY_SPLIT', 'Die Datei (%1$s) wurde erfolgreich in %2$u Blöcke aufgeteilt.'); 

define('ERROR_FILE_IS_EXPORT_ONLY', 'Die Datei (%s) wurde nicht importiert.  Sie ist mit einem <em>nur exportieren</em> Bericht verknüpft.');
define('ERROR_UNKNOWN_TEMPLATE', 'Die von Ihnen angeforderte DbIo-Vorlage konnte nicht gefunden werden; bitte versuchen Sie es erneut.');
define('DBIO_MGR_EXPORT_SUCCESSFUL', 'Ihr <em>%1$s</em> Export wurde erfolgreich in %2$s abgeschlossen, wodurch %3$u Datensätze erstellt wurden.');

define('ERROR_NO_FILE_TO_UPLOAD', 'Es wurde keine Datei für den Upload ausgewählt.  Bitte versuchen Sie es erneut.');
define('FILE_UPLOADED_SUCCESSFULLY', 'Die Datei <em>%s</em> wurde erfolgreich hochgeladen.');

define('DBIO_CANT_OPEN_FILE', "Download erfolglos, die Datei '%s' existiert nicht.");

define('JS_MESSAGE_OK2DELETE_PART1', 'Sind Sie sicher, dass Sie die ');  //-The count of files selected is inserted between these two messages
define('JS_MESSAGE_OK2DELETE_PART2', ' ausgewählte(n) Datei(en) dauerhaft vom Server entfernen möchten?');
define('JS_MESSAGE_NO_FILES_SELECTED', 'Es wurden keine Dateien zum Löschen ausgewählt; bitte versuchen Sie es erneut.');
define('JS_MESSAGE_CHOOSE_ACTION', 'Bitte wählen Sie eine Aktion, die mit der ausgewählten Datei ausgeführt werden soll.');

define('LAST_STATS_LEAD_IN', 'Statistiken für die zuletzt in der aktuellen Admin-Sitzung importierte Datei:');
define('LAST_STATS_FILE_NAME', 'Dateiname importieren:');
define('LAST_STATS_OPERATION', 'Bedienung:');
define('LAST_STATS_RECORDS_READ', 'Datensätze gelesen:');
define('LAST_STATS_RECORDS_INSERTED', 'Eingefügte Datensätze:');
define('LAST_STATS_RECORDS_UPDATED', 'Datensätze aktualisiert:');
define('LAST_STATS_WARNINGS', 'Warnungen:');
define('LAST_STATS_ERRORS', 'Fehler:');
define('LAST_STATS_PARSE_TIME', 'Zeit analysieren:');
define('LAST_STATS_MESSAGES_EXIST', 'Die folgenden Warnungen/Fehler wurden durch die obige Aktion erzeugt:');

define('DBIO_SELECT_ALL', 'Alle auswählen');
define('DBIO_SELECT_ALL_TITLE', 'Klicken Sie hier, um alle auszuwählen');
define('DBIO_UNSELECT_ALL', 'Alle abwählen');
define('DBIO_UNSELECT_ALL_TITLE', 'Klicken Sie hier, um die Auswahl aufzuheben');
