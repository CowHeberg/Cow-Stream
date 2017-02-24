<?php

/** Cow-Stream dev by Roch Blondiaux **/

class View{

  private $title, $content, $template, $datas;

  function setContent($content){
    $this->content = $content;
  }

  function getContent(){
    return $this->content;
  }

  function setTemplate($template){
    $this->template = $template;
  }

  function setTitle($title){
    $this->title = $title;
  }

  function getTitle(){
    return $this->title;
  }

  function with($datas = array()){
    $this->datas = $datas;
  }

  function getDatas(){
    return $datas;
  }

  function assets($asset){
    return '/inc/assets/'.$asset;
  }

  function url($url){
    return 'http://'.$_SERVER['HTTP_HOST'].'/'.$url;
  }

  function render(){
    if(empty($this->template)){
      echo include_once(__DIR__.'/../views/'.$this->content.'.php');
    }else{
      $this->template = include_once(__DIR__.'/../views/layouts/'.$this->template.'.php');
      $this->content = include_once(__DIR__.'/../views/'.$this->content.'.php');
    }
  }
}
