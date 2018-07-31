<?php

  include_once 'models/TasksModel.php';
  include_once 'views/TasksView.php';

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
  class TasksController {

    private $view;
    private $model;

    function __construct(){
      $this->model = new TasksModel();
      $this->view = new TasksView();
    }

    public function showPage(){
      $tasks = $this->model->getTasks();
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
          $this->model->saveTask($title, $description, $done);
          header('Location: '.HOME);
        }
      }
      else {
        $this->view->showCreateError("El campo título es requerido", $title, $description, $done);
      }
    }

    public function delete($params){
      $id_task = $params[0];
      $this->model->deleteTask($id_task);
      header('Location: '.HOME);
    }

    public function hasForbidden($title){
      $forbidden = ['Me gustaría', 'Quisiera', 'Estoy pensando en'];
      return in_array($title, $forbidden);
    }

  }

?>
