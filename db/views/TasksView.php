<?php

  class TasksView extends View{

    function showTasks($tasks, $session = ''){
      $this->smarty->assign('tasks', $tasks);
      if (!empty($session)) {
        $this->smarty->assign('session', $session);
      }
      $this->smarty->display('templates/index.tpl');
    }

    function showForm(){
      $this->assignTaskToForm();
      $this->smarty->display('templates/formCreate.tpl');
    }

    function showCreateError($error, $title, $description, $done){
      $this->assignTaskToForm($title, $description, $done);
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/formCreate.tpl');
    }

    private function assignTaskToForm($title='', $description='', $done=''){
      $this->smarty->assign('title', $title);
      $this->smarty->assign('description', $description);
      $this->smarty->assign('done', $done);
    }

  }

?>
