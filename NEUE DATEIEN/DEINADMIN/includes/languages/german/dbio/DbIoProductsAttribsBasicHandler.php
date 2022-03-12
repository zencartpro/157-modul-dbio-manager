<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// -----
// Definiert den beschreibenden Text des Handlers
//
define('DBIO_PRODUCTSATTRIBSBASIC_DESCRIPTION', 'Dieses Berichtformat unterstützt den Import/Export der <em>grundlegenden</em> Produkt-Attributwerte. Der Bericht, indiziert durch die <b>Artikelnummer</b> des zugehörigen Produkts, enthält einen Datensatz pro Produkt/Produkt-Option-Paar mit den optionsspezifischen Werten, getrennt durch ^-Zeichen unter Verwendung der Standardsprache Ihres Shops.<br /><br /><b>Anmerkungen:</b><ol><li>Die Produkte Ihres Shops <em>müssen</em> alle eine eindeutige Artikelnummer für jede &quot;Import&quot;-Aktion haben, die erfolgreich abgeschlossen werden soll.</li><li>Alle Optionsnamen und Optionswertnamen <b>müssen bereits in Ihrer Datenbank existieren</b>, damit ein zugehöriger Attributdatensatz erfolgreich importiert werden kann.</li></ol>');
