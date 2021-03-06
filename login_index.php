
    <!-- Login script -->
    <?php include('./controllers/login.php'); ?>
     
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

<body style="background-color:beige">
<?php include('../php-user-authentication/header.php'); ?>


    <!-- Header -->
    <div class="mt-2 col-md-12"><div class="mt-2 col-md-12"></div></div>
    <div class="card" style="width: 100rem;margin: auto;height:100%;
   width: 70% !important; align:center; ">
<div   style="background-color:#664c28;color:white;" class="card card-header card-outline card-primary"><h5 class="title">Formulaire de connexion</h5></div>
<div class="card-body">


    <!-- Login form -->
    <div class="container-fluid">
	<div class="card card-widget widget-user shadow">
       
       
      <div class="card-footer">
        <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
       
  </div>
            
             
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <!-- <button type="button" class="" data-dismiss="modal" aria-label="Close"><span aria-hidden="false"></span></button> -->
                            <div class="modal-body">
                            <style>img {width: 30%;} @media (min-width: 40em) {main {width: 50%;}}
                            
                            </style>
                                <center><img src="login.jpg"> </center>
                                <!-- <h3 class="title">Se connecter</h3> -->
                                
                                <!-- <p class="description">Login here Using Email & Password</p> -->
                                

                <form action="" method="post">
                    <!-- <h3>Se connecter</h3> -->

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                    <div class="form-group">
                    <span class=""><i class="fa fa-user"></i></span>
                        <input style="font-size:22px;" onkeyup="lemail()" type="email" class="form-control" name="email_signin" id="email_signin" placeholder="E-mail" />
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="lmail" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span class=""><i class="fa fa-envelope"></i></span>
                    </div>
                     

                    <div class="form-group">
                    <span>
                            <i class="fa fa-eye"
                            aria-hidden="false" onclick="test()"></i>
                        </span>
                        
                        <!--label>Mot de passe</label-->
                        <input style="font-size:22px;" onkeyup="lpass()" type="password" class="form-control" name="password_signin" id="password_signin" placeholder="Mot de passe"/>
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="lpass" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span><i class="fa fa-eye" aria-hidden="false" onclick="passw_01()"></i></span>
                   

                            
                    </div>
                              <div class="form-group checkbox">
                                    <input type="checkbox">
                                    <label>Se souvenir</label>
                                </div>

                                <a href="forgot.php" style="color:blue;text-decoration:none" class="forgot-pass">Mot de passe oubli?? ?</a>
                                <div class="form-group">
                                <button type="submit" name="login" style="background-color:#664c28" id="sign_in" class="btn">Confirmer</button><br>
                                </div>
                                <button  class="btn"><a style="color:white;text-decoration:none" href="signup.php">S'inscrire</a>
 
</div>
<br><!-- <p><a href="signup.php" class="forgot-pass" style="color:red">Veuillez vous inscrire si vous n'avez pas de compte.</a><br></p> -->
                    
                     

                    <!-- <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Confirmer

                    </button><br>
                    <p><a href="signup.php" style="color:red">Veuillez vous inscrire si vous n'avez pas de compte.</a><br></p>

                    <a href="forgot.php" style="color:blue">Mot de passe oublier.</a> -->
                    
                </form>
            </div>
        </div>
</div>
    </div>
</div>
</div>
<!-- <br><br><br><br><br><br><br><br>
    <!-- <section id="promo" class="promo section offset-header" style="background-color:#F5F5DC;"> -->
    <!--footer class="main-footer" style="background-color:maroon;color:white;">
    <strong>Copyright &copy; 2021 <a href="https://www.sourcecodester.com/"></a></strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 1.0</b>
    </div>
  </footer-->
          
    </section>
    
    <script src="js/app.js"></script>
    <footer id="footer">
    <strong>Copyright &copy; 2021 | Direction G??n??rale des Imp??ts et des Domaines <a href="https://www.sourcecodester.com/"></a></strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 1.0</b>
    </div>
  </footer>
</body>


         
    

<style>
    #footer
{
    background-color:#987654;
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