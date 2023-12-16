<?php

class Invoice
{
}

class InvoiceItem
{
}

class AchievementBadge
{
    public $title;
    public $description;
    public $points;

    public function awardTo($user)
    {
        // give badge to the user
    }
}
