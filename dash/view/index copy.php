<!--?php
		session_start();
		if(!isset($_SESSION['password'])){
			header('location:../index.php');
			
		}
?-->
<!--?php $id=$_GET['id']; ?-->
<?php include "../incuser.php"; ?>
<?php
session_start();
if(!isset($_SESSION['userId'])){
  header("location:../loginuser.php");

}



?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DGID</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">    
   <link rel="shortcut icon"  href="img/view/logodgid.jpg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="dist/css/ionicons.min.css" rel="stylesheet" type="text/css">    
    
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
   
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
   
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css">
   
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css">
	
	 <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="dist/css/style.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <!--<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>-->

		
		 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <!--script type="text/javascript" src="dist/js/calendar.js"></script-->	
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="dist/js/traitement.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.form.js" type="text/javascript"></script>
	 <script src="dist/js/jquery.index.js" type="text/javascript"></script>
      <script src="dist/js/jquery.jclock-2.4.1.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body class="sidebar-mini skin-green-light wysihtml5-supported" onload="viewdata()" >
    <div class="wrapper">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['login_id'])): ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
    <?php endif; ?>
      <li>
        <a class="nav-link text-white"  href="./" role="button"> <large><b>Online Document Sharing System</b></large></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Google Font: Source Sans Pro -->
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
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
</head>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/photo.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p id="nomPre"><?php echo $_SESSION['userName'].' '.$_SESSION['userName']; ?></p>

              
            </div>
          </div>
		   <div id="di">
		  </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" id="menu">
          <ul class="sidebar-menu" id="menu">
            
          <li class="
      <?php 

      if($_GET['page']=="tbrd"   ){ echo 'active';}
      

      echo '<script>location.href="?page=d_se&&id='.$id.'";</script>';
      
      ?><a href="?page=tbrd"><i class="glyphicon glyphicon-home"></i> <span><strong>Acceuil</strong></span></a></li>

			<li class="
      <?php 

      if($_GET['page']=="marche" || $_GET['page']=="d_achat"  ){ echo 'active';}
      

      echo '<script>location.href="?page=d_achat&&id='.$id.'";</script>';
      
      ?><a href="?page=marche"><i class="glyphicon glyphicon-list-alt"></i> <span><strong>Marches</strong></span></a></li>
      <li class="
      <?php 

      if($_GET['page']=="bl" || $_GET['page']=="d_bl"  ){ echo 'active';}
      

      echo '<script>location.href="?page=d_bl&&id='.$id.'";</script>';
      
      ?><a href="?page=d_bl"><i class="glyphicon glyphicon-map-marker"></i> <span><strong>Locations</strong></span></a></li>

<li class="
      <?php 

      if($_GET['page']=="se" || $_GET['page']=="d_se"  ){ echo 'active';}
      

      echo '<script>location.href="?page=d_se&&id='.$id.'";</script>';
      
      ?><a href="?page=d_se"><i class="glyphicon glyphicon-tint"></i> <span><strong>Convention SENEAU</strong></span></a></li>
      <li class="
      <?php 

      if($_GET['page']=="se" || $_GET['page']=="d_se"  ){ echo 'active';}
      

      echo '<script>location.href="?page=d_se&&id='.$id.'";</script>';
      
      ?><a href="?page=d_se"><i class="glyphicon glyphicon-transfer"></i> <span><strong>Transactions Immobilieres</strong></span></a></li>
       
      
      
			
			<?php if($_SESSION['login'] == "Admin"){ ?>
			
			<li class="<?php if($_GET['page']=="compte"){ echo 'active';} ?>"><a href="?page=compte"><i class="fa fa-users"></i> <span><strong>Compte</strong></span></a></li>
			<?php
			} ?>


           
          </ul>
         </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           
		
		
        </section>
		<section class="content">
	
       <?php
	   
	   @$page = $_GET['page'];
	   switch($page){
		   
		   case 'tbord':include('tbrd.php'); echo "<script src='js/tbord.js'></script>"; 
		   break;
		    case 'medicament':include('medicament.php'); echo "<script src='js/medicament.js'></script>"; 
		   break;
		   case 'vente':include('vente.php'); echo "<script src='js/vente.js'></script>"; 
		   break;
		    case 'd_vente':include('d_vente.php'); echo "<script src='js/vente.js'></script>"; 
		   break;
		   case 'marche':include('marche.php'); echo "<script src='js/marche.js'></script>"; 
		   break;
		   case 'd_achat':include('d_achat.php'); echo "<script src='js/achat.js'></script>"; 
		   break;
		   case 'bl':include('bl.php'); echo "<script src='js/bl.js'></script>"; 
		   break;
		   case 'd_bl':include('d_bl.php'); echo "<script src='js/bl.js'></script>"; 
		   break;
       case 'se':include('se.php'); echo "<script src='js/se.js'></script>"; 
		   break;
		   case 'd_se':include('d_se.php'); echo "<script src='js/se.js'></script>"; 
		   break;
       case 'tr':include('tr.php'); echo "<script src='js/tr.js'></script>"; 
		   break;
		   case 'd_tr':include('d_tr.php'); echo "<script src='js/tr.js'></script>"; 
		   break;
		   case 'client':include('client.php'); echo "<script src='js/client.js'></script>"; 
		   break;
		    case 'fournisseur':include('fournisseur.php');echo "<script src='js/fourniiseur.js'></script>"; 
		   break;
		     case 'compte':include('compte.php');echo "<script src='js/compte.js'></script>";
		   break;
		    default :include('tbrd.php');echo "<script src='js/tbord.js'></script>"; 
	   }
	   
	   
	   
	   
	   ?>
        

        </section><!-- /.content -->

        <!-- Main content -->
        <!-- /.content -->
      </div><!-- /.content-wrapper -->
     <!-- SweetAlert2 -->
    </div>
     <footer class="main-footer">
    <strong>Copyright &copy; 2021.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Online Document Sharing System</b>
    </div>
  </footer>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="assets/plugins/toastr/toastr.min.js"></script>
