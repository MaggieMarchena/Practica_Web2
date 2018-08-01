<?php

  include_once 'config/ConfigApp.php';
  include_once 'controllers/TasksController.php';
  include_once 'controllers/ForbiddenWordsController.php';

  define('ACTION', 0);
  define('PARAMS', 1);

  function parseUrl($url){
    $urlExploded = explode('/', $url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset ($urlExploded[PARAMS]) ? array_slice($urlExploded, PARAMS) : null;
    return $arrayReturn;
  }

  if(isset($_GET['action'])){
    $urlData = parseUrl($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action, ConfigApp::$ACTIONS)){
      $params = $urlData[ConfigApp::$PARAMS];
      $action = explode('#', ConfigApp::$ACTIONS[$action]);
      //recibo por ej TasksController#showPage, hago explode por #, array [0]-> TasksController [1]-> showPage
      $controller = new $action[0]();
      //se interpreta el string como el nombre del controller 'cause php *eye roll*
      $methodName = $action[1];
      if(isset($params) && $params != null){
        echo $controller->$methodName($params);
      }
      else {
        echo $controller->$methodName();
      }
    }
  }

?>
