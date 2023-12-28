<?php

require_once('singleton.php');
require_once('db.php');
require_once('logger.php');

$db = DB::getInstance();
$logger = Logger::getInstance();

var_dump($db);

var_dump($logger);
