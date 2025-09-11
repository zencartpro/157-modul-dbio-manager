<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2025, Vinos de Frutas Tropicales.
//
// last update: 2025-09-11 webchills
//
define('HEADING_TITLE', 'Database I/O (DbIo) Manager');

define('TEXT_ALL_ORDERS_STATUS_VALUES', 'Alle Werte');

define('TEXT_IS_EXPORT_ONLY', 'Der %s DbIo-Handler unterstützt keine Importaktion.');

define('TEXT_SCOPE_PUBLIC', 'Öffentlich');
define('TEXT_SCOPE_PRIVATE', 'Privat');

define('TEXT_FORMAT_CONFIG_INFO', 'Dieser Abschnitt zeigt die aktuellen Einstellungen, die den Betrieb des <em>DbIo Managers</em> beeinflussen.  Die Werte für <em>DbIo Einstellungen</em> können <a href="%s">hier</a> geändert werden.');
define('TEXT_DBIO_SETTINGS', 'DbIo Einstellungen');
define('TEXT_CSV_DELIMITER', 'CSV: Trennzeichen');
define('TEXT_CSV_ENCLOSURE', 'CSV: Einschlusszeichen');
define('TEXT_CSV_ESCAPE', 'CSV: Escape');
define('TEXT_CSV_ENCODING', 'CSV: Codierung');
define('TEXT_CSV_DATE_FORMAT', 'CSV: Import-Datumsformat');
define('TEXT_FILE_DEFAULT_SORT_ORDER', 'Standardmäßige Dateisortierreihenfolge');
define('TEXT_ALLOW_DUPLICATE_MODELS', 'Produkte: Doppelte Artikelnummern zulassen');
define('TEXT_AUTO_CREATE_CATEGORIES', 'Produkte: Kategorien automatisch erstellen');
define('TEXT_INSERT_REQUIRES_COMMAND', 'Produkte: Befehl für die Artikelerstellung erforderlich');
define('TEXT_MAX_EXECUTION', 'Maximale Ausführungszeit');
define('TEXT_SPLIT_RECORD_COUNT', 'Anzahl geteilter Datensätze');
define('TEXT_DEBUG_ENABLED', 'Debugging aktiviert');
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

define('TEXT_INSTRUCTIONS', 'Der <b><i>DbIo Manager</i></b> bietet <em>Handler</em>, die den Export und unter bestimmten Bedingungen auch den Import von Datenbankinformationen mithilfe einer CSV-Datei (Comma-Separated-Value) ermöglichen. Wählen Sie den zu verwendenden Handler aus der Dropdown-Liste unten aus, woraufhin die Funktionen dieses Handlers, z. B. Filter und/oder Optionen zur Anpassung von Vorlagen, angezeigt werden.<br><br>Weitere Informationen (englisch) finden Sie auf der <a href="https://github.com/lat9/dbio/wiki" target="_blank" rel="noreferrer noopener">Wiki-Page</a> zum Plugin.');

define('DBIO_BUTTON_DELETE', 'Löschen');
define('DBIO_BUTTON_DELETE_TITLE', 'Klicken Sie hier, um die aktuell ausgewählten Dateien vom Server zu löschen.');
define('DBIO_BUTTON_GO', 'Weiter');
define('DBIO_BUTTON_GO_TITLE', 'Klicken Sie hier, um die ausgewählte Aktion für die unten ausgewählte Datei auszuführen.');
define('TEXT_AUTO_DOWNLOAD', 'Export sofort nach der Erstellung herunterladen');
define('BUTTON_EXPORT', 'Exportieren');
define('BUTTON_EXPORT_TITLE', 'Klicken Sie hier, um die mit dem ausgewählten DbIo-Bericht verbundenen Informationen zu exportieren.');
define('BUTTON_UPLOAD', 'Hochladen');
define('BUTTON_UPLOAD_TITLE', 'Klicken Sie hier, um die ausgewählte Datei hochzuladen.');

