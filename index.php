<?php
require "vendor/autoload.php";
require "config/application.php";

$app->get('/', function () use ($app) {
  $app->render('index.html.php');
});

$app->get('/hello/:name', function ($name) use ($app){
  $app->render('hello_world.html.php', array('name' => $name));
});

$app->run();
