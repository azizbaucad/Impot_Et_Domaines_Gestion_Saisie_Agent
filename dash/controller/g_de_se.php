
<!-- ******** recuperation de l'utilisateur qui s'est logger ***********-->
<!--html>
<head>
    <meta charset="UTF-8">
    <title>DGID</title>
    <link rel="stylesheet" href="style.css" />
    </head>
  <body-->

  <!--?php include "../incuser.php"; ?-->
<!--?php
session_start();
if(!isset($_SESSION['userId'])){
  header("location:../loginuser.php");

}
?-->
    

  <script type="text/javascript">
  function leadingZeros(input) {
    if(!isNaN(input.value) && input.value.length === 1) {
      input.value = '00' + input.value;
    }
  }

 /* function addHash(elem) {
  var val = elem.value;
  if(!val.match(/^SN/)) {
    elem.value = "SN" + val;
  }
} */
// function Ajax for digit

$(document).ready(function () {
  //called when key is pressed in textbox
  $("#mmhti").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
      
        $("#mmhti").attr("placeholder","Montant Marche HT"); 
           

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html(" Entrez que des valeurs numériques !!! ").show().fadeOut("slow");
         $("mmhti").attr("placeholder","errmsg");
               return false;
    }
   // return true;
     
   });
  // return true;
});
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#mmttci").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
      
        $("#mmttci").attr("placeholder","Montant Marche TTC"); 
           

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errttc").html(" Entrez que des valeurs numériques !!! ").show().fadeOut("slow");
         $("mmhttc").attr("placeholder","errttc");
               return false;
    }
   // return true;
     
   });
 //  return true;
});
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#nini").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
      
        $("#nini").attr("placeholder","Ninea"); 
           

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errnin").html(" Entrez que des valeurs numériques !!! ").show().fadeOut("slow");
         $("nini").attr("placeholder","errnini");
               return false;
    }
   // return true;
     
   });
 //  return true;
});

// Fonction to display option
function copyTextValue() {
  const c = document.getElementById("source").value ;
  const cniei = document.getElementById("cniei") ;
  cniei.value.lenght="";
  if (c=="SN") {
    //const d = document.getElementById("cniei").value ;
    //if (d.lenght <= 6){
      //alert('Doit comporter 13 char!!!!');
      if (cniei.value.length != cniei.maxLength) {
        alert("veuillez saisir un nombre de 6");
      //alert("Ce champs ne doit pas comporter que 6 char") ;
    }
   // else alert("veuillez saisir un nombre de 6");
    /*else if (cniei.length > 13) {
      alert("Ce champs ne doit pas comporter que 13 char") ;
    }*/
    
    
  }
  else if (c=="CEDEAO") {
    if (cniei.value.length != cniei.minLength) {
      alert("veuillez saisir un nombre de 4");
      //alert("Ce champs ne doit pas comporter que 6 char") ;
    }
    //else alert("veuillez saisir un nombre de 4");
   // alert('Doit comporter 16 char');
  }
  else alert('Doit comporter N char');
  
}

// Fonction manage country
function Country() {
  var text1 = document.getElementById("country").value;
  document.getElementById("rib1i").value = text1;
}
function Country1() {
  var text1 = document.getElementById("country1").value;
  document.getElementById("rib2i").value = text1;
}

