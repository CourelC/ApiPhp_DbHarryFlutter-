<?php
    session_start(); 
    require_once '../DbConnexion.php';

    
    $jsonData = json_decode(file_get_contents('php://input'),true);
     
    $title = $jsonData['Title'];
    $content = $jsonData['Content'];
    $author = $jsonData['Author'];
    
    $query = $pdo->query("INSERT INTO post(CreationDate, Title, Content, Author) 
                          VALUES(NOW(), '".$title."','".$content."', '".$author."')");
                        
?>