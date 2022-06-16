<?php 

require_once MODELS . 'employeeModel.php';

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
  $employees = read();
  require VIEWS . 'employee/employeeDashboard.php';
}

function deleteEmpoyee($request) {
  
  $action = $request["action"];
  $employee = null;
  if (isset($request["id"])) {
      $employee = delete($request["id"]);
      header("Location: index.php?controller=employee&action=getAllEmployees");
  }
  echo 'hola';
}