function Phone() {
  var text1 = document.getElementById("phone").value;
  document.getElementById("tel1i").value = text1;
}
function Phone2() {
  var text1 = document.getElementById("phone2").value;
  document.getElementById("tel2i").value = text1;
}

  
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength);
  }

  document.getElementById("ajgda").onclick = function () { 
   // var ves = parseFloat(document.getElementById("cnii").value);
    const cnii = document.getElementById('cnii')
    const imi = document.getElementById('imi')
    const cniei = document.getElementById('cniei')
    const dapi = document.getElementById('dapi')
    const ddcnii = document.getElementById('ddcnii')
    const deni = document.getElementById('deni')
    const ppoi = document.getElementById('ppoi')
    const moi = document.getElementById('moi')
    const ddppoi = document.getElementById('ddppoi')
    const mmhti = document.getElementById('mmhti')
    const tel1i = document.getElementById('tel1i')
    const mmttci = document.getElementById('mmttci')
    const tel2i = document.getElementById('tel2i')
    const nini = document.getElementById('nini')
    const rib1i = document.getElementById('rib1i')
    const dati = document.getElementById('dati')
    const rib2i = document.getElementById('rib2i')
    const adri = document.getElementById('adri')
    const cmti = document.getElementById('cmti')

    

    //var fn = $("#ppoi").val();
    //var regex = /^[0-9a-zA-Z\_]+$/
//const imi = document.getElementById('imi')
    let messages = []

    // fonction to  required

    /*if (cnii.value.length <= 6 ) {
      alert('le cnni ne peut pa etre inferieur ou egale à 6 char')  ;
    }
    if (cnii.value.length >= 20) {
      alert('le cnni ne peut pas depasser 20 char') ; 
    } 
    else if (cnii.value.length == '' || cnii.value == null) {
     alert('Saisir le champs cnii') ;
    }*/
     if (imi.value == '' || imi.value == null) {
      alert('Saisir le champs imi') ;
    } 
    else if (cniei.value.length != cniei.minLength && cniei.value.length != cniei.maxLength) {
     // cniei.value.length=cniei.value.length;
      alert('sasir un nombre de  4 ou de 6 char selon le cni');
     

      //alert('non');
      
    }
    
    /*else if (cniei.value.length < cniei.maxLength ) {
     // cniei.value.length=cniei.value.length;
      alert('non');
    }*/
    /*else if (cniei.value.length < 16 || cniei.value.length > 16) {
      copyTextValue();
    }*/
    
    //else if (cniei.value.length ) {
     // copyTextValue();
      //alert("Ce champs ne doit pas comporter que 13 char") ;
    //}
    //else if (cniei.value.length > 13) {
      //copyTextValue();
      //alert("Ce champs ne doit pas comporter que 13 char") ;
   // }
    
    else if (dapi.value == '' || dapi.value == null) {
      alert('Saisir le champs date appro') ;
    }
    else if (ddcnii.value == '' || ddcnii.value == null) {
      alert('Sasisir le date enregistremnt ')  ;
    }
    else if (deni.value == '' || deni.value == null) {
      alert('Saisir le deni') ;
    } 

    else if (ppoi.value.length < 9 || ppoi.value.length > 9) {
      alert('Le passeport doit etre égal à 9 caractères et ne doit pas avoir de char special');
    }
   /* else if (ppoi.value.length > 9) {
      alert('Le passeport doit etre égal à 9 caractères et ne doit pas avoir de char special');
    }*/

    /*else if (ppoi.value=/^[a-zA-Z0-9]+$/.test("SoS007")) {
      alert("AlphaNUme");
    }*/

    else if (ppoi.value == '' || ppoi.value == null) {
      alert('Saisir le passport') ;
    }
    else if (moi.value == '' || moi.value == null) {
      alert('Sasisir le maitre ouvrage ')  ;
    }
    else if (ddppoi.value == '' || ddppoi.value == null) {
      alert('Saisir le champs date denerrige passport') ;
    }
    else if (mmhti.value == '' || mmhti.value == null) {
      alert('Sasisir le montant marche ht')  ;
    }
    
    else if (tel1i.value == '' || tel1i.value == null) {
      alert('Saisir le telephone 1') ;
    }
    else if (tel1i.value.length < 9 || tel1i.value.length > 9) {
      alert('Le Telephone doit etre égal à 9 caractères et ne doit pas avoir de char special');
    }
    else if (mmttci.value == '' || mmttci.value == null) {
      alert('Sasisir le motant marche ttc')  ;
    }
    else if (tel2i.value == '' || tel2i.value == null) {
      alert('Saisir telephone 2') ;
    }
    else if (tel2i.value.length < 9 || tel2i.value.length > 9) {
      alert('Le Telephone doit etre égal à 9 caractères et ne doit pas avoir de char special');
    }
    else if (nini.value == '' || nini.value == null) {
      alert('Sasisir le champs ninea')  ;
    }
    else if (rib1i.value == '' || rib1i.value == null) {
      alert('Saisir le rib 1') ;
    }
    else if (dati.value == '' || dati.value == null) {
      alert('Sasisir le designation attributtaire')  ;
    }
    else if (rib2i.value == '' || rib2i.value == null) {
      alert('Saisir le champs Rib 2') ;
    }
    else if (adri.value == '' || adri.value == null) {
      alert('Sasisir le champs adresse ')  ;
    }
    else if (cmti.value == '' || cmti.value == null) {
      alert('Saisir le champs comentaires') ;
    }
    else AjouDetBL();
    
     };

