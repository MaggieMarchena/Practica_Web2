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

    function saveForbiddenWord($word){
      $query = $this->db->prepare("INSERT INTO forbiddenWord(word) VALUES(?)");
      $query->execute([$word]);
    }

    function deleteForbiddenWord($id_word){
      $query = $this->db->prepare("delete from forbiddenWord where id_word=?");
      $query->execute([$id_word]);
    }
  }

?>
