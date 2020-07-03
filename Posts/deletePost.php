<?php
    session_start(); 
    require_once '../DbConnexion.php';
    
    $id = $_GET['id'];

    $query = $pdo->query("DELETE FROM post WHERE ID_Post = '".$id."'");

?>