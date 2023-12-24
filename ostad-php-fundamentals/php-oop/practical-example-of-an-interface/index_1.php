<?php

class DistrictCollection implements IteratorAggregate
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function addDistrict($district)
    {
        array_push($this->districts, $district);
    }

    // function getDistricts()
    // {
    //     return $this->districts;
    // }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection();

$districts->addDistrict("Dhaka");
$districts->addDistrict("Chittagong");
$districts->addDistrict("Rajshahi");
$districts->addDistrict("Khulna");
$districts->addDistrict("Barisal");
$districts->addDistrict("Sylhet");
$districts->addDistrict("Rangpur");

// $_districts = $districts->getDistricts();

// foreach ($_districts as $district) {
//     echo $district . PHP_EOL;
// }

foreach ($districts as $district) {
    echo $district . PHP_EOL;
}
