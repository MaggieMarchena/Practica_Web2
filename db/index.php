<?php

  define('FALSE', 0);
  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

  include_once 'tasks.php';

  function addTask(){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $done = isset($_POST['done']) ? $_POST['done'] : FALSE;
    setTask($title, $description, $done);
    header('Location: '.HOME);
  }

  function deleteTasks($params){
    deleteTask($params[0]);
    header('Location: '.HOME);
  }

  function changeTaskStatus($params){
    markTaskDone($params[0]);
    header('Location: '.HOME);
  }

  function home(){

    $tasks = getTasks();

  ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>To Do App</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
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
        echo '<li class="list-group-item"><s>'.$task['title'].': '.$task['description'].'</s><a href="deleteTask/'.$task['id_task'].'"><i class="fas fa-trash"></i></a></li>';
      }
      else {
        echo '<li class="list-group-item">'.$task['title'].': '.$task['description'].'</s><a href="deleteTask/'.$task['id_task'].'"><i class="fas fa-trash"></i></a><a href="changeTaskStatus/'.$task['id_task'].'"><i class="far fa-check-square"></i></a></li>';
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
