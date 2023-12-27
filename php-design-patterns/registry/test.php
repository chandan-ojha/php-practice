<?php

include 'registry.php';
include 'logger.php';

Registry::set('logger', new Logger());

$logger = Registry::get('logger');

$logger->log('Practice Registry Design Pattern');
