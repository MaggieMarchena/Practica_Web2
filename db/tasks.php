<?php

  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=ToDo_app;charset=utf8', 'root', '');
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