define('TEXT_FILE_ACTION_DELETE_INSTRUCTIONS', 'Sie können eine oder mehrere der folgenden Dateien vom Server entfernen. Wählen Sie die zu löschenden Dateien aus und klicken Sie dann auf die Schaltfläche Löschen.');

define('TEXT_SHOW_HIDE_FILTERS', 'Klicken Sie hier, um die Filter für <strong>alle</strong> Handler anzuzeigen (oder auszublenden). Wenn die Filter <em>ausgeblendet</em> sind, gelten sie nicht für den aktuellen Export.');
define('TEXT_BUTTON_MANAGE_CUSTOMIZATION', 'Vorlagen verwalten');
define('LABEL_CHOOSE_CUSTOMIZATION', 'Vorlage auswählen:');
define('TEXT_ALL_FIELDS', 'Alle Felder');
define('TEXT_ALL_FIELDS_DESCRIPTION', 'Der aktuelle Export umfasst alle Felder, die vom aktuellen Handler unterstützt werden.');

define('DBIO_FORM_SUBMISSION_ERROR', 'Es fehlten einige Werte für die Übermittlung Ihres Formulars. Bitte versuchen Sie es erneut.');

define('TEXT_NO_DBIO_FILES_AVAILABLE', 'Für den Handler <em>%s</em> sind keine Import-/Exportdateien verfügbar.');
define('ERROR_FILENAME_MISMATCH', 'Bitte wählen Sie eine Upload-Datei, die mit dem aktuellen Handler (%1$s) verknüpft ist, z.B. <em>dbio.%1$s.*.csv</em>.');
define('TEXT_UPLOAD_FOR_IMPORT_ONLY', 'Der Handler <em>%s</em> unterstützt keinen Dateiimport, daher wurde das Hochladen von Dateien deaktiviert.');
define('TEXT_CHOOSE_ACTION', 'Wählen Sie die Aktion aus, die für die unten ausgewählte Datei durchgeführt werden soll:');
define('TEXT_FILE_UPLOAD_INSTRUCTIONS', 'Sie können auch eine Datei von Ihrem Computer (nur Dateiendungen %2$s) zum Importieren mit dem <em>DbIo Manager</em> hochladen. Wählen Sie eine Datei aus, die vom aktuellen Handler (%1$s) verarbeitet werden kann, z. B. <em>dbio.%1$s.*.csv</em>, und klicken Sie dann auf die Schaltfläche Hochladen.');
define('TEXT_CHOOSE_FILE', 'Ihre Datei:');

define('DBIO_ACTION_PLEASE_SELECT', 'Bitte auswählen');
define('DBIO_ACTION_SPLIT', 'Teilen');
define('DBIO_ACTION_DELETE', 'Löschen');
define('DBIO_ACTION_FULL_IMPORT', 'Importieren (vollständig)');
define('DBIO_ACTION_CHECK_IMPORT', 'Importieren (nur prüfen)');
define('DBIO_ACTION_DOWNLOAD', 'Herunterladen');

