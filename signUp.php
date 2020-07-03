<?php
    session_start(); 
    require_once 'DbConnexion.php';

    
    $jsonData = json_decode(file_get_contents('php://input'),true);
     
    $username = $jsonData['Username'];
    $password = $jsonData['Password'];
    $mail = $jsonData['Mail'];
    $id_House = $jsonData['ID_House'];
    $id_Role = 1;
    
    $query = $pdo->query("INSERT INTO user(CreationDate, ID_Role, ID_House, Username, Password, Mail) 
                          VALUES(NOW(),'".$id_Role."', '".$id_House."', '".$username."','".$password."', '".$mail."')");

    //echo $pdo->lastInsertId(); // Permet d'afficher le dernier ID_enregistrer en base

    //$lastId = $pdo->lastInsertId(); // Permet d'afficher le dernier ID_enregistrer en base
    //$query = $pdo->query("SELECT * FROM user WHERE ID_User = '".$lastId."'");
    //$result = $query->fetchAll(PDO::FETCH_ASSOC);

    //echo json_encode($result, JSON_PRETTY_PRINT);

    // retourner l'utilsateur créer ?

?>