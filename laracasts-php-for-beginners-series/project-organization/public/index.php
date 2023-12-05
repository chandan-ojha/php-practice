<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

// require base_path('Database.php');
// require base_path('Response.php');

spl_autoload_register(function ($class) {
    require base_path("Core/{$class}.php");
});

require base_path('router.php');
