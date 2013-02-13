<?php
class App_controller{
 
  function __construct(){

  }
 
  function home(){

    echo Views::instance()->render('home.html');

  }
 
  function __destruct(){

  }

}
?>