</script>


    
    <!--doctype html-->


    <!--******************************************** Detail BR au lieu de Achat *********************************************-->
    
    
    
    
    
    
   
     <!--*************************************************LA SUPPRESSION BR au lieu de BL*******************************-->  
     
	  <?php  if(isset($_POST['iddA'])){
		
	 include('../Model/d_achat.class.php');
	
	$nbrl=count(D_Achat::getById($_POST['idA']));
	if($nbrl>1){
		
		 D_Achat::DeById($_POST['iddA']);
		 
		echo  "<script>location.href='../view/index.php?page=d_achat&&id=".$_POST['idA']."';</script>";
		
	}else{
		
		 include('../Model/achat.class.php');	 
		Achat::DeByIdA($_POST['idA']);
        
	echo  "<script>location.href='../view/index.php?page=achat';</script>";

		}

	} ?>

  

    <!--*************************************************Ajout Detail BR au lieu de BL*******************************-->
    

     <?php if(isset($_POST['paj'])){ ?>

     <div class="table-responsive">
       <form name="formulaire"  >
	 <table class="tableCommune" border=1 size=1 align="center">
     
     <tr align="right" class='ca'>
          <td align="right" class='ca'><label>Centre</label>&nbsp;&nbsp;&nbsp;<input style="text-align:center; FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;color:black; background-color:#C0C0C0;" size="30"  type="text" class="" disabled="disabled" placeholder="Intitule Marche" id="ctri" required="" readonly value="<?php echo $_SESSION['centre']; ?>"></td>
          <td><label>N° Agent </label>&nbsp;&nbsp;&nbsp;<input  style="text-align:center; FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;color:black; background-color:#C0C0C0;"  size="30"  type="text" class="" disabled="disabled" placeholder="Intitule Marche" id="agti" required="" readonly value="<?php echo $_SESSION['id_cpt']; ?>"></td>
          <td><label>ID Agent</label>&nbsp;&nbsp;&nbsp;<input  style="text-align:center;  FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;color:black; background-color:#C0C0C0;"  size="30"  type="text" class="" disabled="disabled" placeholder="Intitule Marche" id="idagti" required="" readonly value="<?php echo $_SESSION['centre'].''.$_SESSION['id_cpt']; ?>"></td>
        </tr>
        <tr> 
          <td><label>N° Convention</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="N° Convention" id="nconvi" required></td>
          <td><label>N° Police</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="N° Police" id="npolii" required></td>
          <td><label>Prenom & nom proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Prenom & nom proprietaire" id="pnpropi" required></td>
        </tr>
        <tr> 
          <td><label>Adresse proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Adresse proprietaire" id="adrpropi" required></td>
          <td><label>CNI proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="CNI proprietaire" id="cnipropi" required></td>
          <td><label>Date delivrance CNI proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Date delivrance CNI proprietaire" id="ddcnipropi" required></td>
        </tr>
        <tr> 
          <td><label>Passeport proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Passeport proprietaire" id="pppropi" required></td>
          <td><label>Date delivrance passeport proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Date delivrance passeport proprietaire" id="ddpppropi" required></td>
          <td><label>Telephone 1 proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Telephone 1 proprietaire" id="tel1propi" required></td>
        </tr>
        <tr> 
          <td><label>Telephone 2 proprietaire</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Telephone 2 proprietaire" id="tel2propi" required></td>
          <td><label>Prenom & Nom representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Prenom & nom representant" id="pnrepri" required></td>
          <td><label>Adresse representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Adresse representant" id="adrrepri" required></td>
        </tr>
        <tr> 
          <td><label>CNI representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="CNI representant" id="cnirepri" required></td>
          <td><label>Date delivrance CNI representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Date delivrance CNI representant" id="ddcnirepri" required></td>
          <td><label>Passeport representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Passeport representant" id="pprepri" required></td>
        </tr>
        <tr> 
          <td><label>Date delivrance passeport representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Date delivrance passeport representant" id="ddpprepri" required></td>
          <td><label>Telephone 1 representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Telephone 1 representant" id="tel1repri" required></td>
          <td><label>Telephone 2 representant</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Telephone 2 representant" id="tel2repri" required></td>
        </tr>
        <tr> 
          <td><label>Commune</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Commune" id="comi" required></td>
          <td><label>Nombre appartements</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Nombre appartements" id="nbrappri" required></td>
          <td><label>Date enregistrement</label>&nbsp;&nbsp;&nbsp;<input  size="45" autofocus type="text" value="" class="" placeholder="Date enregistrement" id="datenr" required></td>
        </tr>
        <tr> 
          <td><label>Commentaires</label>&nbsp;&nbsp;&nbsp;<textarea  size="45" autofocus type="text" value="" class="" placeholder="Commentaires" id="cmti" required></textarea>
          </tr>
	 </table>
   <br>
   
   <center><input type="submit" class="btn btn-success" value="valider" id="ajgda"  class="boutonValider" onclick="AjouDetBL();"/>
   &nbsp;&nbsp;&nbsp
   <input class="boutonAnnuler btn btn-default" value="Annuler"   type="reset" class="boutonAnnuler"/></center>
     </form>
     </div>
	 
	<?php  }?>
    
    
    <?php if(isset($_POST['gid'])) {
		 include('../Model/d_achat.class.php');
		 
		 $id_achat=$_POST['gid'];
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
		 $ppoi=$_POST['ppoi'];
     $ddppoi=$_POST['ddppoi'];
		 $tel1i=$_POST['tel1i'];
     $tel2i=$_POST['tel2i'];
		 $rib1i=$_POST['rib1i'];
     $rib2i=$_POST['rib2i'];
		 $cmti=$_POST['cmti'];

     
		 
		
		
		D_Achat::AjouDetBL($id_achat,$ctri,$agti,$idagti,$imi,$dapi,$deni,$moi,$mmhti,$mmttci,$nini,$dati,$adri,$cnii,$cniei,$ddcnii,$ppoi,$ddppoi,$tel1i,$tel2i,$rib1i,$rib2i,$cmti);
    
    
    
    echo '<script language="javascript">';
    echo 'alert("Ajout réussi !!!")';
    echo '</script>';
    echo  "<script>location.href='../view/index.php?page=d_achat&&id=".$_POST['gid']."';</script>";
        
    } ?>

    <!--********************************************Medicament*****************************************************-->  
	
    <?php if(isset($_POST['tbl'])){?>
    <div class="table-responsive">
     
     	<table class="table table-striped table table-bordered table-condensed table-striped"  cellpadding="0" cellspacing="0" border="1" size="10" class="table table-condensed">
        
        <tr id="tt">
       
          <th>Centre</th>
          <th>N° Agent</th>
          <th>ID Agent</th>
          <th>N° Convention</th>
          <th>N° Police</th>
          <th>Prenom & nom proprietaire</th>
          <th>Adresse proprietaire</th>
          <th>Date delivrance CNI proprietaire</th>
          <th>Passeport proprietaire</th>
          <th>Date delivrance passeport proprietaire</th>
          <th>Telephone 1 proprieatire</th>
          <th>Telephone 2 proprieatire</th>
          <th>Prenom & nom representant</th>
          <th>Adresse representant</th>
          <th>CNI representant</th>
          <th>Date delivrance CNI representant</th>
          <th>Passeport representant</th>
          <th>Date delivrance passeport representant</th>
          <th>Telephone 1 representant</th>
          <th>Telephone 2 representant</th>
          <th>Commune</th>
          <th>Nombre appartements</th>
          <th>Date enregistrement</th>
          <th>Commentaires</th>
          <th colspan="2" >Action</th> <colspan="2">
        </tr>
        <?php 
		include('../Model/d_achat.class.php');
		
		   $nb = count(D_Achat::GetAllD($_POST['id']));
		if($nb>0){
			
			foreach(D_Achat::GetAllD($_POST['id']) as $data){@$rs+= $data;
				
			 ?>
        <tr>
        
        <td><?php echo $_SESSION['centre']; ?></td>
        <td><?php echo $_SESSION['id_cpt']; ?></td>
        <td><?php echo $_SESSION['centre'].''.$_SESSION['id_cpt']; ?></td>
        <td><?php echo $data->im; ?></td>
        <td><?php echo $data->dap; ?></td>
        <td><?php echo $data->den; ?></td>
        <td><?php echo $data->mo; ?></td>
        <td><?php echo number_format("$data->mmht", 0, '', ' '); ?></td>
        <td><?php echo $data->mmttc; ?></td>
        <td><?php echo $data->nin; ?></td>
        <td><?php echo $data->dat; ?></td>
        <td><?php echo $data->adr; ?></td>
        <td><?php echo $data->cni; ?></td>
        <td><?php echo $data->ddcni; ?></td>
        <td><?php echo $data->ppo; ?></td>
        <td><?php echo $data->ddppo; ?></td>
        <td><?php echo $data->tel1; ?></td>
        <td><?php echo $data->tel2; ?></td>
        <td><?php echo $data->rib1; ?></td>
        <td><?php echo $data->rib2; ?></td>
        <td><?php echo $data->cmt; ?></td>
        
        <td><a href="javascript:delet(<?php  echo $data->id_d_br; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="supprimer" ></a></td>
      
        
       </tr>   
      
       <?php } ?>
        <tr>
       </tr> <?php  }else{  ?>
			<tr>
 <td colspan="5"><center><?php echo "Aucune Donnée"; ?></center></td>
</tr>
     
     
     <?php } }?>
       </table>
     
     </div>  

    <style>





    
  html {
	height:100%;
}




