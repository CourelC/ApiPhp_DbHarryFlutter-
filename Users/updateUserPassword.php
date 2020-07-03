<?php
    session_start(); 
    require_once '../DbConnexion.php';

    
    $jsonData = json_decode(file_get_contents('php://input'),true);
     
    $id = $_GET['id'];
    //$id_User = $jsonData['ID_User'];
    $password = $jsonData['Password'];

    
    $query = $pdo->query("UPDATE user
                          SET Password = '".$password."'
                          WHERE ID_User = '".$id."'");

                       
?>