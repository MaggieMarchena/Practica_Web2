<?php

  include_once 'libs/Smarty.class.php';

  /**
   *
   */
  class ForbiddenWordsView {

    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
      $this->smarty->assign('mainTitle', 'To Do App');
    }

    function showForbiddenWords($forbiddenWords){
      $this->smarty->assign('forbiddenWords', $forbiddenWords);
      $this->smarty->display('templates/ForbiddenWords/index.tpl');
    }

    function showForm(){
      $this->smarty->display('templates/ForbiddenWords/formCreate.tpl');
    }

  }

?>
