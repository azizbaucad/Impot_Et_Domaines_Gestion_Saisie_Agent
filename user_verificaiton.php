<?php include('./controllers/activation.php'); ?>
<?php include('./controllers/login.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>DGID</title>

    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h5 class="display-10">Récupération du mot de passe</h5>
            <div class="col-12 mb-5 text-center">
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>
            </div>
            <div class="vertical-center">
            <div class="inner-block">

                <form action="" method="post">
                    <h3></h3>

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>
                    <label>Code d'activation</label>
                    <div class="input-group">
                        <!--label>Email</label-->
                        <input type="text" class="form-control" name="email_signin" id="email_signin" placeholder="Saisir le code d'activation" />
                    </div>
                    <br>
 

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-success btn-lg btn-block">Confirmer

                    </button><br>
                    <p><a href="signup.php" style="color:red">Veuillez vous inscrire si vous n'avez pas de compte.</a><br></p>

                    <a href="forgot.php" style="font: size 12px;color:blue">Mot de passe oublier.</a>
                    
                </form>
            </div>
        </div>
            <!--p class="lead">Votre compte vient d'être vérifier, merci de cliquer sur le lien pour se connecter</p>
            <a class="btn btn-lg btn-success" href="code.php"
               >Connexion
            </a-->
        </div>
    </div>


</body>

</html>