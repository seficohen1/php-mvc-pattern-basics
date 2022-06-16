<?php 

require ('helper/dbConnection.php'); 

function read() {
  $query = conn()->prepare("SELECT e.id, e.name as first_name, e.last_name, e.age, genders.name as sex FROM employees e JOIN genders ON e.gender_id = genders.id");
  try {
    $query->execute();
    $employees = $query->fetchAll();
    return $employees;
  } catch (PDOException $error) {
    echo $error;
  }
}

function delete($id) {
  $query = conn()->prepare("DELETE FROM employees WHERE id = ?");
  $query->bindParam(1, $id);
  try {
      $query->execute();
      
      return [true];
  } catch (PDOException $e) {
      return [false, $e];
  }
}