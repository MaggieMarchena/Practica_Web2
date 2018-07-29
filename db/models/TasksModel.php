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

  }

?>
