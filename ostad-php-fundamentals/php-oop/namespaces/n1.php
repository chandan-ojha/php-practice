<?php

namespace Project;

include 'c1.php';
include 'c2.php';

use \Project\Motorcycles\Bike as Pulsar;

$b = new Bike();
$b->getName();

$p = new Pulsar();
$p->getName();
