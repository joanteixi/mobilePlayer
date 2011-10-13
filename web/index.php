<?php

require_once __DIR__.'/../lib/silex.phar';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/../views',
    'twig.class_path' => __DIR__.'/../lib/vendor/twig/lib'
));
// definitions
$app['debug'] = true;

//index 
$app->get('/', function () use ($app) {
  return $app['twig']->render('homepage.html.twig');
});

$app->run();