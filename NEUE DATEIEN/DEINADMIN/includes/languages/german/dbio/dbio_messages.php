<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// ----
// Diese Definitionen werden sowohl von dieser Sequenzierungsklasse als auch von den berichtsspezifischen Handlern verwendet.
//
define ('DBIO_INVALID_CHAR_REPLACEMENT', 167); //-Verwenden Sie das "Abschnittssymbol" (??) als Ersatz für ungültige Zeichen

// -----
// Nachrichten, die von der DbIo-Klasse verwendet werden.
//
define ('DBIO_FORMAT_TEXT_NO_DESCRIPTION', 'Dieser DbIo-Handler hat seine Beschreibung nicht zur Verfügung gestellt.');
define ('DBIO_MESSAGE_NO_HANDLERS_FOUND', 'cEs wurden keine DbIo-Handler gefunden; eine Reportgenerierung ist nicht möglich.');
define ('DBIO_FORMAT_MESSAGE_NO_HANDLER', 'Fehlende DbIo-Handler-Klassendatei %s.');
define ('DBIO_FORMAT_MESSAGE_NO_CLASS', 'Fehlende DbIo-Handler-Klasse mit dem Namen "%1$s" in der Handler-Datei %2$s.');
define ('DBIO_MESSAGE_EXPORT_NOT_INITIALIZED', 'Export abgebrochen: Kein Handler zuvor angegeben.');
define ('DBIO_MESSAGE_IMPORT_NOT_INITIALIZED', 'Import abgebrochen: Kein Handler zuvor angegeben.');
define ('DBIO_FORMAT_MESSAGE_EXPORT_NO_FP', 'Export abgebrochen. Fehlgeschlagene Erstellung der Ausgabedatei %s.');
define ('DBIO_EXPORT_NOTHING_TO_DO', 'DbIo Export: Keine Datensätze entsprachen den angeforderten Kriterien.');
define ('DBIO_FORMAT_MESSAGE_IMPORT_FILE_MISSING', 'Import abgebrochen:  Fehlende Eingabedatei (%s).');
define ('DBIO_WARNING_ENCODING_ERROR', 'DbIo-Import: Konnte die Eingaben für ' . CHARSET . ' nicht kodieren.');
define ('DBIO_ERROR_NO_HANDLER', 'DbIo-Ausfuhr. Es sind keine DbIo-Handler konfiguriert.');
define ('DBIO_ERROR_EXPORT_NO_LANGUAGE', 'DbIo-Ausfuhr.  Der Sprachcode "%s" ist für den Shop nicht konfiguriert.');
define ('DBIO_ERROR_NO_PHP_MBSTRING', 'Für die DbIo muss die Erweiterung &quot;php-mbstring&quot; geladen werden; wenden Sie sich an Ihren Internetanbieter und bitten Sie ihn, diese Erweiterung zu installieren.');
define ('DBIO_ERROR_MISSING_DIRECTORY', 'Das Verzeichnis (%s) wurde nicht gefunden; keine DbIo-Operationen sind möglich, bis dies korrigiert ist.');
define ('DBIO_ERROR_DIRECTORY_NOT_WRITABLE', "Das Verzeichnis (%s) ist nicht beschreibbar; es sind keine DbIo-Operationen möglich, bis dies korrigiert ist.");

// -----
// Von der Klasse DbIoHandler verwendete Nachrichten
//
define ('DBIO_MESSAGE_IMPORT_MISSING_HEADER', 'Import abgebrochen: Fehlende Header-Informationen für die Eingabedatei.');
define ('DBIO_FORMAT_MESSAGE_IMPORT_MISSING_KEY', 'Import abgebrochen: Fehlende Schlüsselspalte (%s).');
define ('DBIO_TEXT_ERROR', 'Fehler: ');  //-Wird verwendet, um Verarbeitungsmeldungen mit Fehlern voranzustellen
define ('DBIO_MESSAGE_KEY_CONFIGURATION_ERROR', 'Es liegt ein Fehler in der Schlüsselkonfiguration für den ausgewählten Handler vor; der Handler kann nicht verwendet werden.');
define ('DBIO_ERROR_HANDLER_MISSING_FUNCTION', 'Dem aktuellen Handler (%1$s) fehlt die (erforderliche) "%2$s"-Funktion; der Import ist nicht erlaubt.');
define ('DBIO_ERROR_HEADER_MISSING_KEYS', 'In der aktuellen Importdatei fehlen diese (%s) erforderlichen Spalten; der Import ist nicht erlaubt.');
define ('DBIO_ERROR_HANDLER_NO_COMMANDS', 'Die aktuelle Import-Datei verwendet DbIo-Befehle, aber der Handler unterstützt sie nicht; der Import ist nicht erlaubt.');
define ('DBIO_ERROR_HANDLER_VERSION_MISMATCH', 'Es gibt eine Versionsabweichung für den ausgewählten Handler (%1$s); der Handler kann nicht verwendet werden.');
define('DBIO_ERROR_MULTIPLE_COMMAND_COLUMNS', 'Import abgebrochen: Verschiedene v_dbio_command Spalten in der Input Datei gefunden.');
