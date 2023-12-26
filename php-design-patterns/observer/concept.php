<?php

/** Observer pattern is used when there is one-to-many relationship between objects such as if one object is modified, 
its depenedent objects are to be notified automatically. **/

class Human
{
};

$hasan = new Human(); //observable
$driver = new Human(); //observer
$hasanParents = new Human(); //listener

interface Observable
{
    public function attach(Observer $observer);
    public function notify($info, $event);
}

interface Observer
{
    public function update(Observable $observable, $info, $event);
}

class BankAccount implements Observable
{
    private $observers = [];

    function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function notify($info, $event)
    {
        foreach ($this->observers as $observer) {
            // echo get_class($observer) . "\n";
            $observer->update($this, $info, $event);
        }
    }

    function deposit($money)
    {
        $this->notify($money, 'MONEY_DEPOSIT');
    }

    function withdraw($money)
    {
        $this->notify($money, 'MONEY_WITHDRAW');
    }
}

class SMSNotifier implements Observer
{
    function update(Observable $observable, $info, $event)
    {
        printf("SMS: %s %s\n", $info, $event);
    }
}

$bankAccount = new BankAccount();
$smsNotifier = new SMSNotifier();

$bankAccount->attach($smsNotifier);

$bankAccount->deposit(1000);
$bankAccount->withdraw(500);
