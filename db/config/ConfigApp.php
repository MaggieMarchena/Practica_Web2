<?php

  class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'home',
      'home'=> 'home',
      'addTask'=> 'addTask',
      'deleteTask'=> 'deleteTasks',
      'changeTaskStatus'=> 'changeTaskStatus'
    ];
  }

?>
