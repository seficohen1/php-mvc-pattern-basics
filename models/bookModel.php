<?php 
require_once("helper/dbConnection.php");

function get() {
  $query = conn()->prepare("SELECT title, name FROM  Books JOIN BooksAuthors BA ON Books.id = BA.BookId JOIN Authors ON BA.AuthorId = Authors.id;");
 
  try {
    $query->execute();
    $books = $query->fetchAll();
    return $books;
  } catch (PDOException $e) {
    return [];
  }
}
