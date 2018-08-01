<?php
/**
 *
 */
  class ForbiddenWordsModel {

    private $db;

    function __construct(){
      $this->db = new PDO('mysql:host=localhost;'.'dbname=ToDo_app;charset=utf8', 'root', '');
    }

    function getForbiddenWords(){
      $query = $this->db->prepare("select * from forbiddenWord");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
  }

?>
