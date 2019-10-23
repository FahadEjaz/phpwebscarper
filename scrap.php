<?php

require __DIR__ . '/App/App.php';

if (PHP_SAPI === 'cli') {
    $longopts = ["plpurl:"];
    $options = getopt('', $longopts);
    $app = new App($argv,$options);
    $app->run();
} else {
    die("Access denied !");
}
