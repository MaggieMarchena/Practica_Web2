<!DOCTYPE html>

{include file="header.tpl"}
<div class="row">
  <div class="col-6 offset-3">
    <form action="verifyUser" method="post">
      <div class="form-group">
        <label for="username">Usurname</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="userHelp" placeholder="pirulo.zaraza" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        {if !empty($error)}
          <div class="alert alert-danger" role="alert">
            {$error}
          </div>
        {/if}
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
