<!DOCTYPE html>

{include file="../header.tpl"}

{if !empty($session)}
  <button type="button" name="logout"><a href="logout">Logout</a></button>
{/if}

<div class="row">
  <div class="col-6 offset-3">
    <h1>Lista de Palabras Prohibidas</h1>

    <a href="addForbiddenWord">Agregar</a> |
    <a href="home">Lista de Tareas</a>

    <!-- <div class="container-fluid" id="tasks"> -->
      {include file="./forbiddenWords.tpl"}
    <!-- </div> -->

  </div>
</div>
{include file="../footer.tpl"}
