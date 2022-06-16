<?php 

require ('helper/dbConnection.php'); 

function get() {
  $query = conn()->prepare("SELECT e.id, e.name as first_name, e.last_name, e.age, genders.name as sex FROM employees e JOIN genders ON e.gender_id = genders.id");
  try {
    $query->execute();
    $employees = $query->fetchAll();
    return $employees;
  } catch (PDOException $error) {
    echo $error;
  }
}

