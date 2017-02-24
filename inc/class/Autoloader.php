<?php

/** Cow-Stream dev by Roch Blondiaux **/

class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function loadClass($class){
        require __DIR__.'/'.$class.'.php';
    }

    static function loadController($controller){
        require __DIR__.'/../controllers/'.$controller.'.php';
    }

    static function loadRoute($route){
        require __DIR__.'/../../routes/'.$route.'.php';
    }

}
