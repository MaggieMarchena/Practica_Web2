<?php
/**
 *
 */
  class TasksModel {

    private $db;

    function __construct(){
      $this->db = new PDO('mysql:host=localhost;'.'dbname=ToDo_app;charset=utf8', 'root', '');
    }

    function getTasks(){
      $query = $this->db->prepare("select * from task");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function saveTask($title, $description, $done){
      $query = $this->db->prepare("INSERT INTO task(title, description, done) VALUES(?,?,?)");
      $query->execute([$title, $description, $done]);
    }

    function deleteTask($id_task){
      $query = $this->db->prepare("delete from task where id_task=?");
      $query->execute([$id_task]);                                              //return si quiero comprobar si funco y tirar error
    }

  }

?>
