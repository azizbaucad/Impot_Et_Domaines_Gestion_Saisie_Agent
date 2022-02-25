
<!-- ******** recuperation de l'utilisateur qui s'est logger ***********-->
<!--html>
<head>
    <meta charset="UTF-8">
    <title>DGID</title>
    <link rel="stylesheet" href="style.css" />
    </head>
  <body-->

  <!--?php
     session_start();
     if(!isset($_SESSION['password'])){
       header('location:../index.php');
     }
    ?-->
	<!--?php include "../incuser.php"; ?-->
<!--?php
session_start();
if(!isset($_SESSION['userId'])){
  header("location:../loginuser.php");

}
?-->

<!--?php
     session_start();
     if(!isset($_SESSION['password'])){
       header('location:../index.php');
     }
    ?-->



<!--div class="col-lg-12"-->
	<!--div class="card"-->
		<!--div class="card-body"-->
<!-- Les Scripts de generation des messages -->
<script type="text/javascript">
function ninea() {
  document.getElementById("ninea").innerHTML = "Ce champs ne peut prendre que 9 caractères avec des lettres et/ou des chiffres et doit obligatoirement commencé par 00";
}
function mmht() {
  document.getElementById("mmht").innerHTML = "Ce champs ne peut contenir que des numérics";
}
function tel1() {
  document.getElementById("tel1").innerHTML = "Ce champs ne peut contenir que des numérics";
}
function tel2() {
  document.getElementById("tel2").innerHTML = "Ce champs ne peut contenir que des numérics";
}
function cni() {
  document.getElementById("cni").innerHTML = "Un cni de type sénégal doit comporter 13 chiffres et un cni de type CEDEAO doit comporter 17 chiffres";
}
</script>
<!-- END SCRIPT -->
		

        <?php
      session_start();
       ?>

		<?php if(isset($_POST['paj'])){
			
			// recuperation des session connecté for only user 
			$centre = $_SESSION['centre'] ;
			$num_agent = $_SESSION['num_agent'] ;
			$id_agent = $_SESSION['centre'].''.$_SESSION['num_agent'] ;
			
			
			
			?>
			
			<form>
				<!--input type="hidden" name="id" value="<!?php echo isset($id) ? $id : '' ?>"-->




				
<div class="card" style="width: 100rem;margin: auto;height:100%; width: 100% !important; align:center;">
<div   style="background-color :#987654; color:white;" class="card card-header card-outline"><h4>Formulaire du BR Marché<h4></div>
<div class="card-body" style="width: 100rem;margin: auto;height:100%;
   width: 100% !important; align:center; ">



                   

				<div class="container-fluid">
				<div class="card">
				<!--div class="panel panel-primary"-->
      			<div class="card card-header card-outline"><center><b><h5>Identifiants de l'agent de saisie</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
				<div class="col-md-4 mb-3">
				Centre des Services Fiscaux (CSF)
				<input type="text" class="form-control" id="ctri" placeholder="" value="<?php echo $centre; ?>" disabled>
				<!--div class="valid-tooltip">
					Looks good!
				</div-->
				</div>
				<div class="col-md-4 mb-3">
				Numéro Agent
				<input type="text" class="form-control" id="agti" placeholder="" value="<?php echo $num_agent; ?>" disabled >
				<!--div class="valid-tooltip">
					Looks good!
				</div-->
				</div>
				<div class="col-md-4 mb-3">
				ID Agent
				<div class="input-group">
					<div class="input-group-prepend">
					<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
					</div>
					<input type="text" class="form-control" id="idagti" value="<?php echo $id_agent; ?>" disabled placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
					<!--div class="valid-tooltip">
					Looks good!
				</div-->
				</div>

				</div>
				<div class="col-md-4 mb-3">
						Date de Saisie
						<input type="text" id="dt" class="form-control" disabled value="<?php echo date('Y-m-d'); ?>">
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
		     	</div>

				</div>
                </div>
				</div>
                

				<div class="container-fluid">
				<div class="card">
				<!--div class="panel panel-primary"-->
      			<div class="card card-header card-outline  "><center><b><h5>Description du marché</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
							
							<div class="col-md-4 mb-3">
							Intitulé du Marché
							<input type="text" class="form-control" id="imi" placeholder="" value="" >
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Date d'approbation
							<input class="form-control" id="dapi" name="date" placeholder="JJ-MM-AAAA"  type="date"/>
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Date d'enregistrement
							<input class="form-control" id="deni" type="date" />
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Maitre d'ouvrage
							<input type="text" class="form-control" id="moi" placeholder="" value="" >
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Montant Marché HT
							<input type="number" onclick="mmht()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" id="mmhti" placeholder="" value="" >
							<div id="mmht" style="color:red;font-weight:normal;font-style: normal;"></div>
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Montant Marché TTC
							<div class="input-group">
								<div class="input-group-prepend">
								<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
								</div>
								<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" id="mmttci" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
								
								<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							</div>

				</div>
                </div>
				</div>
                </div>
				 
				<div class="container-fluid">
				<div class="card">
				<!--div class="panel panel-primary"-->
      			<div class="card card-header card-outline  "><center><b><h5>Attributaire du marché</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
							
						<div class="col-md-4 mb-3">
						NINEA
						<input type="text" maxlength="9" oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" onclick="ninea()" class="form-control" id="nini" placeholder="" value="" >
						<div id="ninea" style="color:red;font-weight:normal;font-style: normal;"></div>
						</div>
						<div class="col-md-4 mb-3">
						Désignation de l'attributtaire
                        <input class="form-control" id="dati" name="date" type="text"/>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Adresse
                        <input class="form-control" id="adri" name="date"  type="text" />
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>

						<div class="col-md-4 mb-3">
						Type CNI
						<select style="width: 100%;height:65%;border: 1px solid gray; border-radius: 0px;" class="selectpicker" id="cnii">
						<option value="" selected>Selectionner le type de CNI</option>
 						 <option value="SN">SN</option>
 						 <option value="CEDEAO">CEDEAO</option>
 						 <option value="ETRANGER">ET</option>
						</select>
						<!--input type="text" class="form-control" id="cnii" placeholder="" value="" required-->
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						
						<div class="col-md-4 mb-3">
						Numéro CNI
						<div class="input-group">
							<div class="input-group-prepend">
							<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
							</div>
							<input style="width: 100%;height:100%;border: 1px solid gray; border-radius: 0px;" type="text" onclick="cni()" minlength="13" maxlength="17" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  class="form-control" id="cniei" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
							<div id="cni" style="color:red;font-weight:normal;font-style: normal;"></div>
						</div>
						</div>



						<div class="col-md-4 mb-3">
						Date délivrance CNI
						<input type="date" class="form-control" id="ddcnii" placeholder="" value="" >
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Type Passeport
						<select style="width: 100%;height:65%;border: 1px solid gray; border-radius: 0px;" class="selectpicker" id="type_ppoi">
 						 <option value="" selected>Selectionner le type de passeport</option>
 						 <option value="SN">SN</option>
 						 <option value="CEDEAO">CEDEAO</option>
 						 <option value="ETRANGER">ET</option>
						</select>
						<!--input type="text" class="form-control" id="cnii" placeholder="" value="" required-->
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">Passeport
						<input type="text" class="form-control" id="ppoi" placeholder="" value="" >
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Date délivrance passeport
						<div class="input-group">
							<div class="input-group-prepend">
							<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
							</div>
							<input type="date" class="form-control" id="ddppoi" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
							<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						</div>

						<div class="col-md-4 mb-3">
						Téléphone 1
						<input type="text" maxlength="9" onclick="tel1()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" id="tel1i" placeholder="" value="" >
						<div id="tel1"  style="color:red;font-weight:normal;font-style: normal;"></div>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Téléphone 2
						<input type="text" maxlength="9" onclick="tel2()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" id="tel2i" placeholder="" value="" >
						<div id="tel2"  style="color:red;font-weight:normal;font-style: normal;"></div>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						RIB 1
						<div class="input-group">
							<div class="input-group-prepend">
							<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
							</div>
							<input type="number" class="form-control" id="rib1i" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
							<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						</div>

						<div class="col-md-4 mb-3">
						RIB 2
						<input type="text" class="form-control" id="rib2i" placeholder="" value="" >
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Commentaires
						<textarea type="text" class="form-control" id="cmti" placeholder="" value="" ></textarea>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						

						 </div>
						 <!-- End -->

				</div>
                </div>
				</div>
				<div class="col-lg-12 text-right justify-content-center d-flex">
				<center><button style="background-color:maroon;color:white;" type="button" class="btn mr-2"    onclick="AjouDetBL();">Valider</button>
   					&nbsp;&nbsp;&nbsp;
   <button  class="btn btn-secondary" type="reset">Annuler</button></center>
   
				</div>
                </div>

				
				

				  

				</div>
                </div>
				</div>
                


			</form>
			<?php  }?>
		<!--/div>
	</div>
