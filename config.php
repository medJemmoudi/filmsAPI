<?php

use \Voodoo\VoodOrm;

$config = array(

	'APP_DB_HOST' => 'localhost',
	'APP_DB_USER' => 'root',
	'APP_DB_PASS' => '',
	'APP_DB_NAME' => 'gitworflow',
);

// run VoodOrm
$dsn = sprintf("mysql:host=%s;dbname=%s", $config['APP_DB_HOST'], $config['APP_DB_NAME']);
$pdo = new PDO($dsn, $config['APP_DB_USER'], $config['APP_DB_PASS']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$orm = new VoodOrm($pdo);