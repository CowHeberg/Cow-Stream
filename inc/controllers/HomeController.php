<?php

/** Cow-Stream dev by Roch Blondiaux **/

class HomeController {

  function index(){
    $view = new View();
    $view->setTitle('Home');
    $view->setContent('home');
    $view->render();
  }
}
