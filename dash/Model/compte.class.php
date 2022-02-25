<!--?php
      session_start();
?-->
<?php 
require("connexion.php");


class Compte{
	
	public $id;
	//public $firstname;
	//public $lastname;
	//public $email;
	//public $mobilenumber;
	//public $password;
	public $is_active;
	public $centre;
	
	
	
	
	public function __construct($id,$log,$nom){
		$this->id=$id;
		//$this->lastname=$log;
		//$this->firstname =$nom;
		$this->is_active=$log;
		//$this->password=$pass;
		$this->centre=$nom;
		
		
	}

								/* fonction afficherAll() des comptes */
    
	public static function afficherAll()
	{
		$username = $_SESSION['id'] ;
		global $db;
		$req = $db->prepare("SELECT * from `users` where id='$username'");

		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}


    //**********************************Fonction pour afficher les Compte avec Pagination****************************
	public static function afficherGlobal($re){
		global $db;
		 $req=$db->prepare("SELECT * FROM `users` WHERE 
		   lastname LIKE '$re%' OR
		   firstname  LIKE '$re%' 
		   ");
		  
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	public static function getAllByPage($re,$page,$limit){
		global $db;
		 $req=$db->prepare("SELECT * FROM `users` WHERE 
		   lastname LIKE '$re%' OR
		   firstname  LIKE '$re%' 
		    LIMIT $page,$limit
		   ");
		  
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
		//*****************************************Fonction pour l'insertion des compte***************************************

	public  function Add()
		{
            global $db;
		  $req =$db->prepare("INSERT INTO `compte`(`login`, `nom_u`, `prenom_u`,`password`,`centre`) VALUES (:lg,:nom,:pre,:pass,:ctre)"); 
			 
		    $ok=$req->execute(Array(
			                      'lg'=>$this->login,
								  'nom'=>$this->nom_u,
								  'pre'=>$this->prenom_u,
								  'pass'=>$this->password,
								  'ctre'=>$this->centre
			  ));
			  
			  
			  $this->id_cpt=$db->lastInsertId();
			 
		 
		  
		 return $ok;
		
		}
    //**********************************Fonction pour afficher les Compte ****************************************
	
	
	public static function getAllById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM users WHERE id='$id'");
		
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
		
		
		
		
	}
	
	
	 //**********************************Fonction pour la modification**************************************************

	
		public  function Edit()
		{
            global $db;
		  $req =$db->prepare("UPDATE `users` SET `is_active`=:lg, `centre`=:nom  WHERE id=:idd "); 
			 
		    $ok=$req->execute(Array(
			                        'idd'=>$this->id,
									'lg'=>$this->is_active,
			                        'nom'=>$this->centre
								 
			  ));
		  
		 return $ok;
		
		}
	
	    //**********************************Fonction pour la suppression  *********************************************

	public static function delet($id)
		{
            global $db;
		  $req =$db->prepare("DELETE FROM `users` WHERE id ='$id'"); 
			  $req->execute();
		  	}
	    //**********************************Fonction pour la verification de login et le mot de passe****************************

	
public static function login($login,$pass)
	{
		 global $db;
		  $req =$db->prepare("SELECT * FROM `compte` WHERE `login`='$login' AND `password`='$pass'"); 
			  $req->execute();
		
		
		
		return $req->fetchAll(PDO::FETCH_OBJ);	
	}

	public static function detail($nom,$dat)
	{
		 global $db;
		  $req =$db->prepare("SELECT * FROM `compte` c , br b 
		                    WHERE br.id_cpt=c.id_cpt
							AND  `nom_u`='$nom'
							AND `date`='$dat'"); 
			  $req->execute();

		return $req->fetchAll(PDO::FETCH_OBJ);	
	}
		 
	
}

?>
