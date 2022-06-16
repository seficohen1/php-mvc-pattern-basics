<?php 

include_once "config/constant.php";


if(isset($_GET['controller'])) {
  $controller = CONTROLLERS . $_GET['controller'] . "Controller.php";
  $fileExist = file_exists($controller);
  if($fileExist) {
    require_once $controller;
  } else {
    $error = 'The page you are looking for does not exsit';
    require_once VIEWS .  'error/error.php';
  }
} else {
  require_once VIEWS . "main/main.php";
}