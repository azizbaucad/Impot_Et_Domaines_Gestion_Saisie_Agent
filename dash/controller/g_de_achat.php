
<?php
          session_start();
       ?>

<?php if(isset($_POST['paj'])){
		
			$centre = $_SESSION['centre'] ;
			$num_agent = $_SESSION['num_agent'] ;
			//$id_agent = $_SESSION['centre'].''.$_SESSION['num_agent'] ;			
?>

<script type="text/javascript">
function ninea() {
	var nini=$("#nini").val();

	 if(nini.substr(0,2) == '00' && nini.length == 9 )  {
		//document.getElementById("nini").style.boxShadow = "0 0 5px green" ;
		//document.getElementById("ninea").style.boxShadow = "0 0 5px green";
		document.getElementById("nini").style.borderColor = "green";
		document.getElementById("ninea").style.borderColor = "green";
		document.getElementById("ninea").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		document.getElementById("ninea_reset").innerHTML =	""; 
	}
	 
	  else {
	//	document.getElementById("nini").style.boxShadow = "0 0 5px blue" ;
	//	document.getElementById("ninea").style.boxShadow = "0 0 5px blue";
		document.getElementById("nini").style.borderColor = "blue";
		document.getElementById("ninea").style.borderColor = "blue";
		document.getElementById("ninea").innerHTML = "";
		document.getElementById("ninea_reset").innerHTML =	"";  }
}
function imi_func() {
	var imi=$("#imi").val();
	if(imi !== '' ) {
	//	document.getElementById("imi").style.boxShadow = "0 0 5px green" ;
	//	document.getElementById("imiid").style.boxShadow = "0 0 5px green";
		document.getElementById("imi").style.borderColor = "green";
		document.getElementById("imiid").style.borderColor = "green";
		document.getElementById("imiid").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		document.getElementById("im_reset").innerHTML =	"";
	}
	else  {
		//document.getElementById("imi").style.boxShadow = "0 0 5px blue" ;
		document.getElementById("imi").style.borderColor = "blue";
	//	document.getElementById("imiid").style.boxShadow = "0 0 5px blue";
		document.getElementById("imiid").style.borderColor = "blue";
		document.getElementById("imiid").innerHTML = "";
		document.getElementById("im_reset").innerHTML =	""; 
	} 
}
function mmht() {
	var mmhti=$("#mmhti").val();
	if(mmhti > 0 ) {
		//document.getElementById("mmhti").style.boxShadow = "0 0 5px green" ;
		//document.getElementById("mmht").style.boxShadow = "0 0 5px green";
		document.getElementById("mmhti").style.borderColor = "green";
		document.getElementById("mmht").style.borderColor = "green";
		document.getElementById("mmht").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		//document.getElementById("ninea_reset").innerHTML =	""; 
	}
	 
	  else {
	//	document.getElementById("mmhti").style.boxShadow = "0 0 5px blue" ;
	//	document.getElementById("mmht").style.boxShadow = "0 0 5px blue";
		document.getElementById("mmhti").style.borderColor = "blue";
		document.getElementById("mmht").style.borderColor = "blue";
		document.getElementById("mmht").innerHTML = "";
		//document.getElementById("ninea_reset").innerHTML =	"";  }
}
}
	function mmttc_func() {
	var mmttci=$("#mmttci").val();
	if(mmttci > 0 ) {
	//	document.getElementById("mmttci").style.boxShadow = "0 0 5px green" ;
	//	document.getElementById("mmttc").style.boxShadow = "0 0 5px green";
		document.getElementById("mmttci").style.borderColor = "green";
		document.getElementById("mmttc").style.borderColor = "green";
		document.getElementById("mmttc").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		//document.getElementById("ninea_reset").innerHTML =	""; 
	}
	 
	  else {
		//document.getElementById("mmttci").style.boxShadow = "0 0 5px blue" ;
		//document.getElementById("mmttc").style.boxShadow = "0 0 5px blue";
		document.getElementById("mmttci").style.borderColor = "blue";
		document.getElementById("mmttc").style.borderColor = "blue";
		document.getElementById("mmttc").innerHTML = "";
		//document.getElementById("ninea_reset").innerHTML =	"";  }
}
  
}
function adr_func() {
	var adri=$("#adri").val();
	if(adri !== '') {
		//document.getElementById("adri").style.boxShadow = "0 0 5px green" ;
		//document.getElementById("adr").style.boxShadow = "0 0 5px green";
		document.getElementById("adri").style.borderColor = "green";
		document.getElementById("adr").style.borderColor = "green";
		document.getElementById("adr").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		document.getElementById("adr_reset").innerHTML =	"";
	}
	else  {
		//document.getElementById("adri").style.boxShadow = "0 0 5px blue" ;
		document.getElementById("adri").style.borderColor = "red";
	//	document.getElementById("adr").style.boxShadow = "0 0 5px blue";
		document.getElementById("adr").style.borderColor = "red";
		document.getElementById("adr").innerHTML = "";
		document.getElementById("adr_reset").innerHTML =	""; 
	} 
}
function tel1() {
	var tel1i=$("#tel1i").val();
	if ((tel1i.substr(0,2) == '77' && tel1i.length == 9) || (tel1i.substr(0,2) == '76' && tel1i.length == 9) || (tel1i.substr(0,2) == '70' && tel1i.length == 9) || (tel1i.substr(0,2) == '78' && tel1i.length == 9) || (tel1i.substr(0,2) == '33' && tel1i.length == 9) || (tel1i.substr(0,2) == '75' && tel1i.length == 9) ) {
		//document.getElementById("tel1i").style.boxShadow = "0 0 5px green" ;
		//document.getElementById("tel1").style.boxShadow = "0 0 5px green";
		document.getElementById("tel1i").style.borderColor = "green";
		document.getElementById("tel1").style.borderColor = "green";
		document.getElementById("tel1").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		document.getElementById("tel1_reset").innerHTML =	"";
		
	}
	else   {
	//document.getElementById("tel1i").style.boxShadow = "0 0 5px blue" ;
	document.getElementById("tel1i").style.borderColor = "blue";
	//document.getElementById("tel1").style.boxShadow = "0 0 5px blue";
	document.getElementById("tel1").style.borderColor = "blue";
	document.getElementById("tel1").innerHTML = "";
	document.getElementById("tel1_reset").innerHTML =	"";
	

}
  
}
function tel2() {
	var tel2i=$("#tel2i").val();
	if ((tel2i.substr(0,2) == '77' && tel2i.length == 9) || (tel2i.substr(0,2) == '76' && tel2i.length == 9) || (tel2i.substr(0,2) == '70' && tel2i.length == 9) || (tel2i.substr(0,2) == '78' && tel2i.length == 9) || (tel2i.substr(0,2) == '33' && tel2i.length == 9) || (tel2i.substr(0,2) == '75' && tel2i.length == 9) ) {
		//document.getElementById("tel2i").style.boxShadow = "0 0 5px green" ;
		//document.getElementById("tel2").style.boxShadow = "0 0 5px green";
		document.getElementById("tel2i").style.borderColor = "green";
		document.getElementById("tel2").style.borderColor = "green";
		document.getElementById("tel2").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
		document.getElementById("tel2_reset").innerHTML =	"";
		
	}
	else   {
//	document.getElementById("tel2i").style.boxShadow = "0 0 5px blue" ;
	document.getElementById("tel2i").style.borderColor = "blue";
//	document.getElementById("tel2").style.boxShadow = "0 0 5px blue";
	document.getElementById("tel2").style.borderColor = "blue";
	document.getElementById("tel2").innerHTML = "";
	document.getElementById("tel2_reset").innerHTML =	"";
	

}
}
function cni() {
	var cnii=$("#cnii").val();
	var cniei=$("#cniei").val();
	if ((cnii == "SN" && cniei.length == 13)) {

//	document.getElementById("cniei").style.boxShadow = "0 0 5px green" ;
//	document.getElementById("cni").style.boxShadow = "0 0 5px green";
	document.getElementById("cniei").style.borderColor = "green";
	document.getElementById("cni").style.borderColor = "green";
	document.getElementById("cni").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
	document.getElementById("cni_test").innerHTML =	"";
}
else if ((cnii == "CEDEAO" && cniei.length == 17)) {

//document.getElementById("cniei").style.boxShadow = "0 0 5px green" ;
//document.getElementById("cni").style.boxShadow = "0 0 5px green";
document.getElementById("cniei").style.borderColor = "green";
document.getElementById("cni").style.borderColor = "green";
document.getElementById("cni").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
document.getElementById("cni_test").innerHTML =	"";
}
 
else if ( (cnii == "SN" && cniei.length != 13 ) || ( cnii == "CEDEAO" && cniei.length != 17 ) ) {
	//document.getElementById("cniei").style.boxShadow = "0 0 5px blue" ;
	document.getElementById("cniei").style.borderColor = "blue";
	//document.getElementById("cni").style.boxShadow = "0 0 5px blue";
	document.getElementById("cni").style.borderColor = "blue";
	document.getElementById("cni").innerHTML = "";
	document.getElementById("cni_test").innerHTML =	"";
	 
}
 
else {
	document.getElementById("cni").innerHTML =	"";
	//document.getElementById("cni").style.boxShadow = "0 0 5px white";
	document.getElementById("cni").style.borderColor = "white";
	document.getElementById("cniei").style.borderColor = "white";
	//document.getElementById("cniei").style.boxShadow = "0 0 5px white" ;
	document.getElementById("cni_test").innerHTML = "" ;
}
}
function ppo() {
	var ppo=$("#ppoi").val();
	if ((ppo.length == 9)) {

//document.getElementById("ppoi").style.boxShadow = "0 0 5px green" ;
//document.getElementById("ppo").style.boxShadow = "0 0 5px green";
document.getElementById("ppoi").style.borderColor = "green";
document.getElementById("ppo").style.borderColor = "green";
document.getElementById("ppo").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
document.getElementById("ppo_reset").innerHTML =	"";
} 
else   {
	//document.getElementById("ppoi").style.boxShadow = "0 0 5px blue" ;
	document.getElementById("ppoi").style.borderColor = "blue";
	//document.getElementById("ppo").style.boxShadow = "0 0 5px blue";
	document.getElementById("ppo").style.borderColor = "blue";
	document.getElementById("ppo").innerHTML = "";
	document.getElementById("ppo_reset").innerHTML =	"";
	

}
 

}
function clearThis(target){
        if (target.value === "Selectionner le type de CNI") {
            target.value= "";
        }
    }
document.getElementById('cnii').onchange = function () 
{
    if (this.value == '') 
    {
		document.getElementById("cniei").value = "";
        document.getElementById("cniei").disabled = true;
		document.getElementById("cni").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family:sans-serif;font-weight:normal;'></h5></span>";
    }

    else 
    {
        document.getElementById("cniei").disabled = false;
    }
}
</script>
<!-- END SCRIPT -->
		

        
<style type="text/css">
					  .nin{

						font-size: 16px;font-weight: normal;line-height: 30px;width: 100%;min-height: 32.5px;
						border-radius: 10px;
						outline-color: BLUE !important;
						background-color: rgb(255, 255, 255);
						box-shadow: blue 0px 0px 0px 0px;
						border: 10px solid blue !transparent ;
						 

					  }
</style>
			



			<form>

<div class="card" style="width: 100rem;margin: auto;height:100%; width: 100% !important; align:center;">
<div   style="background-color :#987654; color:white;" class="card card-header card-outline"><h4>Formulaire du BR Marché<h4></div>
<div class="card-body" style="width: 100rem;margin: auto;height:100%;
   width: 100% !important; align:center; ">



                   

				<div class="container-fluid">
				<div class="card">
				<!--div class="panel panel-primary"-->
      			<div style="background-color :#987654; color:white;"  class="card card-header card-outline"><center><b><h5>Identifiants de l'agent de saisie</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
				<div class="col-md-4 mb-3">
				<label for="validationTooltip04" class="form-label">Centre des Services Fiscaux (CSF)</label>
				<input type="text" class="form-control nin" id="ctri" placeholder="" value="<?php echo $centre; ?>" disabled>
				<!--div class="valid-tooltip">
					Looks good!
				</div-->
				</div>
				<div class="col-md-4 mb-3">
				<label for="validationTooltip04" class="form-label">Numéro Agent</label>
				<input type="text" class="form-control nin" id="agti" placeholder="" value="<?php echo $num_agent; ?>" disabled >
				<!--div class="valid-tooltip">
					Looks good!
				</div-->
				</div>

				 
				<div class="col-md-4 mb-3">
				<label for="validationTooltip04" class="form-label">Date de Saisie</label>
						<input type="text" id="dt" class="form-control nin" disabled value="<?php echo date('Y-m-d'); ?>">
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
      			<div style="background-color :#987654; color:white;"  class="card card-header card-outline  "><center><b><h5>Description du marché</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
							
							<div class="col-md-4 mb-3">
							<label for="validationTooltip04" class="form-label">Intitule Marché<em style="font-size 12px;">*</em></label>
							<div class="input-group">
							<input type="text" class="form-control nin" id="imi" placeholder="" value="" onkeyup="imi_func();" >
							<span id="imiid" class="input-group-text" id="inputGroupPrepend3"></span>
							</div>
							<div id="im_reset"></div>
							</div>
							<div class="col-md-4 mb-3">
							<label for="validationTooltip04" class="form-label">Date approbation</label>
							<input class="form-control nin" id="dapi" name="date" placeholder="JJ-MM-AAAA"  type="date"/>
							<div id="imii"></div>
							</div>
							<div class="col-md-4 mb-3">
							<label for="validationTooltip04" class="form-label">Date enregistrement</label>
							<input class="form-control nin" id="deni" type="date" />
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							<label for="validationTooltip04" class="form-label">Maitre ouvrage</label>
							<input type="text" class="form-control nin" id="moi" placeholder="" value="" >

							</div>
							<div class="col-md-4 mb-3">
							<label for="validationTooltip04" class="form-label">Montant Marché HT</label>
							<div class="input-group">
							<input type="text" onkeyup="mmht()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control nin" id="mmhti" placeholder="" value="" >
							<span id="mmht" class="input-group-text" id="inputGroupPrepend3"></span>
							</div>
							</div>

							<div class="col-md-4 mb-3">
							<label for="validationTooltip04" class="form-label">Montant Marché TTC</label>
							<div class="input-group">
							<input type="TEXT" onkeyup="mmttc_func()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control nin" id="mmttci" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
						    <span id="mmttc" class="input-group-text" id="inputGroupPrepend3"></span>
							<div id="mmttc_text"></div>	
						</div>

				</div>
                </div>
				</div>
                </div>
				</div>
				 
				<div class="container-fluid">
				<div class="card">
				<!--div class="panel panel-primary"-->
      			<div style="background-color :#987654; color:white;" class="card card-header card-outline  "><center><b><h5>Attributaire du marché</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
					  		
						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">NINEA</label>
						<div class="input-group">
						<input style=""
						 type="text" maxlength="9" oninput="this.value=this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" onkeyup="ninea()" class="form-control nin" id="nini" placeholder="00 XXX XXX X" value="" >
						 <span id="ninea" class="input-group-text" id="inputGroupPrepend3"></span>
						</div>
						<div id="ninea_reset"></div>
						</div>

						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Désignation de l'attributtaire</label>
                        <input class="form-control nin" id="dati" name="date" type="text"/>
						</div>

						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Adresse<em style="font-size 12px;">*</em></label>
						<div class="input-group">
                        <input class="form-control nin" id="adri" name="date"  type="text" onkeyup="adr_func();" autocomplete="on" />
						<span id="adr" class="input-group-text" id="inputGroupPrepend3"></span>
						</div>
						<div id="adr_reset"></div>
					    </div>
						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Type CNI</label>
						<select id="cnii" class="nin"  style="font-size:12px;font-weight:normal;text-align:center;box-shadow:none;">
						<option value="" selected>Selectionner le type de CNI</option>
 						 <option value="SN">SN</option>
 						 <option value="CEDEAO">CEDEAO</option>
 						 <option value="ETRANGER">ET</option>
						</select>
						</div>
						
						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Numéro CNI</label>
						<div class="input-group">
						<div class="input-group">
							<input  type="text"  onfocus="clearThis(this)" onkeyup="cni()" disabled="disabled" minlength="13" maxlength="17" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  class="form-control nin" id="cniei" name="cniei" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
						<span id="cni" class="input-group-text" id="inputGroupPrepend3"></span>
						</div>
						<div id="cni_test"></div>
						</div>
						</div>



						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Date délivrance CNI</label>
						<input type="date" class="form-control nin" id="ddcnii" placeholder="" value="" >
						</div>

						 

						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Numéro Passeport</label>
						<div class="input-group">
						<input type="text" placeholder="XXX XXX XXX" maxlength="9" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" onkeyup="ppo();" class="form-control nin" id="ppoi" placeholder="" value="" >
						<span id="ppo" class="input-group-text" id="inputGroupPrepend3"></span>
						</div>
						<div id="ppo_reset"></div>
						</div>
						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Date délivrance passeport</label>
						<div class="input-group">
							<div class="input-group-prepend">
							<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
							</div>
							<input type="date" class="form-control nin" id="ddppoi" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
							<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						</div>

						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Téléphone 1</label>
						<div class="input-group">
						<input type="text" maxlength="9" onkeyup="tel1()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control nin" id="tel1i" placeholder="XX XXX XX XX" value="" >
						<span id="tel1" class="input-group-text" id="inputGroupPrepend3"></span>
						</div>
						<div id="tel1_reset"></div>
						</div>

						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">Téléphone 2</label>
						<div class="input-group">
						<input type="text" maxlength="9" onkeyup="tel2()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control nin" id="tel2i" placeholder="XX XXX XX XX" value="" >
						<span id="tel2" class="input-group-text" id="inputGroupPrepend3"></span>
						</div>
						<div id="tel2_reset"></div>
						</div>
						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">RIB 1</label>
						<div class="input-group">
							<div class="input-group-prepend">
							<!--span class="input-group-text" id="validationTooltipUsernamePrepend">@</span-->
							</div>
							<input type="text" class="form-control nin" id="rib1i" placeholder="" aria-describedby="validationTooltipUsernamePrepend" >
							 
						</div>
						</div>

						<div class="col-md-4 mb-3">
						<label for="validationTooltip04" class="form-label">RIB 2</label>
						<input type="text" class="form-control nin" id="rib2i" placeholder="" value="" >
						 
						</div>
						<div class="input-group">
						<label for="validationTooltip04" class="form-label">Commentaires</label>
						<textarea style="width:100%;height:auto;"   type="text" class="form-control nin" id="cmti" placeholder="" value="" ></textarea>
						</div>
						

						 </div>
						 <!-- End -->

				</div>
                </div>
				</div>
				<div class="col-lg-12 text-right justify-content-center d-flex">
				<center><button style="background-color:maroon;color:white;" type="button" class="btn mr-2"    onclick="AjouDetBL();">Valider</button>
   					&nbsp;&nbsp;&nbsp;
  			   <a style="text-decoration:none;" href="../view/menu.php?page=d_marche"  class="btn btn-secondary" type="reset">Annuler</a></center>
   
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

     
		 
		
		
		D_Achat::AjouDetBL($id_achat,$dt,$ctri,$agti,$imi,$dapi,$deni,$moi,$mmhti,$mmttci,$nini,$dati,$adri,$cnii,$cniei,$ddcnii,$ppoi,$ddppoi,$tel1i,$tel2i,$rib1i,$rib2i,$cmti);
    
    
    
    echo '<script language="javascript">';
   // echo 'alert("Ajout réussi !!!")';
    echo '</script>';
    echo  "<script>location.href='../view/menu.php?page=marche';</script>";
        
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
        