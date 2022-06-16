<?php 
require_once("helper/dbConnection.php");

function get() {
  $query = conn()->prepare("SELECT Books.Id, title, name FROM  Books JOIN BooksAuthors BA ON Books.id = BA.BookId JOIN Authors ON BA.AuthorId = Authors.id;");
  try {
    $query->execute();
    $books = $query->fetchAll();
    return $books;
  } catch (PDOException $e) {
    return $e;
  }
}



function delete($id) {
  $query = conn()->prepare("DELETE FROM Books WHERE id = ?");
    $query->bindParam(1, $id);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function create($book) {
  {
    $query = conn()->prepare("INSERT INTO Books (Title)
    VALUES
    (?);");
    $query->bindParam(1, $book["Title"]);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

}