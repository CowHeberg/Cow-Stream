<?php

/** Cow-Stream dev by Roch Blondiaux **/

require_once(__DIR__.'/../class/Database.php');

class HomeController {

  function index(){
    Database::connect();
    $view = new View();
    $view->setTitle('Home');
    $view->setContent('home');
    return $view->render();
  }
}
