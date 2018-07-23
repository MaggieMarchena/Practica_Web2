<?php

  function getTasks(){
    $db = new PDO('mysql:host=localhost;'.'dbname=ToDo_app;charset=utf8', 'root', '');
    $query = $db->prepare( "select * from task");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

?>
