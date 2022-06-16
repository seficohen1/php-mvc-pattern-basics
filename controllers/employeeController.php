<?php 

require MODELS . 'employeeModel.php';

$action = '';

if(isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  echo $action;
  if(function_exists($action)) {
    call_user_func($action, $_REQUEST);
  }
} else {
  echo 'worng user action';
}


function getAllEmployees() {
  $employees = get();
  require VIEWS . 'employee/employeeDashboard.php';
}