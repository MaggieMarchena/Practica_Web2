<?php

  define('FALSE', 0);
  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

  include_once 'tasksDB.php';
  include_once 'libs/Smarty.class.php';

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
    $mainTitle = 'To Do App';
    $smarty = new Smarty();
    $smarty->assign('mainTitle', $mainTitle);
    // $smarty->debugging = true;
    $smarty->display('templates/index.tpl');
  }

  function showTasks(){
    $tasks = getTasks();
    $smarty = new Smarty();
    $smarty->assign('tasks', $tasks);
    // $smarty->debugging = true;
    $smarty->display('templates/tasks.tpl');
  }


?>
