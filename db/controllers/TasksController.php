<?php

  include_once 'models/TasksModel.php';
  include_once 'views/TasksView.php';
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

    public function index(){
      $tasks = $this->model->getTasks();
      $this->view->showTasks($tasks);
    }

  }

?>
