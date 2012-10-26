<?php
## Slim configurations
#######################
require "vendor/autoload.php";
$app = new \Slim\Slim();

# Configurations for Slim
$app->setName('Slim Teste');
$app->config('debug', true);



## PHP Active Record Configuration
###################################
require "vendor/php-activerecord/ActiveRecord.php";
ActiveRecord\Config::initialize(function($cfg){
  $cfg->set_model_directory('models');
  $cfg->set_connections(array(
    'development' => 'mysql://root@localhost/slim'
  ));
});

# End of application.php