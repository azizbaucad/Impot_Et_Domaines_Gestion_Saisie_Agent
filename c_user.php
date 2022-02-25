<?php include('./controllers/user_activation.php'); ?>
<?php include('./controllers/code_login.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>DGID</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
<div class="mt-2 col-md-12"><div class="mt-2 col-md-12"></div></div>
<div class="mt-2 col-md-12"><div class="mt-2 col-md-12"></div></div>
<body style="background-color:beige">
<!-- <!?php include('../php-user-authentication/header.php'); ?> -->


    <!-- Header -->
    <!-- <div class="mt-2 col-md-12"><div class="mt-2 col-md-12"></div></div> -->
    <div class="card" style="width: 1rem;margin: auto;height:95%;
   width: 70% !important; align:center; ">
<div   style="background-color:#664c28;color:white;" class="card card-header card-outline card-primary"><h5 class="title">Code d'activation</h5></div>
<div class="card-body">


    <!-- Login form -->
    <div class="container-fluid">
	<div class="card card-widget widget-user shadow">
       
       
      <div class="card-footer">
        <div class="container-fluid h-50 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
       
  </div>
            
             
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <!-- <button type="button" class="" data-dismiss="modal" aria-label="Close"><span aria-hidden="false"></span></button> -->
                            <div class="modal-body">
                                
                                <!-- <h3 class="title">Récupération</h3> -->
                                <!-- <p class="description">Login here Using Email & Password</p> -->
                                

                <form action="" method="post">
                    <?php echo $email_already_verified; ?>
                    <?php echo $email_verified; ?>
                    <?php echo $activation_error; ?>
                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>
                    <style>img {width: 40%;} @media (min-width: 40em) {main {width: 80%;}}
                            
                            </style>
                                <center><img src="code.jpg"> </center>
                    <!-- <label>Code d'activation</label> -->
                    <div class="form-group">
                    <span class=""><i class="fa fa-key"></i></span>
                        <!--label>Email</label-->
                        
                        <input style="font-size:22px;" type="text" class="form-control" name="email_signin" id="email_signin" placeholder="Saisir le code d'activation" />
                         
                   
                    </div>
                   <!--  <br> -->
 

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-success btn-lg btn-block">Confirmer

                    </button><br>
                    <!-- <p><a href="signup.php" style="color:red">Veuillez vous inscrire si vous n'avez pas de compte.</a><br></p>

                    <a href="forgot.php" style="color:blue">Mot de passe oublier.</a>
                     -->
                </form>
            </div>
        </div>
</div>
            <!--p class="lead">Votre compte vient d'être vérifier, merci de cliquer sur le lien pour se connecter</p>
            <a class="btn btn-lg btn-success" href="code.php"
               >Connexion
            </a-->
        </div>
    </div>


</body>

<!-- <footer id="footer" style="background-color:maroon;">
    <strong>Copyright &copy; 2021 | Direction Générale des Impôts et des Domaines <a href="https://www.sourcecodester.com/"></a></strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 1.0</b>
    </div>
  </footer>
         
    

 --><style>
    #footer
{
    background-color:maroon;
    position:fixed;
    bottom:0px;
    left:0px;
    right:0px;
    height:20px;
    margin-bottom:0px;
    color:white;
}
        
          
span {
            position: absolute;
            left: 10px;
            transform: translate(0, -50%);
            top: 50%;
            
        }
        .fa{
            font-size:28px;
            color:none;
        }
          
        
    </style>

</html>