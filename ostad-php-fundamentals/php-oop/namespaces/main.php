<?php

namespace Astronomy;

include 'planet.php';
include 'earth.php';


// $earth = new Planets\Earth(); //unqualified name
$planet = new \Astronomy\Planets\Planet(); //qualified name
$planet->getName();

// $earth = new Planets\Earth(); //unqualified name
$earth = new \Astronomy\Planets\Earth(); //qualified name
$earth->getName();
