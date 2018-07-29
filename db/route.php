<?php

  include_once 'config/ConfigApp.php';
  include_once 'controllers/TasksController.php';

  define('ACTION', 0);
  define('PARAM', 1);

  $controllerTasks = new TasksController();

  function parseUrl($url){
    $urlExploded = explode('/', $url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset ($urlExploded[PARAM]) ? array_slice($urlExploded, PARAM) : null;
    return $arrayReturn;
  }

  if(isset($_GET['action'])){
    $urlData = parseUrl($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action, ConfigApp::$ACTIONS)){
      $params = $urlData[ConfigApp::$PARAMS];
      $methodName = ConfigApp::$ACTIONS[$action];
      if(isset($params) && $params != null){
        echo $controllerTasks->$methodName($params);
      }
      else {
        echo $controllerTasks->$methodName();
      }
    }
  }

  // $controllerTasks = new TasksController();
  // $controllerTasks->showPage();

  // define('ACTION', 0);
  // define('PARAM', 1);
  //
  // include_once 'config/ConfigApp.php';
  // include_once 'index.php';
  //
  // function parseUrl($url){
  //   $urlExploded = explode('/', $url);
  //   $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  //   $arrayReturn[ConfigApp::$PARAMS] = isset ($urlExploded[PARAM]) ? array_slice($urlExploded, PARAM) : null;
  //
  //   return $arrayReturn;
  // }
  //
  // if(isset($_GET['action'])){
  //   $urlData = parseUrl($_GET['action']);
  //   $action = $urlData[ConfigApp::$ACTION];
  //   if(array_key_exists($action, ConfigApp::$ACTIONS)){
  //     $params = $urlData[ConfigApp::$PARAMS];
  //     $methodName = ConfigApp::$ACTIONS[$action];
  //     if(isset($params) && $params != null){
  //       echo $methodName($params);
  //     }
  //     else {
  //       echo $methodName();
  //     }
  //   }
  // }
?>