define('TEXT_FILE_ACTION_INSTRUCTIONS',
'Die folgenden dateibezogenen Aktionen werden unterstützt, können jedoch durch den aktuellen <em>Handler</em> eingeschränkt sein:' . PHP_EOL .
'<ol>' . PHP_EOL .
' <li><strong>' . DBIO_ACTION_SPLIT . '</strong>: Teilt eine CSV-Datei in mehrere Dateien auf, wobei die aktuellen Einstellungen Ihres Shops für die <b>Anzahl der aufzuteilenden Datensätze</b> verwendet werden, sodass Sie große Exporte in Abschnitten herunterladen können.</li>' . PHP_EOL .
' <li><strong>' . DBIO_ACTION_DOWNLOAD . '</strong>: Lädt die ausgewählte Datei (entweder .csv oder .log) zur Überprüfung auf Ihren Computer herunter.</li>' . PHP_EOL .
' <li><strong>' . DBIO_ACTION_FULL_IMPORT . '</strong>: Diese Aktion, die nur aktiviert ist, wenn der ausgewählte Handler Importe unterstützt, verwendet die ausgewählte .csv-Datei, um Änderungen an Ihrer Datenbank vorzunehmen. </li>' . PHP_EOL .
' <li><strong>' . DBIO_ACTION_CHECK_IMPORT . '</strong>: Diese Aktion, die nur aktiviert ist, wenn der ausgewählte Handler Importe unterstützt, gibt Ihnen die Möglichkeit, die Datenbankaktionen zu überprüfen, die bei einem „vollständigen” Import stattfinden würden; es werden keine Datenbankänderungen vorgenommen. Nach Abschluss wird eine Protokolldatei erstellt, die die Analyse von <em>DbIo</em> enthält. </li>' . PHP_EOL .
'</ol>' . PHP_EOL .
'Wählen Sie eine <em>Aktion</em> und eine zugehörige Datei aus und klicken Sie dann auf die Schaltfläche Weiter.' . PHP_EOL
);

define('HEADING_CHOOSE_FILE', 'Datei auswählen');
define('HEADING_FILENAME', 'Dateiname');
define('HEADING_BYTES', 'Bytes');
define('HEADING_LAST_MODIFIED', 'Datum der letzten Änderung');
define('HEADING_DELETE', 'Löschen?');

define('TEXT_SORT_NAME_ASC', 'Klicken Sie hier, um nach Dateinamen in aufsteigender Reihenfolge zu sortieren');
define('TEXT_SORT_NAME_DESC', 'Klicken Sie hier, um nach Dateinamen in absteigender Reihenfolge zu sortieren');
define('TEXT_SORT_SIZE_ASC', 'Klicken Sie hier, um nach Dateigröße in aufsteigender Reihenfolge zu sortieren');
define('TEXT_SORT_SIZE_DESC', 'Hier klicken, um nach Dateigröße absteigend zu sortieren');
define('TEXT_SORT_DATE_ASC', 'Hier klicken, um nach Dateidatum aufsteigend zu sortieren');
define('TEXT_SORT_DATE_DESC', 'Hier klicken, um nach Dateidatum absteigend zu sortieren');

define('TEXT_VIEW_STATS', 'Importdetails anzeigen');
define('TEXT_IMPORT_LAST_STATS', 'Klicken Sie hier, um die Details zum letzten DbIo-Import anzuzeigen');

define('ERROR_CHOOSE_FILE_ACTION', 'Bitte wählen Sie die Aktion aus, die für die Datei mit dem Namen „%s“ durchgeführt werden soll.');

define('SUCCESSFUL_FILE_IMPORT', 'Der DbIo-Import aus der Datei „%1$s“ wurde erfolgreich abgeschlossen. %2$u Datensätze wurden verarbeitet.');
define('CAUTION_FILE_IMPORT', 'Der DbIo-Import aus der Datei „%1$s“ wurde mit %2$u Fehlern und %3$u Warnungen abgeschlossen. %4$u Datensätze wurden eingefügt oder aktualisiert.');

define('ERROR_CANT_DELETE_FILE', 'Die angeforderte Datei (%s) wurde nicht gelöscht; sie wurde nicht gefunden oder ihre Berechtigungen sind nicht richtig eingestellt.');
define('SUCCESS_FILE_DELETED', 'Die angeforderte Datei (%s) wurde erfolgreich gelöscht.');