input {
	border-style: solid;
	border-width : 1px;
	border-color : #AAAAAA;
  padding: 10px;
}

.lienFondVert {
	color:#EEEEEE;
	text-decoration: underline;
}

.lienFondVert:hover {
	color:#006573;
	text-decoration: underline;
	BACKGROUND:#EEEEEE;
}

.lienFondBlanc {
	color:#006573;
	text-decoration: underline;
}

.lienFondBlanc:hover {
	color:#EEEEEE;
	text-decoration: underline;
	BACKGROUND:#006573;
}

.tableLoginGSS {
	width:100%;
	height:100%;
	BACKGROUND:#006573;
}

.tableLoginGSS tr td {
	text-align: left;
}

.tableBandeauHaut {
	width:100%;
	height:5%;
	BACKGROUND:#006573;
}

.tableBandeauHaut tr td {
	color:white;
}

.spanNomStock, .spanTitreAdministration {
	color:#EEEEEE;
	FONT-SIZE: 20px;
}

a {
	TEXT-DECORATION:none;COLOR: #83112A;
}

a:hover {
	COLOR: #1C6FBD;
}

.tableCommune {
	border-collapse:separate;
}

.tableCommune tr th {
	padding:4px;
	padding-left:5px;
	padding-right:5px;
	BACKGROUND:#b0e0e6 	;
}

