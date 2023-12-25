<?php

class MotorCycle
{
    private $parameters;

    public function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __isset($name)
    {
        if (!isset($this->parameters[$name])) {
            echo "{$name} is not found\n";
            return false;
        }
        return true;
    }

    function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __get($name)
    {
        echo $this->parameters[$name];
    }

    function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    function __call($name, $arguments)
    {
        if ('run' == $name) {
            if ($arguments) {
                echo "I am running at {$arguments[0]} kmph\n";
            } else {
                echo "I am running\n";
            }
        }
    }

    static function __callStatic($name, $arguments)
    {
        if ('wash' == $name) {
            echo "Washing\n";
        }
    }
}

$pulsar = new MotorCycle('150cc', '16ltr', '60kmph');

$pulsar->displacement = '135cc';

if (isset($pulsar->tiresize)) {
    echo "Found\n";
} else {
    echo "Not Found\n";
}

unset($pulsar->mileage);

$pulsar->run(5);

MotorCycle::wash();
