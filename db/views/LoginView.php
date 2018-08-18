<?php

  class LoginView extends View{

    function showForm($error = ''){
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/Login/index.tpl');
    }

  }

?>
