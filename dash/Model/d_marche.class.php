<?php 


require("connexion.php");

class D_Marche{
	
	
	public $id_d_br;
	 
	public $im;
	public $dap;
	/* public $den;
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
	public $cmt; */
	
	
	
	
	
	
	public  function __construct($id,$imc,$dapc ){
		$this->id_d_br=$id;
		 
		 
		$this->im=$imc;
		$this->dap=$dapc;
		/* $this->den=$denc;
		$this->mo=$moc;
		$this->mmht=$mmhtc;
		$this->mmttc=$mmttcc;
		$this->nin=$ninc;
		$this->dat=$datc;
		$this->adr=$adrc;
		$this->cni=$cnic;
		$this->cnie=$cniec;
		$this->ddcni=$ddcnic;
		$this->type_ppo=$type_ppoc;
		$this->ppo=$ppoc;
		$this->ddppo=$ddppoc;
		$this->tel1=$tel1c;
		$this->tel2=$tel2c;
		$this->rib1=$rib1c;
		$this->rib2=$rib2c;
		$this->cmt=$cmtc; */
		/*$this->id_m=$idm;
		$this->qte_a=$qt;
		$this->im=$imh;
		$this->dda=$ddap;
		$this->dde=$ddet;*/

	}
	
     

	  //**********************************Fonction pour la modification**************************************************

	
		public  function Edit()
		{
            global $db;
            
		  $req =$db->prepare("UPDATE `d_br` SET `im`=:imi, `dap`=:dapi WHERE id_d_br=:idd "); 
			 
		    $ok=$req->execute(Array(
			                        'idd'=>$this->id_d_br,
									'imi'=>$this->im,
			                        'dapi'=>$this->dap
									 				 
			  ));
		  
		 return $ok;
		
		}
	
	
		 
	
	

}


?>