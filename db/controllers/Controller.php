<?php

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
  define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/login');

  class Controller{

    protected $model;
    protected $view;

  }

?>
