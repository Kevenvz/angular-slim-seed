<?php
$app->configureMode('production', function() use ($app, $env) {
    $env['CLIENT'] = array(
        'BASE' => 'http://website.com/',
        'ASSETS' => 'http://website.com/assets/',
        'API' => 'http://website.com/api/'
    );

    $env['ROOT'] = __DIR__.'/../../';
    $env['APP'] = $env['ROOT'].'app/';
    $env['WEB'] = $env['ROOT'].'public_html/';
    $env['LOGS'] = $env['ROOT'].'logs/';

    $app->config('debug', false);
    $app->getLog()->setWriter(new \Slim\Logger\DateTimeFileWriter(array('path' => $env['LOGS'])));
    $app->view()->setTemplatesDirectory($env['APP'].'views/');
});