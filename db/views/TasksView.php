<?php

  include_once 'libs/Smarty.class.php';

  /**
   *
   */
  class TasksView {

    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function showTasks($tasks){
      $this->smarty->assign('tasks', $tasks);
      $this->smarty->display('templates/index.tpl');
    }

  }

?>
