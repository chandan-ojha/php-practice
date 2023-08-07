<?php declare(strict_types=1);

class User{
    /*public function makeFriendsWith(User|string $user)
    {
        var_dump("Yay friends");
    }*/

    public function cancel(bool | string $immediate = false)
    {
        var_dump($immediate);
    }

    public function cancelNow()
    {
        $this->cancel(true);
    }

    public function cancelOn(string|DateTime $when)
    {
        $this->cancel($when);
    }

}

/*$joe = new User();
$sam = new User();

$joe->makeFriendsWith($sam);*/

$joe = new User();
/*$joe->cancel(true);
$joe->cancel(false);

$joe->cancel('next week');*/

$joe->cancel();
$joe->cancelNow();
$joe->cancelOn('thursday');