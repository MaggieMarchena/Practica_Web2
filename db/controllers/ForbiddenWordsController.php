<?php

  include_once 'views/ForbiddenWordsView.php';
  include_once 'models/ForbiddenWordsModel.php';

/**
 *
 */
  class ForbiddenWordsController {

    private $view;
    private $model;

    function __construct(){
      $this->model = new ForbiddenWordsModel();
      $this->view = new ForbiddenWordsView();
    }

    public function showPage(){
      $forbiddenWords = $this->model->getForbiddenWords();
      $this->view->showForbiddenWords($forbiddenWords);
    }

    // public function create(){
    //   $this->view->showForm();
    // }
    //
    // public function store(){
    //   $title = $_POST['title'];
    //   $description = $_POST['description'];
    //   $done = isset($_POST['done']) ? $_POST['done'] : 0;
    //
    //   if(!empty($_POST['title'])){
    //     $notAllowed = $this->hasForbidden($title);
    //     if ($notAllowed){
    //       $this->view->showCreateError("El título contiene palabras prohibidas", $title, $description, $done);
    //     }
    //     else {
    //       $this->tasksModel->saveTask($title, $description, $done);
    //       header('Location: '.HOME);
    //     }
    //   }
    //   else {
    //     $this->view->showCreateError("El campo título es requerido", $title, $description, $done);
    //   }
    // }

  }

?>
