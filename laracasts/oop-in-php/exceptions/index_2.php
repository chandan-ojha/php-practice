<?php

class TeamException extends Exception
{
    // protected $message = "You may not add more than 3 members";

    public static function fromTooManyMembers()
    {
        return new static("You may not add more than 3 members");
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}


class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {
        $team = new Team; // has maximum 3 members

        try {
            $team->add(new Member('John Doe'));
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('Chandan Ojha'));
            $team->add(new Member('Rayhan Uddin'));
        } catch (TeamException $e) {
            var_dump($e->getMessage());
        }
    }
}

(new TeamMembersController)->store();
