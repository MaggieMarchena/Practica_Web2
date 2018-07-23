<?php

  function home()
  {
    return '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
      </head>
      <body>
        <a href="#">Home</a>
        <a href="about">About</a>
        <a href="about/juan">About - Juan</a>
        <a href="pi">Número Pi</a>
        <h1>Ingrese los números para sumar</h1>
        <form class="" action="sumar.php" method="get">
          <label for="a">Primer Componente</label>
          <input type="number" id="a" name="a">
          <label for="b">Segundo Componente</label>
          <input type="number" id="b" name="b">
          <button type="submit">Sumar</button>
        </form>
      </body>
    </html>';
  }

?>
