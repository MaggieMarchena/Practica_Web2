<?php

  class LoginView extends View{

    function showForm($error = '', $session = ''){
      $this->smarty->assign('error', $error);
      $this->smarty->assign('session', $session);
      $this->smarty->display('templates/Login/index.tpl');
    }

  }

?>
