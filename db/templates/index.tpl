<!DOCTYPE html>

{include file="header.tpl"}
<div class="row">
  <div class="col-6 offset-3">
    <h1>Lista de Tareas</h1>

    <!-- <div class="container-fluid" id="tasks"> -->
      {include file="tasks.tpl"}
    <!-- </div> -->

    <form action="addTask" method="post">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titulo de la tarea">
      </div>
      <div class="form-group">
        <label for="description">Descripcion</label>
        <textarea name="description" id="description" rows="8" cols="75"></textarea>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="done" name="done" value="1">
        <label for="done">Completada</label>
      </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
