<?php

include 'post.php';

class User
{
    private $posts = null;

    public function __construct()
    {
        // $this->posts = $this->loadPosts(); //eager loading
    }

    //lazy loading

    /*public function getPosts()
    {
        if (null == $this->posts) {
            $this->posts = $this->loadPosts();
        }

        return $this->posts;
    }*/

    public function __get($memberName)
    {
        if ('posts' == $memberName) {
            $this->posts = $this->loadPosts();

            return $this->posts;
        }
    }

    protected function loadPosts()
    {
        return [
            new Post('Post 1'),
            new Post('Post 2'),
            new Post('Post 3'),
        ];
    }
}
