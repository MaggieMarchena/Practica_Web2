<?php

  class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      //llaman a controller
      ''=> 'TasksController#showPage',            //lo que viene como param => el método del controller al que llama
      'home'=> 'TasksController#showPage',

      'tasks'=> 'TasksController#showPage',
      'addTask'=> 'TasksController#create',
      'saveTask'=> 'TasksController#store',
      'deleteTask'=> 'TasksController#delete',
      'markTaskDone'=> 'TasksController#update',

      'forbiddenWords'=> 'ForbiddenWordsController#showPage',
      'addForbiddenWord'=> 'ForbiddenWordsController#create',
      'saveForbiddenWord'=> 'ForbiddenWordsController#store'

    ];
  }

?>
