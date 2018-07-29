<?php

  class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'showPage',
      'home'=> 'showPage',
      'tasks'=> 'showTasks',
      'addTask'=> 'create',
      'saveTask'=> 'store',
      'deleteTask'=> 'deleteTasks',
      'changeTaskStatus'=> 'changeTaskStatus'
    ];
  }

?>
