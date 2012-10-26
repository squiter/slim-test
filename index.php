<?php
require "config/application.php";

$app->get('/', function () use ($app) {
  $data['posts'] = Post::find('all');
  $app->render('index.html.php', $data);
});

$app->get('/post/:slug', function ($slug) use ($app) {
  $data['post'] = Post::find_by_slug($slug);
  $app->render('post.html.php', $data);
});

$app->get('/hello/:name', function ($name) use ($app){
  $app->render('hello_world.html.php', array('name' => $name));
});

$app->run();
