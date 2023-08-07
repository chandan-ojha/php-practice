<?php

class User
{
    public function __construct(protected $name)
    {
    }
}

class Plan
{
    public function __construct(protected string $name = 'monthly')
    {
    }
}

class Signup
{
    public function __construct
    (
        protected User $user,
        protected Plan $plan
    )
    {

    }
}

$user = new User('John Doe');
$plan = new Plan();
$signup = new Signup($user, $plan);

var_dump($signup);