<!-- Select2 -->
<script src="assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- dropzonejs -->
<script src="assets/plugins/dropzone/min/dropzone.min.js"></script>
<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function(){
	  $('.select2').select2({
	    placeholder:"Please select here",
	    width: "100%"
	  });
  })
	 window.start_load = function(){
	    $('body').prepend('<div id="preloader2"></div>')
	  }
	  window.end_load = function(){
	    $('#preloader2').fadeOut('fast', function() {
	        $(this).remove();
	      })
	  }
	 window.viewer_modal = function($src = ''){
	    start_load()
	    var t = $src.split('.')
	    t = t[1]
	    if(t =='mp4'){
	      var view = $("<video src='"+$src+"' controls autoplay></video>")
	    }else{
	      var view = $("<img src='"+$src+"' />")
	    }
	    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
	    $('#viewer_modal .modal-content').append(view)
	    $('#viewer_modal').modal({
	            show:true,
	            backdrop:'static',
	            keyboard:false,
	            focus:true
	          })
	          end_load()  

	}
	  window.uni_modal = function($title = '' , $url='',$size=""){
	      start_load()
	      $.ajax({
	          url:$url,
	          error:err=>{
	              console.log()
	              alert("An error occured")
	          },
	          success:function(resp){
	              if(resp){
	                  $('#uni_modal .modal-title').html($title)
	                  $('#uni_modal .modal-body').html(resp)
	                  if($size != ''){
	                      $('#uni_modal .modal-dialog').addClass($size)
	                  }else{
	                      $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
	                  }
	                  $('#uni_modal').modal({
	                    show:true,
	                    backdrop:'static',
	                    keyboard:false,
	                    focus:true
	                  })
	                  end_load()
	              }
	          }
	      })
	  }
	  window._conf = function($msg='',$func='',$params = []){
	     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
	     $('#confirm_modal .modal-body').html($msg)
	     $('#confirm_modal').modal('show')
	  }
	   
	   window.alert_toast= function($msg = 'TEST',$bg = 'success' ,$pos=''){
	   	var Toast = Swal.mixin({
	      toast: true,
	      position: $pos || 'top-end',
	      showConfirmButton: false,
	      timer: 5000
	    });
	    //   $('#alert_toast').removeClass('bg-success')
	    //   $('#alert_toast').removeClass('bg-danger')
	    //   $('#alert_toast').removeClass('bg-info')
	    //   $('#alert_toast').removeClass('bg-warning')

	    // if($bg == 'success')
	    //   $('#alert_toast').addClass('bg-success')
	    // if($bg == 'danger')
	    //   $('#alert_toast').addClass('bg-danger')
	    // if($bg == 'info')
	    //   $('#alert_toast').addClass('bg-info')
	    // if($bg == 'warning')
	    //   $('#alert_toast').addClass('bg-warning')
	    // $('#alert_toast .toast-body').html($msg)
	    // $('#alert_toast').toast({delay:3000}).toast('show');
	    console.log('TEST')
	      Toast.fire({
	        icon: $bg,
	        title: $msg
	      })
	  }
$(function () {
  bsCustomFileInput.init();

    $('.summernote').summernote({
        height: 300,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    })

  })

</script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>

<!-- PAGE assets/plugins -->
<!-- jQuery Mapael -->
<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


      
     
      
   
   
	
   
   
    
    
    </body>
	 
    
</html>