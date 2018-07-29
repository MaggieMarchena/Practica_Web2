<?php

  include_once 'libs/Smarty.class.php';

  /**
   *
   */
  class TasksView {

    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
      $this->smarty->assign('mainTitle', 'To Do App');
    }

    function showTasks($tasks){
      $this->smarty->assign('tasks', $tasks);
      $this->smarty->display('templates/index.tpl');
    }

    function showForm(){
      $this->smarty->display('templates/formCreate.tpl');
    }

    function showCreateError($error){
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/formCreate.tpl');
    }

  }

?>
