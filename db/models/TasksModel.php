<?php

  class TasksModel extends Model{

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

    function markTaskDone($id_task){
      $query = $this->db->prepare("update task set done=1 where id_task=?");
      $query->execute([$id_task]);
    }

  }

?>
