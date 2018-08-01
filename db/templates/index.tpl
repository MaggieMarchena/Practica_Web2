<!DOCTYPE html>

{include file="header.tpl"}
<div class="row">
  <div class="col-6 offset-3">
    <h1>Lista de Tareas</h1>

    <a href="addTask">Agregar Tarea</a>
    <a href="forbiddenWords">Lista de palabras prohibidas</a>

    <!-- <div class="container-fluid" id="tasks"> -->
      {include file="tasks.tpl"}
    <!-- </div> -->


  </div>
</div>
{include file="footer.tpl"}
