<?php

require('functions.php');
// require('router.php');
require('Database.php');

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

$query = "select * FROM posts where id = :id";

// dd($query);

// $posts = $db->query("select * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);
