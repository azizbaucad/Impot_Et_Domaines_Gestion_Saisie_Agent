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
</head>

<body>

    <!-- Header -->
    <?php include('../php-user-authentication/header.php'); ?>

    <!-- Login script -->
    <?php include('./controllers/login.php'); ?>
     



    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">

                <form action="" method="post">
                    <h3>Se connecter</h3>

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                    <div class="input-group">
                        <!--label>Email</label-->
                        <input type="email" class="form-control" name="email_signin" id="email_signin" placeholder="E-mail" />
                    </div>
                    <br>

                    <div class="input-group">
                        
                        <!--label>Mot de passe</label-->
                        <input type="password" class="form-control" name="password_signin" id="password_signin" placeholder="Mot de passe"/>
                        <span>
                            <i class="fa fa-eye"
                            aria-hidden="false" onclick="test()"></i>
                        </span>
                            
                    </div>
                    <br>

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Confirmer

                    </button><br>
                    <p><a href="signup.php" style="color:red">Veuillez vous inscrire si vous n'avez pas de compte.</a><br></p>

                    <a href="forgot.php" style="color:blue">Mot de passe oublier.</a>
                    
                </form>
            </div>
        </div>
    </div>
    <section id="promo" class="promo section offset-header" style="background-color:#F5F5DC;">
    <footer class="main-footer" style="background-color:maroon;color:white;">
    <strong>Copyright &copy; 2021 <a href="https://www.sourcecodester.com/"></a></strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 1.0</b>
    </div>
  </footer>
         
    </section>
    
    <script src="js/app.js"></script>
</body>

<style>
        
          
        span {
            position: absolute;
            right: 10px;
            transform: translate(0, -50%);
            top: 50%;
            
        }
        .fa{
            font-size:25px;
            color:black;
        }
          
        
    </style>

</html>