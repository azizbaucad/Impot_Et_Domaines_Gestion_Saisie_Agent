<?php include('./controllers/confirm.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <title>DGID</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
   
   <?php include('./header.php'); ?>

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <center><h5>Récupération du mot de passe</h5></center><br>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

                     
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" />

                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
                    </div>

                     
                    Nouveau mot de passe
                    <br>
                    <div class="input-group">
                        
                        <input type="password" class="form-control" name="password" id="password" />
                        <span>
                            <i class="fa fa-eye"
                            aria-hidden="false" onclick="passw_01()"></i>
                        </span>
                        
                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>
                    <br>
                    <label>Confirmer mot de passe</label>
                    <br>
                    <div class="input-group">
                        
                        <input type="password" class="form-control" name="c_password" id="c_password" />
                        <span>
                            <i class="fa fa-eye"
                            aria-hidden="false" onclick="passw_02()"></i>
                        </span>

                        
                        <!--?php echo $passwordEmptyErr; ?-->
                    </div>
                    <?php echo $co_password; ?>
                    <br>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Confirmer
                    </button><br>
                    <button class="btn btn-outline-success btn-lg btn-block"><a href="index.php">Se connecter</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>

</body>

</html>

<style>
        
          
        span {
            position: absolute;
            right: 15px;
            transform: translate(0, -50%);
            top: 50%;
            cursor: pointer;
        }
        .fa{
            font-size:20px;
            color: black;
        }
          
        
    </style>