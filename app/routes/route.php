<?php
$app->get('.*', function() use ($app, $env) {
    $app->render('index.html', array('data' => $env['CLIENT']));
});