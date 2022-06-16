<?php 
// Create connection to the db
// include_once '../../config/constant.php';
// function conn()
// {
//     try {
//         $connection = "mysql:host=" . HOST . ";"
//             . "dbname=" . DB . ";"
//             . "charset=" . CHARSET . ";";
        
//         $options = [
//             PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_EMULATE_PREPARES  => FALSE,
//         ];

//         $pdo = new PDO($connection, USER, PASSWORD, $options);

//         return $pdo;
//     } catch (PDOException $e) {
//         require_once(VIEWS . "error/error.php");
//     }
// }


function conn(){
    try{
        $dbConn = new PDO('mysql:host=localhost;dbname=mvc_basics;charset=utf8mb4','root', '');
        return $dbConn;
    }catch(PDOException $e){
        return $e;
    }
}

