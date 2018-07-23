<?php

  define('FALSE', 0);

  include_once 'tasks.php';

  function addTask(){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $done = isset($_POST['done']) ? $_POST['done'] : FALSE;
    setTask($title, $description, $done);
    header("Location: home");
  }

  function home(){

    $tasks = getTasks();

  ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>To Do App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
      </head>
      <body>
        <main role="main" class="container">

          <div class="row">
            <div class="col-6 offset-3">
              <h1>Lista de Tareas</h1>
              <ul class="list-group">

  <?php

    foreach ($tasks as $task) {
      if ($task['done']) {
        echo '<li class="list-group-item"><s>'.$task['title'].': '.$task['description'].'</s></li>';
      }
      else {
        echo '<li class="list-group-item">'.$task['title'].': '.$task['description'].'</li>';
      }

    }

  ?>
              </ul>

              <form action="addTask" method="post">
                <div class="form-group">
                  <label for="title">Título</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Titulo de la tarea">
                </div>
                <div class="form-group">
                  <label for="description">Descripcion</label>
                  <textarea name="description" id="description" name="description" rows="8" cols="75"></textarea>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="done" name="done" value="1">
                  <label for="done">Completada</label>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
            </div>
          </div>

        </main><!-- /.container -->
      </body>
    </html>

<?php
}
?>
