<?php
include '../Model/connexion.php';
 global $db;
 $req=$db->prepare("SELECT * FROM users where id = ".$_GET['id']);
		
		$req->execute();
	    $req->fetchAll(PDO::FETCH_OBJ);
		
include 'new_user.php';
?>