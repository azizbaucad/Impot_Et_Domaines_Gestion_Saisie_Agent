<!--?php
		$cpt = $_SESSION['userId'];
?-->
<?php 


require("connexion.php");

class Achat{
	
	public $id_br;
	public $id_cpt; // id au lie de ic_cpt
	public $date;
	
	
	
	public function __construct($id,$idcpt,$dte){
		$this->id_br=$id;
		$this->id_cpt=$idcpt;
		$this->date=$dte;
	}
	
	//*****************************************Fonction pour afficher les Bon de recouvrement / au lieu de achat***************************************
	 
	 public static function GetAll($re){
		global $db;
		$req=$db->prepare(" SELECT * FROM br b,users u WHERE u.id = b.id_cpt AND u.lastname LIKE '$re%' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}


	public static function getAllById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM d_br WHERE id_d_br='$id'");
		
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	
	public static function GetAllPag($re,$page,$limit){
		global $db;
		$req=$db->prepare("SELECT * FROM br b ,users u WHERE u.id = b.id_cpt AND u.lastname LIKE '$re%'  LIMIT $page,$limit ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	
	} 

	public static function GetAllmarche($re){
		global $db;
		$req=$db->prepare(" SELECT * FROM d_br  where centre LIKE '$re%' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	public static function GetAllPagmarche($re,$page,$limit){
		global $db;
		$req=$db->prepare("SELECT * from d_br where  centre LIKE '$re%'  LIMIT $page,$limit ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
		
	}

	//*********************************Fonction pour afficher les coompte au lieu de fournisseur sur selected**********************************
	
	
	
	public static function GetByF($idd){
        $id=$_SESSION['id'];
		global $db;
		$req=$db->prepare("SELECT * FROM br b , users u WHERE u.'$id' = b.id_cpt AND b.id_br='$idd' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	
	
	
	//*********************************Fonction pour l'Ajoute BR Mrarches au lieu de Achat****************************************************
	
	
		
		public static function ADDAchat($fo,$dt){
			global $db; 
		  $req =$db->prepare("INSERT INTO `br`(`id_br`, `id_cpt`, `date`) VALUES ('','$fo','$dt')");
		  $req->execute();
		  $ok=$db->lastInsertId();
			 return $ok;
		}
	
	
	//*********************************Fonction pour l'Ajoute BR Location au lieu de Achat****************************************************
	
	
		
	public static function ADDLocation($fo,$dt){
		global $db; 
	  $req =$db->prepare("INSERT INTO `bl`(`id_bl`, `id_cpt`, `date`) VALUES ('','$fo','$dt')");
	  $req->execute();
	  $ok=$db->lastInsertId();
		 return $ok;
	}

//*********************************Fonction pour l'Ajoute BR Location au lieu de Achat****************************************************
	
	
		
public static function ADDSeneau($fo,$dt){
	global $db; 
  $req =$db->prepare("INSERT INTO `se`(`id_se`, `id_cpt`, `date`) VALUES ('','$fo','$dt')");
  $req->execute();
  $ok=$db->lastInsertId();
	 return $ok;
}

//********************************************** ADDTrans() */

public static function ADDTrans($fo,$dt){
	global $db; 
  $req =$db->prepare("INSERT INTO `tr`(`id_tr`, `id_cpt`, `date`) VALUES ('','$fo','$dt')");
  $req->execute();
  $ok=$db->lastInsertId();
	 return $ok;
}






	
	
	//*********************************Fonction pour la suppresion**********************************
	
	
	
	
	
	public static function DeByIdA($id){
			global $db; 
			try{
				$db->beginTransaction();
		        //$req =$db->prepare("DELETE FROM br WHERE id_br='$id'");
		        $sql =$db->prepare("DELETE FROM d_br WHERE id_d_br='$id'");
		        $sql->execute();
				//$req->execute();
		        $db->commit();
		  
			}catch(Exeception $e){
				$db->rollBack();
			}
		}
		
		
		//*********************************Fonction pour Calculer la somme d'achat Veillez commentez non interessant pour le moment*********************************
	
	
public static function NbrBl(){
		global $db;
		$req=$db->prepare("SELECT SUM(id_d_br) FROM d_br GROUP BY id_d_br");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}

	//**********************************Fonction pour la suppression  *********************************************

	public static function delet($id)
		{
            global $db;
		  $req =$db->prepare("DELETE FROM `d_br` WHERE id_d_br ='$id'"); 
			  $req->execute();
		}
		
}

?>