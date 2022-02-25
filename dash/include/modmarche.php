

<!--?php include('./controllers/register.php'); ?-->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <title>DGID</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>   

 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>



<script type="text/javascript">


jQuery(function(){
	
	
	var v =jQuery("#ff").validate({
		
		submitHandler:function(form){
			
			jQuery(form).ajaxSubmit({
				target:"#reponse"
				});
		}
		});
}); 
</script>
 
<?php include('../Model/achat.class.php');

 foreach(Achat::getAllById($_POST['modi_marche']) as $data);


?>


<form id="ff" action="../controller/g_achat.php" method="post">
<input type="hidden"  name="idd" id="idd"  value="<?php echo $data->id_d_br; ?>" />
 
<div class="card">
<div   style="background-color:maroon; color:white;" class="card card-header card-outline"><h4>Formulaire du BR Marché<h4></div>
<div class="card-body">



                   

				<div class="container-fluid">
				<div class="card">
				<!--div class="panel panel-primary"-->
      			<div class="card card-header card-outline card-maroon"><center><b><h5>Identifiants de l'agent de saisie</h5></b></center></div>
      			<div class="card-body">


				  <div class="form-row">
				<div class="col-md-4 mb-3">
				Centre des Services Fiscaux (CSF)
				<input type="text" class="form-control" id="ctri" name="ctri" placeholder="" value="<?php echo $data->centre; ?>" disabled required>
				<!--div class="valid-tooltip">
					Looks good!
				</div-->
				</div>
				<div class="col-md-4 mb-3">
				Numéro Agent
				<input type="text" class="form-control" id="agti" name="agti" placeholder="" value="<?php echo $data->agent; ?>" disabled required>
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
					<input type="text" class="form-control" id="idagti" name="idagti" placeholder=""value="<?php echo $data->id_agent; ?>" disabled placeholder="" aria-describedby="validationTooltipUsernamePrepend" required>
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
      			<div class="card card-header card-outline card-maroon"><center><b><h5>Description du marché</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
							
							<div class="col-md-4 mb-3">
							Intitulé du Marché
							<input type="text" class="form-control" name="imi"   value="<?php echo $data->im; ?>" required>
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Date d'approbation
							<input class="form-control" name="dapi" placeholder=""name="dapi" value="<?php echo $data->dap; ?>"  type="date"/>
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Date d'enregistrement
							<input class="form-control" id="deni" name="deni" placeholder=""type="date" value="<?php echo $data->den; ?>" />
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Maitre d'ouvrage
							<input type="text" class="form-control" id="moi" name="moi" placeholder="" value="<?php echo $data->mo; ?>" required>
							<!--div class="valid-tooltip">
						Looks good!
					</div-->
							</div>
							<div class="col-md-4 mb-3">
							Montant Marché HT
							<input type="number" onclick="mmht()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" id="mmhti" name="mmhti" placeholder="" value="<?php echo $data->mmht; ?>" required>
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
								<input type="number"  value="<?php echo $data->mmttc; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" id="mmttci" name="mmttci" placeholder="" aria-describedby="validationTooltipUsernamePrepend" required>
								
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
      			<div class="card card-header card-outline card-maroon"><center><b><h5>Attributaire du marché</h5></b></center></div>
      			<div class="card-body">

				  <div class="form-row">
							
						<div class="col-md-4 mb-3">
						NINEA
						<input type="text" onclick="ninea()" class="form-control" id="nini" name="nini" placeholder="" value="<?php echo $data->nin; ?>" required>
						<div id="ninea" style="color:red;font-weight:normal;font-style: normal;"></div>
						</div>
						<div class="col-md-4 mb-3">
						Désignation de l'attributtaire
                        <input class="form-control" id="dati" value="<?php echo $data->dat; ?>" name="dati" type="text"/>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Adresse
                        <input class="form-control" id="adri" name="adri" value="<?php echo $data->adr; ?>"  type="text" />
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>

						<div class="col-md-4 mb-3">
						Type CNI
						<select class="form-control" id="cnii" name="cnii" placeholder="">
 						 <option selected ><?php echo $data->cni; ?></option>
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
							<input type="number" value="<?php echo $data->cnie; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  class="form-control" id="cniei" name="cniei" placeholder="" aria-describedby="validationTooltipUsernamePrepend" required>
							<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						</div>



						<div class="col-md-4 mb-3">
						Date délivrance CNI
						<input type="date" class="form-control" id="ddcnii" name="ddcnii" placeholder="" value="<?php echo $data->ddcni; ?>" required>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Type Passeport
						<select class="form-control" id="type_ppoi" name="type_ppoi" placeholder="">
 						 <option selected><?php echo $data->type_ppo; ?></option>
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
						<input type="text" class="form-control" id="ppoi" name="ppoi" placeholder="" value="<?php echo $data->ppo; ?>" required>
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
							<input type="date" value="<?php echo $data->ddppo; ?>" class="form-control" id="ddppoi" name="ddppoi" placeholder="" aria-describedby="validationTooltipUsernamePrepend" required>
							<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						</div>

						<div class="col-md-4 mb-3">
						Téléphone 1
						<input type="number" value="<?php echo $data->tel1; ?>" class="form-control" id="tel1i" name="tel1i" placeholder=""  required>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Téléphone 2
						<input type="number" class="form-control" id="tel2i" name="tel2i" placeholder="" value="<?php echo $data->tel2; ?>" required>
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
							<input type="text" class="form-control" id="rib1i" name="rib1i" placeholder=""  value="<?php echo $data->rib1; ?>" required>
							<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						</div>

						<div class="col-md-4 mb-3">
						RIB 2
						<input type="text" class="form-control" id="rib2i" name="rib2i" placeholder="" value="<?php echo $data->rib2; ?>" required>
						<!--div class="valid-tooltip">
					Looks good!
				</div-->
						</div>
						<div class="col-md-4 mb-3">
						Commentaires
						<textarea type="text" class="form-control" id="cmti" name="cmti" placeholder="" value="<?php echo $data->cmt; ?>" required><?php echo $data->cmt; ?></textarea>
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
				<center><button style="background-color:maroon;color:white;" type="submit" id="ModCpt" name="ModCpt" class="btn   mr-2">Valider</button>
   &nbsp;&nbsp;&nbsp;
   <a href="menu.php?page=achat"  class="btn btn-secondary" type="reset">Annuler</a></center>
				</div>

                </div>

				
				
				  

				</div>
                </div>
				</div>
                


			</form>


</body>
</html>


  
   
  
  
  
  
  
  
  
  