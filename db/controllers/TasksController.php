<?php

  include_once 'models/TasksModel.php';
  include_once 'views/TasksView.php';
  include_once 'models/ForbiddenWordsModel.php';

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
  class TasksController {

    private $view;
    private $tasksModel;
    private $forbiddenWordsModel;

    function __construct(){
      $this->tasksModel = new TasksModel();
      $this->forbiddenWordsModel = new ForbiddenWordsModel();
      $this->view = new TasksView();
    }

    public function showPage(){
      $tasks = $this->tasksModel->getTasks();
      $this->view->showTasks($tasks);
    }

    public function create(){
      $this->view->showForm();
    }

    public function store(){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $done = isset($_POST['done']) ? $_POST['done'] : 0;

      if(!empty($_POST['title'])){
        $notAllowed = $this->hasForbidden($title);
        if ($notAllowed){
          $this->view->showCreateError("El título contiene palabras prohibidas", $title, $description, $done);
        }
        else {
          $this->tasksModel->saveTask($title, $description, $done);
          header('Location: '.HOME);
        }
      }
      else {
        $this->view->showCreateError("El campo título es requerido", $title, $description, $done);
      }
    }

    public function delete($params){
      $id_task = $params[0];
      $this->tasksModel->deleteTask($id_task);
      header('Location: '.HOME);
    }

    public function update($params){
      $id_task = $params[0];
      $this->tasksModel->markTaskDone($id_task);
      header('Location: '.HOME);
    }

    private function hasForbidden($title){
      $forbidden = $this->forbiddenWordsModel->getForbiddenWords();
      foreach ($forbidden as $word) {
        if (strpos($title, $word['word']) !== false){
          return true;
        }
      }
      return false;

    }

  }

?>
