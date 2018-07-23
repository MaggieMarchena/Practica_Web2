<?php
  function sumar ($components){
    $result = array_sum($components);
    return "La suma de ".implode("+", $components)." es $result.";
  }
?>
