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

 foreach(Compte::getAllById($_POST['vis']) as $data);


?>


<div class="card" style="width: 95rem;margin: auto;
   width: 95% !important; ">
<div style="background-color:#007bff;color:white;" class="card card-header card-inline card-primary"><h4>Profil d'un agent<h4></div>
<div class="card-body">


  
<div class="container-fluid">
	<div class="card card-widget widget-user shadow">
      <div class="widget-user-header bg-dark">
        <h3 class="widget-user-username"><?php echo ucwords($data->firstname); ?></h3>
        <h5 class="widget-user-desc"><?php echo $data->email ?></h5>
      </div>
      <div class="widget-user-image">
      	 
      	<span class="brand-image img-circle elevation-2 d-flex justify-content-center align-items-center bg-primary text-white font-weight-350" style="width: 80px;height:80px"><h4><?php echo strtoupper(substr($data->firstname, 0,1).substr($data->lastname, 0,1)) ?></h4></span>
      	 
         
      	 
      </div>
      <div class="card-footer">
        <div class="container-fluid">
        	<dl>
        		<dt>Telephone</dt>
        		<dd><?php echo $data->mobilenumber ?></dd>
        	</dl>
        	<dl>
        		<dt>Status</dt>
        		<dd><?php echo $data->is_active ?></dd>
        	</dl>
            <dl>
        		<dt>Centre</dt>
        		<dd><?php echo $data->centre ?></dd>
        	</dl>
            <dl>
        		<dt>Numéro</dt>
        		<dd><?php echo $data->num_agent ?></dd>
        	</dl>
            <dl>
        		<dt>Identifiant</dt>
        		<dd><?php echo $data->centre.$data->num_agent ?></dd>
        	</dl>
            <div class="modal-footer display p-0 m-0">
            <a onclick="javascript:edit(<?php  echo $data->id; ?>)" type="button" class="btn btn-success" data-dismiss="modal">Modifier</a>
        <a href="./menu.php?page=compte"type="button" class="btn btn-danger" data-dismiss="modal">Close</a>
</div>
        </div>
    </div>
</div> 
</div>                        
</div>
</body>
</html>


  
   
  
  
  
  
  
  
  
  