<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
  ob_start();
  $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
  ?>
  <title><?php echo $title; ?></title></title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
	select{
		font-family: fontAwesome
	}
</style>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <?php ob_end_flush() ?>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">    
   <link rel="shortcut icon"  href="img/view/logodgid.jpg">

   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">    
   <link rel="shortcut icon"  href="img/logodgid.jpg">
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
     <script type="text/javascript" src="dist/js/calendar.js"></script>	
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="dist/js/traitement.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.form.js" type="text/javascript"></script>
	 <script src="dist/js/jquery.index.js" type="text/javascript"></script>
      <script src="dist/js/jquery.jclock-2.4.1.js" type="text/javascript"></script>
     
     
	 
  <!-- For table head -->

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
 <!--BEST Datatable  -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.9/css/fixedHeader.dataTables.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js"></script>
 <!-- END BEST Datatable  -->

  <link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet">
  <link href="https://unpkg.com/bootstrap-table@1.18.3/dist/extensions/sticky-header/bootstrap-table-sticky-header.css" rel="stylesheet">
  <!-- For table head -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     
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
  <link rel="stylesheet" href="assets/dist/css/style.css">

  <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/extensions/sticky-header/bootstrap-table-sticky-header.min.js"></script>


	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
	/* Custom style */
    .navbar{
         
    }
    .aside{
      background-color: #987654;
    }
</style>
  
</head> 
<!-- End of Header -->


 
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div  class="wrapper">
<nav style="background-color :#987654;height:3px;padding-bottom:10px;" class="main-header navbar navbar-inverse navbar-fixed-top ">
  
<ul class="navbar-nav">
      <!--?php if(isset($_SESSION['login_id'])): ?-->
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i style="color:white;" class="fas fa-bars fa-2x"></i></a>
      </li>
    <!--?php endif; ?-->
      <!-- <li>
        <a class="nav-link text-white"  href="#" role="button"> <large><b><h5> 
DGID | Direction Générale des Impôts et des Domaines | Plateforme de saisie des données de sources internes</h5> </b></large></a>
      </li> -->
    </ul>

    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link " href="../../logout.php" title="Se déconnecter"><i style="color:white;" class='fas fa-sign-out-alt fa-2x'></i>
    </a>
    </li>


     
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" title="Agrandir" href="#" role="button">
          <i style="color:white;" class="fas fa-expand-arrows-alt fa-2x"></i>
        </a>
      </li> -->
   
  </div>
</nav>
  </br></br>
 
  <!-- /.navbar -->


   

  
  <aside style="background-color:#98774;" class="main-sidebar sidebar-dark-default elevation-6">
  <div class="dropdown" mt-4>
   	<a style="text-decoration: none;" href="javascript:void(0)" class="brand-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
         
         
          <span class="image">
            <img src="assets/uploads/1605057840_avatar.jpg" style="width: 38px;height:38px" class="img-circle elevation-2" alt="User Image">
          </span>
         
        <span class="brand-text font-weight-light"><b><?php echo ucwords($_SESSION['firstname'].' '.$_SESSION['lastname']) ?><b></span>

      </a>
      <div class="dropdown-menu" style="background-color:red;">
        <!-- <a class="dropdown-item manage_account" href="javascript:void(0)">Manage Account</a>
        <div class="dropdown-divider"></div> -->
        <a class="dropdown-item" href="../../logout.php"><h3 style="color:white">Se deconnecter</h3></a>
      </div>
    </div><br>
    
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
          <?php if($_GET['page']=="tbrd")?>
            <a href="?page=tbrd" class="nav-link content-link bg-light">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Accueil
              </p>
            </a>
            
          </li>    
        <!--?php if($_SESSION['login_type'] == 1): ?-->
        <li class="nav-item">
            <a href="#" style="background-color:green;" class="nav-link nav-is-tree nav-edit_document nav-view_document text-light bg-dark">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
                Marché
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <?php if($_GET['page']=="marche" || $_GET['page']=="d_marche")?>
                <a href="?page=d_marche" class="nav-link nav-new_user tree-item bg-light">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
              <?php if($_GET['page']=="marche" || $_GET['page']=="d_marche")?>
                <a href="?page=marche" class="nav-link nav-user_list tree-item bg-light">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Liste</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_document nav-view_document text-light bg-dark">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
                Compte
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <?php if($_GET['page']=="compte") ?>
                <a href="?page=compte" class="nav-link nav-new_document tree-item bg-light">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Liste</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./index.php?page=document_list" class="nav-link nav-document_list tree-item bg-light">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li> -->
            </ul>
          </li>  
        <!--?php else: ?-->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_document nav-view_document bg-success">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
                Documents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document" class="nav-link nav-new_document tree-item bg-light">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list" class="nav-link nav-document_list tree-item bg-light">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>   -->
        <!--?php endif; ?-->
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
      $('.manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})
  </script>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <br>
    <!-- Content Header (Page header) -->
    <!--div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"-->
             
              
            <!--?php if ($title == "Achat")?></h1-->
          <!--/div--><!-- /.col -->

        <!--/div--><!-- /.row -->
            <!--hr class="border-primary"-->
      <!--/div--><!-- /.container-fluid -->
    <!--/div-->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <?php 
          $page = isset($_GET['page']) ? $_GET['page'] : 'home';
          include $page.'.php';
          ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://www.sourcecodester.com/"></a></strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 1.0</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->


<!-- SweetAlert2 -->
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
        
       case 'marche':include('marche.php'); echo "<script src='js/achat.js'></script>"; 
		   break;
		   case 'd_marche':include('d_marche.php'); echo "<script src='js/achat.js'></script>"; 
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
		  // default :include('tbrd.php');echo "<script src='js/tbord.js'></script>"; 
	   }
	   
	   
	   
	   
	   ?>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

</body>
</html>