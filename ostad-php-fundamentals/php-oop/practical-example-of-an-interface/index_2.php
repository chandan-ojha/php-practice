<?php

class DistrictCollection implements IteratorAggregate, Countable
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

    function count(): int
    {
        return count($this->districts);
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
$districts->addDistrict("Mymensingh");

echo "Total Districts: " . count($districts) . PHP_EOL;
