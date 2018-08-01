<?php

  class ForbiddenWordsView extends View{

    function showForbiddenWords($forbiddenWords){
      $this->smarty->assign('forbiddenWords', $forbiddenWords);
      $this->smarty->display('templates/ForbiddenWords/index.tpl');
    }

    function showForm(){
      $this->smarty->display('templates/ForbiddenWords/formCreate.tpl');
    }

  }

?>
