<?php include('./controllers/register.php'); ?>

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

<body style="background-color:beige;">
   
   <?php include('./header.php'); ?>

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <center><h5>Inscription</h5></center>

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

                    <?php echo $_mobileErr; ?>
                    <?php echo $mobileEmptyErr; ?>

                    <?php echo $_passwordErr; ?>
                    <?php echo $passwordEmptyErr; ?>

                    <?php echo $co_password; ?>


                    <!-- FIn des variables -->

                    <div class="form-group">
                        <!-- <label>Prenom</label> -->
                        <input type="text" class="form-control" name="firstname" id="firstName" placeholder="Prenom" />

                        
                    </div>

                    <div class="form-group">
                        <!-- <label>Nom</label> -->
                        <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Nom" />
                    </div>

                    <div class="form-group">
                        <!-- <label>Email</label> -->
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" />

                        
                    </div>

                    <div class="form-group">
<!--                         <label>Telephone</label> -->
                        <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" plcat="1" placeholder="Telephone"/>

                        
                    </div>
                    
                    <div class="input-group">
                        
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" />
                        <span>
                            <i class="fa fa-eye"
                            aria-hidden="false" onclick="passw_01()"></i>
                        </span>
                        
                        
                    </div>
                     
                    <br>
                    <div class="input-group">
                        
                        <input type="password" class="form-control" name="c_password" id="c_password" placeholder="Confirmer Mot de passe"/>
                        <span>
                            <i class="fa fa-eye"
                            aria-hidden="false" onclick="passw_02()"></i>
                        </span>

                        
                        <!--?php echo $passwordEmptyErr; ?-->
                    </div>
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