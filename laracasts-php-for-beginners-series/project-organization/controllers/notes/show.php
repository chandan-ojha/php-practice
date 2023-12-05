<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

$note = $db->query('SELECT * FROM notes where  id = :id', [
    'id' => $_GET['id']
])->findOrFail();

/*if (!$note) {
    abort();
}*/

/*if ($note['user_id'] != $currentUserId) {
    abort(Response::FORBIDDEN);
}*/

authorize($note['user_id'] === $currentUserId);

require "views/notes/show.view.php";
