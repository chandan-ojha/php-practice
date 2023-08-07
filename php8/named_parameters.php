<?php

class Invoice{
    public function __construct(private $description,private $total,private $date,private $paid){

    }
}

$invoice = new Invoice(
    description: 'Work on the project',
    total: 1000,
    date: new DateTime(),
    paid: true

);

var_dump($invoice);
