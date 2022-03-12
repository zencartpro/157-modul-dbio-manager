<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2017, Vinos de Frutas Tropicales.
//

// -----
// Definiert den beschreibenden Text des Handlers.
//
define ('DBIO_ORDERS_DESCRIPTION', 'Dieses Bericht-Format unterstützt <em>nur Export</em> aller Felder innerhalb der Tabelle &quot;orders&quot;table.  Die Informationen <em>enthalten nicht</em> die zugehörigen Produkte oder deren Attribute. Sie können die bereitgestellten Filter verwenden, um die Ausgabe dieses Berichts auf der Grundlage des Status des Auftrags, eines Bereichs von Auftrags-ID-Werten oder eines Datumsbereichs einzuschränken.');

// -----
// Definitionen, die für die Exportfilter verwendet werden, werden unter Werkzeuge->Datenbank-E/A-Manager angezeigt
//
define ('DBIO_ORDERS_ORDERS_STATUS_LABEL', 'Wählen Sie die Status der Aufträge aus, die in den Export einbezogen werden sollen:');
define ('DBIO_ORDERS_ORDERS_ID_RANGE_LABEL', 'Wählen Sie den Bereich der zu exportierenden Auftrags-ID-Werte aus.  Lassen Sie beide Felder leer, um <b>alle</b> Auftrags-ID-Werte auszuwählen.');
define ('DBIO_ORDERS_ORDERS_ID_MIN_LABEL', 'Minimum (einschließlich):');
define ('DBIO_ORDERS_ORDERS_ID_MAX_LABEL', 'Maximum (einschließlich):');

define ('DBIO_ORDERS_ORDERS_DATE_RANGE_LABEL', 'Wählen Sie den Bereich der zu exportierenden Auftragsdaten aus.  Geben Sie die Daten im Format JJJJJ-MM-TT ein.  Lassen Sie beide Felder leer, um <b>alle</b> Auftragsdaten auszuwählen.');
define ('DBIO_ORDERS_ORDERS_DATE_MIN_LABEL', 'Start:');
define ('DBIO_ORDERS_ORDERS_DATE_MAX_LABEL', 'Ende:');
