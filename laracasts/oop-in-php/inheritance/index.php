<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

class SpecialtyCoffeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump("Brewing a latte");
    }
}

//(new SpecialtyCoffeMaker())->brewLatte();

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // return array_sum(array_map(function ($item) use ($key) {
        //     return $item->$key;
        // }, $this->items));

        // return array_sum(array_map(fn ($item) => $item->$key, $this->items));

        return array_sum(array_column($this->items, $key));
    }
}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some Video 1', 100),
    new Video('Some Video 2', 200),
    new Video('Some Video 3', 300),
]);

// echo $videos->length();

// class Post extends Model
// {
// }

class AchievementType
{
    public function name()
    {
        //Achievement type
    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {
    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
    }

    public function name()
    {
        return 'Welcome to abroad';
    }
}
