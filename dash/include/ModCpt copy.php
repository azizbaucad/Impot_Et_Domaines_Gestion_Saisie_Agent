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




 
<?php include('../Model/compte.class.php');

 foreach(Compte::getAllById($_POST['modi']) as $data);


?>


<div class="card" style="width: 70rem;margin: auto;
   width: 70% !important; ">
<div align="center"  style="background-color:blue;color:white;align:center;" class="card card-header card-inline card-primary"><h4>Modification d'un compte<h4></div>
<div class="card-body">


  
<div class="container-fluid">
	<div class="card card-widget widget-user shadow">
      <div class="widget-user-header bg-dark">
        <h3 class="widget-user-username"><?php echo ucwords($data->firstname); ?></h3>
        <h5 class="widget-user-desc"><?php echo $data->email ?></h5>
      </div>
      <div class="widget-user-image">
      	 
      	<span class="brand-image img-circle elevation-2 d-flex justify-content-center align-items-center bg-primary text-white font-weight-500" style="width: 50px;height:50px"><h4><?php echo strtoupper(substr($data->firstname, 0,1).substr($data->lastname, 0,1)) ?></h4></span>
      	 
         
      	 
      </div>
      <div class="card-footer">
        <div class="container-fluid">
        	<dl>
        		<dt>Address</dt>
        		<dd><?php echo $data->centre ?></dd>
        	</dl>
        	<dl>
        		<dt>User Type</dt>
        		<dd><?php echo $data->is_active ?></dd>
        	</dl>
        </div>
    </div>
	</div>
</div>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>
</form>
</div>
</div>
</div> 
</div>                        
</div>
</body>
</html>


  
   
  
  
  
  
  
  
  

<form id="ff" action="../controller/g_compte.php" method="post" >  
           <input type="hidden"  name="idd" id="idd"  value="<?php echo $data->id; ?>" />
        
       <div class="form-group col-md-6">  
                     
                            
                   <div class="form-group col-md-6">  
                       <label for="lastname" class="form-label col-lg-6">Status</label>
                        <select class="form-control col-lg-12" name="ctre" id="ctre" value="<?php echo $data->is_active; ?>">
                          <option value="<?php echo $data->is_active; ?>"><?php echo $data->is_active; ?></option>
                          <option value="1">Désactivé</option>
                        </select>
                   </div>   

                   <div class="form-group col-md-6">  
                       <label for="lastname" class="form-label col-lg-6">Centre</label>
                        <select class="form-control col-lg-12" name="ctre" id="ctre" value="<?php echo $data->centre; ?>">
                          <option value="<?php echo $data->centre; ?>"><?php echo $data->centre; ?></option>
                          <option value="GW">GW</option>
                          <option value="DK">DK</option>
                        </select>
                   </div>  
       
       
        
                   &nbsp;&nbsp;&nbsp;
                 
                   <div class="col-lg-12 text-right justify-content-center d-flex">
				<center><button type="button" class="btn btn-success"    onclick="AjouDetBL();">Save</button>
        &nbsp;&nbsp;
   <button  class="btn btn-danger" type="reset">cancel</button></center>
				</div>

               
</form>