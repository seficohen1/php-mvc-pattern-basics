<?php 

require_once MODELS . 'bookModel.php';

$action = ''; 

if(isset($_REQUEST["action"])) {
  $action = $_REQUEST['action'];
}
if(function_exists($action)) {
  call_user_func($action, $_REQUEST);
} else {
  error('Invalid user action');

}

// Controller functions //

// Getting all books from DB

function getAllBooks() {
  $books = get();
  if(isset($books)) {
    require_once VIEWS . '/book/bookDashboard.php';
  } else {
    error('There is a problem in the database');
  }
}

// Error 

function error($errorMsg) {
  require_once VIEWS . '/error/error';
}