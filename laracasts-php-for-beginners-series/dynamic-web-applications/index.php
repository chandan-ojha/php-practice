<?php

require('functions.php');
// require('router.php');
require('Database.php');

$config = require('config.php');
$db = new Database($config['database']);

// $posts = $db->query("select * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query("select * FROM posts")->fetchAll();

dd($posts);
