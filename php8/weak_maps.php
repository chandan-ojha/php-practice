<?php

/*$map = new WeakMap();

$obj = new stdClass();

$store = new SplObjectStorage();

$store[$obj] = 'foobar';

var_dump($store);
unset($obj);
var_dump($store->current());*/

interface Event{}

class SomeEvent implements Event{}
class AnotherEvent implements Event{}

class Dispatcher{
    protected WeakMap $dispatchCount;

    public function __construct()
    {
        $this->dispatchCount = new WeakMap();
    }
    public function dispatch(Event $event)
    {
        $this->incrementDispatches($event);
    }

    /**
     * @param Event $event
     * @return void
     */
    public function incrementDispatches(Event $event): void
    {
        $this->dispatchCount[$event] ??= 0;

        /*if (!isset($this->dispatchCount[$event])) {
            $this->dispatchCount[$event] = 0;
        }*/

        $this->dispatchCount[$event]++;
    }
}

$dispatcher = new Dispatcher();
$event = new SomeEvent();

$dispatcher->dispatch($event);
$dispatcher->dispatch($event);
$dispatcher->dispatch($event);

$anotherEvent = new AnotherEvent();
$dispatcher->dispatch($anotherEvent);

var_dump($dispatcher);


