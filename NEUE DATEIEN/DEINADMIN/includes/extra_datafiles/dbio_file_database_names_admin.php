<?php
// -----
// Part of the DataBase I/O Manager (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2026, Vinos de Frutas Tropicales.
//
define ('DIR_FS_DBIO', DIR_FS_ADMIN . 'dbio/');
define ('DIR_FS_DBIO_LOGS', DIR_FS_DBIO . 'logs');

define ('DIR_FS_DBIO_CLASSES', DIR_FS_ADMIN . DIR_WS_CLASSES . 'dbio/');
define ('DIR_FS_DBIO_LANGUAGES', DIR_FS_ADMIN . DIR_WS_LANGUAGES);

// -----
// The name of the common dbIO messages file, present in /includes/languages/{current_language}/dbio
//
define ('FILENAME_DBIO_MESSAGES', 'dbio_messages.php');

// -----
// Database tables.
//
define ('TABLE_DBIO_STATS', DB_PREFIX . 'dbio_stats');
define ('TABLE_DBIO_REPORTS', DB_PREFIX . 'dbio_reports');
define ('TABLE_DBIO_REPORTS_DESCRIPTION', DB_PREFIX . 'dbio_reports_description');

// -----
// Database tables for POSM integration if POSM is not installed
//
define ('TABLE_PRODUCTS_OPTIONS_STOCK', DB_PREFIX . 'products_options_stock');
define ('TABLE_PRODUCTS_OPTIONS_STOCK_ATTRIBUTES', DB_PREFIX . 'products_options_stock_attributes');
define ('TABLE_PRODUCTS_OPTIONS_STOCK_NAMES', DB_PREFIX . 'products_options_stock_names');

// -----
// Admin-only values ...
//
define ('FILENAME_DBIO_MANAGER', 'dbio_manager');
define ('FILENAME_DBIO_CUSTOMIZE', 'dbio_customize');