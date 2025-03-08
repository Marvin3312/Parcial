<?php

class TemplateController{

  //main view template
  public function index()
  {
    include 'views/template.php';
  }

  static public function path()
  {
    if(!empty($_SERVER["HTTPS"]) && ('on' == $_SERVER["HTTPS"])){
      return "https://" . $_SERVER['SERVER_NAME'] . "/";
    }else{
      return "http://" . $_SERVER['SERVER_NAME'] . "/";
    }
  }
}
