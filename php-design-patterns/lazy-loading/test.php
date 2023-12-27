<?php

include 'user.php';

//lazy loading - the posts are not loaded until they are needed (accessed) for the first time

//eager loading - the posts are loaded when the user is created


$user = new User();

var_dump($user);

// var_dump($user->getPosts());

var_dump($user->posts);
