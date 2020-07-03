<?php
    session_start(); 
    require_once '../DbConnexion.php';

    
    $jsonData = json_decode(file_get_contents('php://input'),true);
    
    $id = $_GET['id'];
    //$id_User = $jsonData['ID_User'];
    $id_House = $jsonData['ID_House'];

    
    $query = $pdo->query("UPDATE user
                          SET ID_House = '".$id_House."'
                          WHERE ID_User = '".$id."'");

                        
?>