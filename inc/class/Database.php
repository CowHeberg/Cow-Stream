<?php

/*
* Class Database
*/
class Database{

  static $type, $charset, $host, $name, $user, $password, $PDO, $query;

  /*
  * function connect
  */
  static function connect(){
    $infos = include_once (__DIR__.'/../../config/database.php');
    $type = $infos['type'];
    $this->charset = $infos['charset'];
    $this->host = $infos['host'];
    $this->name = $infos['name'];
    $this->user = $infos['user'];
    $this->password = $infos['password'];

    $this->PDO = new PDO($this->type.':host='.$this->host.';dbname='.$this->name.';charset='.$this->charset, $this->user, $this->password) or die('Error while accessing database, check your inputs.');
  }

  static function table($name){

  }
}