</div-->


<?php if(isset($_POST['gid'])) {
		 include('../Model/d_achat.class.php');
		 
		 $id_achat=$_POST['gid'];
		 $dt = $_POST['dt'];
		 $ctri=$_POST['ctri'];
   	     $agti=$_POST['agti'];
         $idagti=$_POST['idagti'];
		 $imi=$_POST['imi'];
		 $dapi=$_POST['dapi'];
         $deni=$_POST['deni'];
		 $moi=$_POST['moi'];
         $mmhti=$_POST['mmhti'];
		 $mmttci=$_POST['mmttci'];
         $nini=$_POST['nini'];
		 $dati=$_POST['dati'];
         $adri=$_POST['adri'];
		 $cnii=$_POST['cnii'];
         $cniei=$_POST['cniei'];
         $ddcnii=$_POST['ddcnii'];
		 $type_ppoi=$_POST['type_ppoi'];
		 $ppoi=$_POST['ppoi'];
         $ddppoi=$_POST['ddppoi'];
		 $tel1i=$_POST['tel1i'];
         $tel2i=$_POST['tel2i'];
		 $rib1i=$_POST['rib1i'];
         $rib2i=$_POST['rib2i'];
		 $cmti=$_POST['cmti'];

     
		 
		
		
		D_Achat::AjouDetBL($id_achat,$dt,$ctri,$agti,$idagti,$imi,$dapi,$deni,$moi,$mmhti,$mmttci,$nini,$dati,$adri,$cnii,$cniei,$ddcnii,$type_ppoi,$ppoi,$ddppoi,$tel1i,$tel2i,$rib1i,$rib2i,$cmti);
    
    
    
    echo '<script language="javascript">';
   // echo 'alert("Ajout réussi !!!")';
    echo '</script>';
    echo  "<script>location.href='../view/menu.php?page=achat';</script>";
        
    } ?>

	<!-- table de check --->
	<!--?php if(isset($_POST['tbl'])){?>
    <div class="table-responsive">
     
     	<table class="table table-striped table table-bordered table-condensed table-striped"  cellpadding="0" cellspacing="0" border="1" size="10" class="table table-condensed">
        
        <tr id="tt">
       
          <th>Centre</th>
          <th>N° Agent</th>
          <th>ID Agent</th>
          <th>Intitule Marche</th>
          <th>Date approbation</th>
          <th>Date d'enregistrement</th>
          <th>Maitre ouvrage</th>
          <th>Montant marché HT</th>
          <th>Montant marché TTC</th>
          <th>Ninea</th>
          <th>Designation attributaire</th>
          <th>Adresse</th>
          <th>CNI</th>
          <th>Date enregistrement CNI</th>
          <th>Passeport</th>
          <th>Date enregistrement passeport</th>
          <th>Telephone 1</th>
          <th>Telephone 2</th>
          <th>Rib 1</th>
          <th>Rib 2</th>
          <th>Commentaires</th>
          <th colspan="2" >Action</th> <colspan="2">
        </tr-->
		<!--?php } ?-->
        