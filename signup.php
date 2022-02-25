
    <!-- Login script -->
    <?php include('./controllers/register.php'); ?>
     
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
<div   style="background-color:#664c28;color:white;" class="card card-header card-outline card-primary"><h5 class="title">Formulaire d'inscription</h5></div>
<div class="card-body">


    <!-- Login form -->
    <div class="container-fluid">
	<div class="card card-widget widget-user shadow">
       
       
       
        <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
       
  </div>
            
             
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <div class="modal-body">
                                <style>img {width: 50%;} @media (min-width: 40em) {main {width: 80%;}}
                            
                            </style>
                                <center><img src="logo_dgid.jpg"> </center>
                                
                <form action="" method="post">

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

                    <!-- Les autres variables -->
                    <?php echo $fNameEmptyErr; ?>
                    <?php echo $f_NameErr; ?>

                    <?php echo $l_NameErr; ?>
                    <?php echo $lNameEmptyErr; ?>

                    <?php echo $_emailErr; ?>
                    <?php echo $emailEmptyErr; ?>

                     

                    <?php echo $_passwordErr; ?>
                    <?php echo $passwordEmptyErr; ?>

                    <?php echo $co_password; ?>


                    <div class="form-group">
 
                        <input style="font-size:22px;" type="text" onkeyup="fname();" class="form-control" name="firstname" id="firstName" placeholder="Prénom" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" />
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="cni" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span><i class="fa fa-user"></i></span>
					</div>
                    
						 

                    <div class="form-group">
                    
                        <input style="font-size:22px;" type="text" onkeyup="lname();"  class="form-control" name="lastname" id="lastName" placeholder="Nom" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" />
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="lname" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span class=""><i class="fa fa-user"></i></span>
                    </div>
                     
                    <div class="form-group">
                    <span class=""><i class="fa fa-envelope"></i></span>
                        <input style="font-size:22px;" onkeyup="lemail()" type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" />
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="lmail" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span class=""><i class="fa fa-envelope"></i></span>
                    </div>
                     
                    <div class="form-group">
                        <input style="font-size:22px;" onkeyup="lpass()" type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" />
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="lpass" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span><i class="fa fa-eye" aria-hidden="false" onclick="passw_01()"></i></span>
                    </div>
                     
                    <div class="form-group">
                    
                        <input style="font-size:22px;" onkeyup="cpass()" type="password" class="form-control" name="c_password" id="c_password" placeholder="Confirmer Mot de passe" />
                        <span  style="background-color:white;border-color:none; color:transparent;padding:20.5px;font-size:25px;left: 90%;transform: translate(0, -50%);top: 50%;" id="cpass" class="input-group-text" id="inputGroupPrepend3"></span>
                        <span><i class="fa fa-eye" aria-hidden="false" onclick="passw_02()"></i></span>
                    </div>
                     
                              <div class="form-group checkbox">
                                    <input type="checkbox">
                                    <label>Se souvenir</label>
                                </div>

                                <a href="forgot.php" style="color:blue;text-decoration:none" class="forgot-pass">Mot de passe oublié ?</a>
                                <div class="form-group">
                                <button type="submit" type="submit" name="submit" id="submit" class="btn">Confirmer</button><br>
                                </div>
                                <button  class="btn"><a style="color:white;text-decoration:none" href="index.php">Se connecter</a>
 
</div>
<br> 
                    
                </form>
            </div>
        </div>
 
    </div>
</div>
</div>
</body>


<footer id="footer" style="background-color:#987654;">
    <strong>Copyright &copy; 2021 | Direction Générale des Impôts et des Domaines <a href="https://www.sourcecodester.com/"></a></strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 1.0</b>
    </div>
  </footer>
         
    
<script src="js/app.js"></script>
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