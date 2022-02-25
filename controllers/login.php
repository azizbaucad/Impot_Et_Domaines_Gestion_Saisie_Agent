<?php
   
    // Database connection
    include('config/db.php');
    include('confirm.php');
    include('user_activation.php');
    include('register.php');
    

      


    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(!empty($_GET['token'])){
        $token = $_GET['token'];
     } else {
         $token = "";
     }

     
    if(isset($_POST['login'])) {
        $email_signin        = $_POST['email_signin'];
        $password_signin     = $_POST['password_signin'];

        // clean data 
        $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $password_signin);

        // Query if email exists in db
        $sql = "SELECT * From users WHERE email = '{$email_signin}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . mysqli_error($connection));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $pswd)) {
                $wrongPwdErr = '<div class="alert alert-danger">
                Le mot de passe doit contenir au moins 8 caracteres avec au moins un caractere special , une majuscule , une miniscule et un chiffre.
                    </div>';
            }
            // Check if email exist
            if($rowCount <= 0) {
                $accountNotExistErr = "<div class='alert alert-danger'>
                        ce compte n'éxiste pas !
                    </div>";
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id            = $row['id'];
                    $firstname     = $row['firstname'];
                    $lastname      = $row['lastname'];
                    $email         = $row['email'];
                   // $mobilenumber   = $row['mobilenumber'];
                    $pass_word     = $row['password'];
                    $token         = $row['token'];
                    $is_active     = $row['is_active'];
                    $code_active   = $row['code_active'];
                    $centre        = $row['centre'];
                    $num_agent    = $row['num_agent'];
                    $token_       = $row['token'];
                    $code_activation_db = $row['code_activation'];
                }

                // Verify password
                $password = password_verify($password_signin, $pass_word);

                // Allow only verified user
                if($is_active == '1' && $centre !== 'centre' ) {
                    if($email_signin == $email && $password_signin == $password ) {
                       header("Location:dash/view/menu.php?page=tbrd");
                       
                       $_SESSION['id'] = $id;
                       $_SESSION['firstname'] = $firstname;
                       $_SESSION['lastname'] = $lastname;
                       $_SESSION['email'] = $email;
                       $_SESSION['mobilenumber'] = $mobilenumber;
                       $_SESSION['token'] = $token;
                       $_SESSION['centre'] = $centre;
                       $_SESSION['num_agent'] = $num_agent;
                       $_SESSION['code_activation'] = $code_activation;

                    }
                    
                    else {
                        $emailPwdErr = '<div class="alert alert-danger">
                                Email ou mot de passe incorrect !
                            </div>';
                    }
                }

                else if ($is_active == '1' && $centre == 'centre') {
                    $verificationRequiredErr = "<div class='alert alert-danger'>
                            vous n'etes pas encore autorisé à sasisir des données sur ce site .
                            Contacter l'administrateur du site pour vous attribuez un centre !!!
                        </div>";
                }
                
                else if ($code_active == '0') {
                    $verificationRequiredErr = "<div class='alert alert-danger'>
                            Vérifier votre email pour activer votre code d'activation !!!
                        </div>";
                }

                else if ($is_active == '0') {
                    $verificationRequiredErr = "<div class='alert alert-danger'>
                            Votre compte n'est pas activé !!!
                            Merci de contacter l'administrateur du site pour l'activer.
                        </div>";
                }
                


                 
                
                
                else {
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            vous devez verifier votre compte !!!
                        </div>';
                }

            }

        } else {
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email non fourni !!!
                    </div>";
            }
            
            if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Mot de passe non fourni !!!
                        </div>";
            }            
        }

    }

?>    