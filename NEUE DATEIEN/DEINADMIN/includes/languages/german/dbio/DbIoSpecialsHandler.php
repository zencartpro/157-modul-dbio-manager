<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// -----
// Definiert den beschreibenden Text des Handlers
//
define('DBIO_SPECIALS_DESCRIPTION', 'Dieses Bericht-Format unterstützt den Import/Export aller Felder innerhalb der Tabelle <code>specials</code>, sowie der Informationen <em>Specials Products</em>..<br /><br /><b>Anmerkungen</b><ol><li> Damit ein Import erfolgreich ist, müssen mindestens die Spalten <code>v_products_id</code> und <code>v_specials_new_products_price</code> vorhanden sein. </li><li>Der bei einem Import gelieferte <code>v_products_id</code> muss einem gültigen Produkt zugeordnet sein.</li><li>Der Wert von <code>v_specials_new_products_price</code> kann entweder ein <em>spezifischer</em> Verkaufspreis, z.B. <em>5.99</em>, oder ein prozentualer Abschlag, z.B. <em>7.5%</em>, sein.  Der Sonderpreis für einen prozentualen Abschlag wird anhand des aktuellen Grundpreises des Produkts berechnet.</li><li>Sofern nicht <b><em>Module::Bestellsumme::Geschenkgutscheine</em></b> aktiviert und so konfiguriert ist, dass Geschenkgutscheine auf Sonderangebote gesetzt werden können, können solche Produkte nicht auf Sonderangebote gesetzt werden.</li><li>Der Sonderpreis eines Produkts kann aus der Datenbank entfernt werden, indem Sie eine Spalte <code>v_dbio_command</code> mit <b>ENTFERNEN</b> für eine bestimmte product_id einfügen.</li></ol>');
