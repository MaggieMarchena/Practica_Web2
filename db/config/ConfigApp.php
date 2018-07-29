<?php

  class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'index',
      'home'=> 'index',
      'tasks'=> 'showTasks',
      'addTask'=> 'addTask',
      'deleteTask'=> 'deleteTasks',
      'changeTaskStatus'=> 'changeTaskStatus'
    ];
  }

?>
