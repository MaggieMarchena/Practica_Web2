<?php

  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=ToDo_app;charset=utf8', 'root', '');
  }

  function deleteTask($id_task){
    $db = connect();
    $query = $db->prepare("delete from task where id_task=?");
    return $query->execute([$id_task]);
  }

  function markTaskDone($id_task){
    $db = connect();
    $query = $db->prepare("update task set done=1 where id_task=?");
    return $query->execute([$id_task]);
  }

  function getTasks(){
    $db = connect();
    $query = $db->prepare("select * from task");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function setTask($title, $description, $done){
    $db = connect();
    $query = $db->prepare("INSERT INTO task(title, description, done) VALUES(?,?,?)");
    $query->execute([$title, $description, $done]);
  }

?>
