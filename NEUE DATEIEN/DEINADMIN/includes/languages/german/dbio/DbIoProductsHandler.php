<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// -----
// Definiert den beschreibenden Text des Handlers
//
define ('DBIO_PRODUCTS_DESCRIPTION', 'Dieses Berichtformat unterstützt den Import/Export von <b>allen</b> Feldern innerhalb der Tabellen &quot;products&quot; und &quot;products_description&quot; der grundlegenden Produktinformationen. Sie können die zur Verfügung gestellten Filter verwenden, um die Ausgabe dieses Berichts auf der Grundlage des Status, des Herstellers oder des Kategoriebaums eines Produkts einzuschränken.');

// -----
// Definitionen, die für die Exportfilter verwendet werden, werden unter Werkzeuge->Datenbank-E/A-Manager angezeigt
//
define ('DBIO_PRODUCTS_FILTERS_LABEL', 'Filtern Sie die Ausgabe nach ausgewählten Herstellern oder Kategorien. Aktivieren/Deaktivieren Sie mehrere Optionen mit der Strg-Taste + Klick; lassen Sie alle Optionen deaktiviert, um alle Hersteller und Kategorien auszugeben.');
define ('DBIO_PRODUCTS_MANUFACTURERS_LABEL', 'Hersteller einschränken:');
define ('DBIO_PRODUCTS_CATEGORIES_LABEL', 'Kategorien einschränken:');
define ('DBIO_PRODUCTS_STATUS_LABEL', 'Produkt-Status:');
define ('DBIO_PRODUCTS_TEXT_STATUS_ENABLED', 'Nur aktiviert');
define ('DBIO_PRODUCTS_TEXT_STATUS_DISABLED', 'Nur deaktiviert');
define ('DBIO_PRODUCTS_TEXT_STATUS_ALL', 'Alle Status');
