<?php
require __DIR__.'/vendor/autoload.php';

/* Mode/environment detection, needs improvement */
$mode = 'development';
if (array_key_exists('MODE', $_SERVER)) {
    $mode = $_SERVER['MODE'];
} else {
    if (file_exists(__DIR__.'/../env.production')) {
        $mode = 'production';
    } elseif (file_exists(__DIR__.'/../env.development')) {
        $mode = 'development';
    }
}

$app = new \Slim\Slim(array('mode' => $mode));

/* Include all configurations/environments */
$env = $app->environment();
foreach(glob(__DIR__.'/config/*.php') as $filename) {
    include $filename;
}

/* Include all server routes */
foreach(glob(__DIR__.'/routes/*.php') as $filename) {
    include $filename;
}

$app->run();