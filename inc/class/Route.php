<?php

/** Cow-Stream dev by Roch Blondiaux **/

class Route {

    private $path;
    private $callable;
    private $matches = [];
    private $params = [];

    public function __construct($path, $callable){
        $this->path = trim($path, '/');
        $this->callable = $callable;
    }

    public function match($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }
        array_shift($matches);
        $this->matches = $matches;
        return true;
    }

    public function call(){
      if(is_string($this->callable)){
        $params = explode('#', $this->callable);
        $controller = include_once(__DIR__.'/../controllers/'.$params[0].'.php');
        $controller = new $params[0]();
        return call_user_func_array([$controller, $params[1]], $this->matches);
      } else {
        return call_user_func_array($this->callable, $this->matches);
      }
    }

}
