<?php

  include_once 'views/ForbiddenWordsView.php';
  include_once 'models/ForbiddenWordsModel.php';

  class ForbiddenWordsController extends SecuredController{

    function __construct(){
      parent::__construct();
      $this->model = new ForbiddenWordsModel();
      $this->view = new ForbiddenWordsView();
    }

    public function showPage(){
      $forbiddenWords = $this->model->getForbiddenWords();
      $this->view->showForbiddenWords($forbiddenWords);
    }

    public function create(){
      $this->view->showForm();
    }

    public function store(){
      $word = $_POST['word'];
      $this->model->saveForbiddenWord($word);
      header('Location: '.HOME.'/forbiddenWords');

    }

    public function delete($params){
      $id_word = $params[0];
      $this->model->deleteForbiddenWord($id_word);
      header('Location: '.HOME.'/forbiddenWords');
    }

  }

?>
