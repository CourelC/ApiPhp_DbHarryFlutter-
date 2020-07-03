<?php
    session_start(); // Vérifier si utile et si oui a quoi ça sert
    require_once '../DbConnexion.php';

    $query = $pdo->query("SELECT * FROM post");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)){
        echo 'Bad Request';
    }
    else{
        echo json_encode($result,JSON_PRETTY_PRINT);
    }
     
?>