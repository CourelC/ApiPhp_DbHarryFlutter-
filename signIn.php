<?php
    session_start(); // Vérifier si utile et si oui a quoi ça sert
    require_once 'DbConnexion.php';

    //$mail = $_GET['Mail'];
    //$password = $_GET['Password'];

    $jsonData = json_decode(file_get_contents('php://input'),true);
    
    $mail = $jsonData['Mail'];
    $password = $jsonData['Password'];

    $query = $pdo->query("SELECT * FROM user WHERE Mail='".$mail."' AND Password='".$password."' ");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)){
        echo 'Unknown user';
    }
    else{
    echo json_encode($result/*, JSON_PRETTY_PRINT*/);
    }
     
?>

