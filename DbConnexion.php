<?php
 try{
 	$dns_bdd = 'mysql:host=localhost;dbname=testappli;port=3307';
 	$user_bdd= 'root';
 	$pass_bdd= '';
 	$pdo = new PDO($dns_bdd, $user_bdd, $pass_bdd);

 } catch(Exception $e){
 		die('Erreur :' . $e->getMessage());
 }


?>