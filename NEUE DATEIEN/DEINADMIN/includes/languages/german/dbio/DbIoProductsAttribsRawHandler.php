<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// -----
// Definiert den beschreibenden Text des Handlers
//
define('DBIO_PRODUCTSATTRIBSRAW_DESCRIPTION', 'Dieses Report-Format unterstützt den Import/Export von <b>allen</b> Feldern innerhalb der Tabellen <code>products_attributes</code> und <code>products_attributes_download</code>, so dass Sie Informationen über die Produktattribute Ihres Shops hinzufügen oder ändern können. Verwenden Sie die Spalte <code>v_dbio_command</code>, die auf <b>ENTFERNEN</b> gesetzt ist, um ein Option/Wert-Paar aus einem Produkt zu entfernen.<br /><br /> Eine Zeile in der CSV-Datei entspricht einem einzelnen produktspezifischen Attribut.  Alle Produkt-Options- und Produkt-Optionswert-Einträge müssen bereits in der Datenbank vorhanden sein, damit ein erfolgreicher Import der attributbezogenen Informationen möglich ist.<br /><br />Der Export enthält den Namen jeder Option und jedes Optionswerts, <em>in der Standardsprache Ihres Shops</em>, um die Ausgabe etwas leichter lesbar zu machen.  Diese Werte werden nicht für eine Importaktion verwendet.');
