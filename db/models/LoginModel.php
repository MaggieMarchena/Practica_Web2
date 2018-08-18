<?php

  class LoginModel extends Model{

    function getUser($username){
      $query = $this->db->prepare("select * from user where username=? limit 1");
      $query->execute([$username]);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    //
    // function saveTask($title, $description, $done){
    //   $query = $this->db->prepare("INSERT INTO task(title, description, done) VALUES(?,?,?)");
    //   $query->execute([$title, $description, $done]);
    // }
    //
    // function deleteTask($id_task){
    //   $query = $this->db->prepare("delete from task where id_task=?");
    //   $query->execute([$id_task]);                                              //return si quiero comprobar si funco y tirar error
    // }
    //
    // function markTaskDone($id_task){
    //   $query = $this->db->prepare("update task set done=1 where id_task=?");
    //   $query->execute([$id_task]);
    // }

  }

?>
