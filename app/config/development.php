<?php
$app->configureMode('development', function() use ($app, $env) {
    $env['CLIENT'] = array(
        'BASE' => 'http://localhost/',
        'ASSETS' => 'http://localhost/assets/',
        'API' => 'http://localhost/api/'
    );

    $env['ROOT'] = __DIR__.'/../../';
    $env['APP'] = $env['ROOT'].'app/';
    $env['WEB'] = $env['ROOT'].'public_html/';
    $env['LOGS'] = $env['ROOT'].'logs/';

    $app->config('debug', false);
    $app->getLog()->setWriter(new \Slim\Logger\DateTimeFileWriter(array('path' => $env['LOGS'])));
    $app->view()->setTemplatesDirectory($env['APP'].'views/');
});