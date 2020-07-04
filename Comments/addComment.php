<?php
    session_start(); 
    require_once '../DbConnexion.php';

    
    $jsonData = json_decode(file_get_contents('php://input'),true);
     
    $id_Post = $jsonData['ID_Post'];
    $content = $jsonData['Content'];
    $author = $jsonData['Author'];
    //$id_User = $jsonData['ID_User'];

    
    $query = $pdo->query("INSERT INTO comment(CreationDate, ID_Post, Content, Author) 
                          VALUES(NOW(), '".$id_Post."','".$content."', '".$author."')");
                        
?>