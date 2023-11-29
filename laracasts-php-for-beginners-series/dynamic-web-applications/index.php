<?php

require('functions.php');
// require('router.php');

//connect to MySQL Database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * FROM posts where id = 1");

$statement->execute();

//all post
// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }

//single post
$post = $statement->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['title'] . "</li>";
