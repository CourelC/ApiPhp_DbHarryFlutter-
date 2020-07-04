<?php
    session_start(); 
    require_once '../DbConnexion.php';
    
    $id = $_GET['id'];

    $query = $pdo->query("SELECT * FROM comment WHERE ID_Post = '".$id."'");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)){
        echo 'Bad Request';
    }
    else{
        echo json_encode($result,JSON_PRETTY_PRINT);
    }
     
?>