.tableCommune tr {
	BACKGROUND:#f4efd0;
}

.tableCommune tr:hover {
	BACKGROUND:#f4d4ad;
}

.tableCommune  tr td  {
	padding-top:2px;
	padding-bottom:2px;
	padding-left:10px;
	padding-right:10px;
}

button {
	padding:6px 0 6px 0;
	color:#fff;
	cursor:pointer;
	border-radius:2px;
	border:none;
	width:100px;
}

.bouton {
	background:#56abac;
}

.bouton:focus {
	outline: none;
}

.bouton:hover {
	background:#f4d4ad;
}

.boutonValider {
	background:#298A08;
}

.boutonValider:hover {
	background:#00FF00;
}

.boutonAnnuler {
	background:#d34836;
}

.boutonAnnuler:hover {
	background:#FF0000;
}

.menu {
	color:#FFFFFF;
	display:block;
	width:300px;
	height:30px;
	font-weight:bold;
	BACKGROUND:#56abac;
	text-align: center;
	line-height: 30px;
}

.menu:hover {
	BACKGROUND:#f4d4ad;
}

.tdDroiteStock {
	border-left: 2px solid #006573;
	FONT-SIZE: 10px;
	font-weight:bold;
}

.tableStockADroite {
	border-collapse:separate;
}

.tableStockADroite tr th {
	padding:4px;
	FONT-SIZE:9px;
}

.tableStockADroite tr {
	BACKGROUND:#f4d4ad;
	font-weight:normal;
}

.tableStockADroite tr td {
	padding:4px;
	BACKGROUND:white;
	FONT-SIZE: 9px;
}

.tdQuantite {
	text-align:center;
}

.tdQuantiteNegative {
	text-align:center;
	font-weight:bold;
	color:#EE0000;
}

.tdQuantiteVirtuelle {
	text-align:center;
	color:#006573;
}

.tdQuantiteVirtuelleNegative {
	text-align:center;
	font-weight:bold;
	color:#EE0000;
}

.tdPrix {
	text-align:right;
}

.attention {
	color:#EE0000;
}

.attention b {
	color:#EE0000;
}

h1 {
	color:#006573;
	FONT-SIZE: 15px;
	text-shadow : 2px 2px 5px #aaa;
}

.erreur  {
	color:red;
	font-weight:bold;
}

#errmsg , #errttc , #errnin
{
color: red;



}



img  {
    border:0px;
}
table , td , th{
  border: 1px solid white;
  padding: 1px;
}
fieldset {
  margin-bottom: 15px;
  padding: 10px;
}




    </style>

    



    
     <!--/body-->
	 
    
<!--/html-->



    
     
     
     
     
     