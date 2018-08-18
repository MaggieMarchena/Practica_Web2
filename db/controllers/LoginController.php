<?php

  include_once 'models/LoginModel.php';
  include_once 'views/LoginView.php';

  class LoginController extends Controller{

    function __construct(){
      $this->model = new LoginModel();
      $this->view = new LoginView();
    }

    public function index(){
      $this->view->showForm();
    }

    public function verify(){

      $username = $_POST['username'];
      $password = $_POST['password'];

      if (!empty($username) && !empty($password)) {
        $user = $this->model->getUser($username);
        print_r($user);
        if (!empty($user) && password_verify($password, $user[0]['password'])) {
          header('Location: '.HOME);
        }
        else {
          $this->view->showForm('Usuario o contraseña incorrecto');
        }
      }

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
    //
    // public function delete($params){
    //   $id_task = $params[0];
    //   $this->tasksModel->deleteTask($id_task);
    //   header('Location: '.HOME);
    // }
    //
    // public function update($params){
    //   $id_task = $params[0];
    //   $this->tasksModel->markTaskDone($id_task);
    //   header('Location: '.HOME);
    // }

  }

?>
