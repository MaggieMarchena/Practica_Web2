<?php

  class SecuredController extends Controller{

    protected $model;
    protected $view;

    function __construct(){
      session_start();
      if (!isset($_SESSION['username'])){
        header('Location: '.LOGIN);
        die();
      }
    }

  }

?>
