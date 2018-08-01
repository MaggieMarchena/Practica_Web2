<!DOCTYPE html>

{include file="../header.tpl"}
<div class="row">
  <div class="col-6 offset-3">
    <!-- {if isset($error)}
      <div class="alert alert-danger" role="alert">
        {$error}
      </div>
    {/if} -->
    <form action="saveForbiddenWord" method="post">
      <div class="form-group">
        <label for="title">Palabra</label>
        <input type="text" class="form-control" id="word" name="word" placeholder="Palabra para agregar">
      </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
  </div>
</div>
{include file="../footer.tpl"}
