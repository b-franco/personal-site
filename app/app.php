<?php

use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/resources/views',
));

$app->get('/', function () use ($app) {
    return $app['twig']->render('home.html.twig');
});

return $app;