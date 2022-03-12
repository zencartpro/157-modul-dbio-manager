<?php
// -----
// Teil des DataBase I/O Manager (aka DbIo) Plugins, erstellt von Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// -----
// Definiert den beschreibenden Text des Handlers
//
define('DBIO_PRODUCTSDISCOUNTQUANTITY_DESCRIPTION', 'Dieses Berichtsformat unterstützt den Import/Export von Feldern innerhalb der Tabellen <code>products</code> und <code>products_discount_quantity</code>, die mit den Mengenrabattinformationen eines Produkts verknüpft sind.  Der Export-Datensatz eines Produktes enthält sein <code>v_products_model</code> als Referenzwert, wird aber nicht für den Import verwendet. Ein passender Importdatensatz basiert <em>allein</em> auf der Spalte <code>v_products_id</code> eines Datensatzes.<br /><br />Die Informationen zum <em>Mengenrabatt</em> jedes Produkts werden, falls angegeben, als <code>q:p[;q:p]...</code> formatiert, wobei <b>q</b> eine <em>einzigartige</em> Produktmenge ist, die einen <b>p</b> Rabattpreis erzielt.<br /><br />Der <code>products_discount_type</code> Wert eines Produktes kann einer der folgenden Werte sein <ol start="0"><li><b>Keine</b>: Kein Rabatt; alle definierten Rabattmengen werden entfernt.</li><li><b>Prozentsatz</b>: Der <em>Preis</em> ist ein prozentualer Rabatt.</li><li><b>Aktueller Preis</b>: Der <em>Preis</em> ist der tatsächlich ermäßigte Preis.</li><li><b>Betrag aus</b>: Der angegebene <em>Preis</em> ist der Festbetragsrabatt.</li></ol><br />Der <code>products_discount_type_from</code> Wert eines Produkts kann einer der folgenden Werte sein <ol start="0"><li><b>Preis</b>: Jeder <em>Prozentsatz</em> oder <em>Abschlagsbetrag</em>-Rabatt wird vom &quot;normalen&quot; Preis des Produktes abgezogen.</li><li><b>Speziell</b>: Jeder Rabatt als <em>Prozentsatz</em> oder <em>Betragsangebot</em> wird vom Preis des Produkts &quot;speziell&quot; abgezogen.</li></ol>');
