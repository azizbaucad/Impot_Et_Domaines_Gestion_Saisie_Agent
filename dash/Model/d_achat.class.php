<?php 


require("connexion.php");

class D_Achat{
	
	
	public $id_d_br;
	//public $id_br;
	public $date_saisie;
	public $centre;
	public $agent;
	public $im;
	public $dap;
	public $den;
	public $mo;
	public $mmht;
	public $mmttc;
	public $nin;
	public $dat;
	public $adr;
	public $cni;
	public $cnie;
	public $ddcni;
	public $type_ppo;
	public $ppo;
	public $ddppo;
	public $tel1;
	public $tel2;
	public $rib1;
	public $rib2;
	public $cmt;
	
	
	
	
	
	
	public  function __construct($id,$date_saisiec,$ctrc,$agtc,$imc,$dapc,$denc,$moc,$mmhtc,$mmttcc,$ninc,$datc,$adrc,$cnic,$cniec,$ddcnic,$ppoc,$ddppoc,$tel1c,$tel2c,$rib1c,$rib2c,$cmtc){
		$this->id_d_br=$id;
		///$this->id_br=$id;
		$this->date_saisiec=$date_saisie;
		$this->centre=$ctrc;
		$this->agent=$agtc;
		$this->im=$imc;
		$this->dap=$dapc;
		$this->den=$denc;
		$this->mo=$moc;
		$this->mmht=$mmhtc;
		$this->mmttc=$mmttcc;
		$this->nin=$ninc;
		$this->dat=$datc;
		$this->adr=$adrc;
		$this->cni=$cnic;
		$this->cnie=$cniec;
		$this->ddcni=$ddcnic;
		//$this->type_ppo=$type_ppoc;
		$this->ppo=$ppoc;
		$this->ddppo=$ddppoc;
		$this->tel1=$tel1c;
		$this->tel2=$tel2c;
		$this->rib1=$rib1c;
		$this->rib2=$rib2c;
		$this->cmt=$cmtc;
		/*$this->id_m=$idm;
		$this->qte_a=$qt;
		$this->im=$imh;
		$this->dda=$ddap;
		$this->dde=$ddet;*/

	}
	
    //****************************Fonction pour afficher les detaille achat avec la Pagination****************************

     public static function GetAllD($id){
		global $db;
		$req=$db->prepare("SELECT * FROM d_br db WHERE db.id_br='$id' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	    //****************************Fonction pour afficher les detaille achat*********************************************

	
	  public static function getById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM `d_br` WHERE id_br='$id'");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	    //****************************Fonction pour l'insertion des detaille Achat*********************************************

		//$centre_c=$_SESSION['centre'] ;
	
	
		public static function AjouDetBL($id,$date_saisiec,$ctrc,$agtc,$imc,$dapc,$denc,$moc,$mmhtc,$mmttcc,$ninc,$datc,$adrc,$cnic,$cniec,$ddcnic,$ppoc,$ddppoc,$tel1c,$tel2c,$rib1c,$rib2c,$cmtc){
		global $db;
		//$centrec=$_SESSION['centre'] ;
		$req=$db->prepare("INSERT INTO `d_br`(
			`id_d_br`,
			 `date_saisie`,
			 `centre`,
			 `agent`,
			 `im`,
			 `dap`,
			 `den`,
			 `mo`,
			 `mmht`,
			 `mmttc`,
			 `nin`,
			 `dat`,
			 `adr`,
			 `cni`,
			 `cnie`,
			 `ddcni`,
			  
			 `ppo`,
			 `ddppo`,
			 `tel1`,
			 `tel2`,
			 `rib1`,
			 `rib2`,
			 `cmt`
			 ) VALUES
			  ('',
			  '$date_saisiec',
			  '$ctrc',
			  '$agtc',
			  '$imc',
			  '$dapc',
			  '$denc',
			  '$moc',
			  '$mmhtc',
			  '$mmttcc',
			  '$ninc',
			  '$datc',
			  '$adrc',
			  '$cnic',
			  '$cniec',
			  '$ddcnic',
			  '$ppoc',
			  '$ddppoc',
			  '$tel1c',
			  '$tel2c',
			  '$rib1c',
			  '$rib2c',
			  '$cmtc'

			  )");
			  
		$ok=$req->execute(); 
		
		
	    
	  }

	  //**********************************Fonction pour la modification**************************************************

	
		public  function Edit()
		{
            global $db;
		  $req =$db->prepare("UPDATE `d_br` SET 
		                                   `centre`=:ctri,
										   `agent`=:agti,
										  `id_agent`=:idagti, 
		                                  `im`=:imi,
										  `dap`=:dapi, 
										  `den`=:deni,
										  `mo`=:moi,
										  `mmht`=:mmhti, 
										  `mmttc`=:mmttci,
										  `nin`=:nini,
										  `dat`=:dati, 
										  `adr`=:adri,
										  `cni`=:cnii,
										  `cnie`=:cniei, 
										  `ddcni`=:ddcnii,
										  `type_ppo`=:type_ppoi,
										  `ppo`=:ppoi, 
										  `ddppo`=:ddppoi,
										  `tel1`=:tel1i,
										  `tel2`=:tel2i, 
										  `rib1`=:rib1i,
										  `rib2`=:rib2i,
										  `cmt`=:cmti
										   WHERE id=:idd "); 
			 
		    $ok=$req->execute(Array(
			                        'idd'=>$this->id_d_br,
									'imi'=>$this->im,
			                        'dapi'=>$this->dap
								 
			  ));
		  
		 return $ok;
		
		}
	
	
		//****************************Fonction pour la suppression des detaille Achat************************************

	public static function DeById($id){
			global $db; 
		  $req =$db->prepare("DELETE FROM d_br WHERE id_d_br='$id'");
		  $req->execute();
		}
	
	
	
	

}


?>