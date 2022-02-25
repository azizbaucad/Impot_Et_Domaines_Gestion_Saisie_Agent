<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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

                    <div class="form-group">
                        <!--label>Email</label-->
                        <input type="email" class="form-control" name="email_signin" id="email_signin" placeholder="Email" />
                    </div>

                    <div class="input-group">
                        <!--label>Mot de passe</label-->
                        <input type="password" class="form-control" name="password_signin" placeholder="Mot de passe"
                            id="password_signin">
                            <span class="bi bi-eye-slash" class="input-group-text" id="togglePassword"></span>
                            <!--i class="bi bi-eye-slash" id="togglePassword"></i--></input>
                    </div>
                    <br>

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Confirmer</button>
                </form>
            </div>
        </div>
    </div>

    

</body>

<style>
        h1 {
            color: green;
        }
          
        label {
            float: left;
        }
          
        span {
            display: inline-block;
            overflow: hidden;
            padding: 0px 4px 0px 6px;
        }
          
        input {
            width: 70%;
        }
    </style>

</html>