define('ERROR_CANT_SPLIT_FILE_OPEN_ERROR', 'Die angeforderte Datei (%s) wurde nicht geteilt; sie konnte nicht geöffnet werden.');
define('ERROR_CREATING_SPLIT_FILE', 'Während des Teilungsvorgangs ist ein Fehler aufgetreten. Die Datei (%s) konnte nicht erstellt werden.');
define('ERROR_WRITING_SPLIT_FILE', 'Beim Schreiben des Datensatzes #%2$u der geteilten Datei (%1$s) ist ein Fehler aufgetreten.');
define('ERROR_SPLIT_INPUT_NOT_AT_EOF', 'Beim Lesen der geteilten Eingabedatei (%s) ist ein unbekannter Fehler aufgetreten. Der Vorgang wurde abgebrochen.');
define('WARNING_FILE_TOO_SMALL_TO_SPLIT', 'Die Datei (%1$s) enthält zu wenige Datensätze (%2$u), um sie zu teilen.');
define('FILE_SUCCESSFULLY_SPLIT', 'Die Datei (%1$s) wurde erfolgreich in %2$u Teile geteilt.');

define('ERROR_FILE_IS_EXPORT_ONLY', 'Die Datei (%s) wurde nicht importiert. Sie ist mit einem <em>nur für den Export</em> bestimmten Bericht verknüpft.');
define('ERROR_UNKNOWN_TEMPLATE', 'Die von Ihnen angeforderte DbIo-Vorlage konnte nicht gefunden werden. Bitte versuchen Sie es erneut.');
define('DBIO_MGR_EXPORT_SUCCESSFUL', 'Ihr <em>%1$s</em>-Export wurde erfolgreich in %2$s abgeschlossen, wobei %3$u Datensätze erstellt wurden.');

define('ERROR_NO_FILE_TO_UPLOAD', 'Es wurde keine Datei zum Hochladen ausgewählt. Bitte versuchen Sie es erneut.');
define('FILE_UPLOADED_SUCCESSFULLY', 'Die Datei <em>%s</em> wurde erfolgreich hochgeladen.');

define('DBIO_CANT_OPEN_FILE', 'Download fehlgeschlagen, die Datei %s existiert nicht.');

define('JS_MESSAGE_OK2DELETE_PART1', 'Möchten Sie die '); //-Die Anzahl der ausgewählten Dateien wird zwischen diesen beiden Meldungen eingefügt
define('JS_MESSAGE_OK2DELETE_PART2', ' ausgewählten Datei(en) dauerhaft vom Server entfernen?');
define('JS_MESSAGE_NO_FILES_SELECTED', 'Es wurden keine Dateien zum Löschen ausgewählt; bitte versuchen Sie es erneut.');
define('JS_MESSAGE_CHOOSE_ACTION', 'Bitte wählen Sie eine Aktion aus, die für die ausgewählte Datei durchgeführt werden soll.');

define('LAST_STATS_LEAD_IN', 'Statistiken für die zuletzt in der aktuellen Admin-Sitzung importierte Datei:');
define('LAST_STATS_FILE_NAME', 'Importierte Datei:');
define('LAST_STATS_OPERATION', 'Vorgang:');
define('LAST_STATS_RECORDS_READ', 'Gelesene Datensätze:');
define('LAST_STATS_RECORDS_INSERTED', 'Eingefügte Datensätze:');
define('LAST_STATS_RECORDS_UPDATED', 'Aktualisierte Datensätze:');
define('LAST_STATS_WARNINGS', 'Warnungen:');
define('LAST_STATS_ERRORS', 'Fehler:');
define('LAST_STATS_PARSE_TIME', 'Parsing-Zeit:');
define('LAST_STATS_MESSAGES_EXIST', 'Die folgenden Warnungen/Fehler wurden durch die oben genannte Aktion generiert:');

define('DBIO_SELECT_ALL', 'Alle auswählen');
define('DBIO_SELECT_ALL_TITLE', 'Klicken Sie hier, um alle auszuwählen');
define('DBIO_UNSELECT_ALL', 'Alle abwählen');
define('DBIO_UNSELECT_ALL_TITLE', 'Klicken Sie hier, um die Auswahl aufzuheben');