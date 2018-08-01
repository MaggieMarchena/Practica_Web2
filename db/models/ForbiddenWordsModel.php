<?php

  class ForbiddenWordsModel extends Model{

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
