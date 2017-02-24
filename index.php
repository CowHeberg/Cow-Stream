<?php

/** Cow-Stream dev by Roch Blondiaux **/

// CONFIG FILES
$app = require_once(__DIR__.'/config/app.php');
$database = require_once(__DIR__.'/config/database.php');

// INCLUDES
require_once(__DIR__.'/inc/class/Autoloader.php');

// CLASS
Autoloader::loadClass('Router');
Autoloader::loadClass('Route');
Autoloader::loadClass('View');

// CONTROLLERS
Autoloader::loadController('HomeController');

//ROUTES
$router = new Router($_GET['url']);
foreach (glob(__DIR__.'/routes/*.php') as $routes) {
  include_once($routes);
}
$router->run();
