<?php 

require_once MODELS . 'bookModel.php';

$action = '';

if(isset($_REQUEST["action"])) {
  $action = $_REQUEST['action'];
}
if(function_exists($action)) {
  call_user_func($action, $_REQUEST);
} else {
 echo 'Invalid user action';

}

// Controller functions //

// Getting all books from DB

function getAllBooks() {
  $books = get();
  if(isset($books)) {
    require_once VIEWS . '/book/bookDashboard.php';
  } else {
    echo 'there is a porblem accesing the page';  
  }
}

//  Delete Book by id 

function deleteBook($request) {
  $action = $_REQUEST['action'];
  $book = null; 
  if(isset($request['id'])) {
    $book = delete($request['id']);
    // header("Location: index.php?controller=book&action=getAllBooks");
  }
}

function createBook($request)
{
    $action = $request["action"];
    if (sizeof($_POST) > 0) {
        $book = create($_POST);
        if ($book[0]) {
            header("Location: index.php?controller=book&action=getAllBooks");
        } else {
            echo $book[1];
        }
    } else {
        require_once VIEWS . "/book/book.php";
    }
}

// Error 

// function error($errorMsg) {
//   require_once VIEWS . 'error/error';
// }