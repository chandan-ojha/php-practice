<?php
spl_autoload_register(function ($class) {
    $file = $class . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("{$class} not found");
    }
});

try {
    $test1 = new Test1();
    echo "\n";
    $test2 = new Test2();
} catch (Exception $e) {
    echo $e->getMessage();
}
