<?php
   
    // Database connection
    include('config/db.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['login'])) {
        $email_signin        = $_POST['email_signin'];
        #$password_signin     = $_POST['password_signin'];

        // clean data 
        #$user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        #$pswd = mysqli_real_escape_string($connection, $password_signin);

        // Query if email exists in db
        $sql = "SELECT * From users WHERE code_activation = '{$email_signin}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . mysqli_error($connection));
        }

        if(!empty($email_signin)){

            /* if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $pswd)) {
                $wrongPwdErr = '<div class="alert alert-danger">
                Le mot de passe doit contenir au moins 8 caracteres avec au moins un caractere special , une majuscule , une miniscule et un chiffre.
                    </div>';
            } */
            // Check if email exist
            /* if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        ce compte existe pas !
                    </div>';
            } */
            
          
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id            = $row['id'];
                    $firstname     = $row['firstname'];
                    $lastname      = $row['lastname'];
                    $email         = $row['email'];
                    $mobilenumber   = $row['mobilenumber'];
                    $pass_word     = $row['password'];
                    $token         = $row['token'];
                    $is_active     = $row['is_active'];
                    $code_active     = $row['code_active'];
                    $centre        = $row['centre'];
                    $num_agent    = $row['num_agent'];
                    $code_activation = $row['code_activation'];
                }

                // Verify password
                #$password = password_verify($password_signin, $pass_word);

                // Allow only verified user
                if($is_active == '0') {
                    if($email_signin == $code_activation ) {
                       header("Location:./login_index.php");
                       
                       $_SESSION['id'] = $id;
                       $_SESSION['firstname'] = $firstname;
                       $_SESSION['lastname'] = $lastname;
                       $_SESSION['email'] = $email;
                       $_SESSION['mobilenumber'] = $mobilenumber;
                       $_SESSION['token'] = $token;
                       $_SESSION['centre'] = $centre;
                       $_SESSION['num_agent'] = $num_agent;

                       //$sql = "SELECT * From users WHERE code_activation = '{$email_signin}' ";
                       $update = mysqli_query($connection, "UPDATE users SET code_active = '1' WHERE code_activation = '{$email_signin}' ");
                       return $update ;

                    }
                     
                    
                    else {
                        $emailPwdErr = "<div class='alert alert-danger'>
                                Vérifier le code d'activation que vous entrez !!!
                            </div>";
                    }
                }

                else if ($is_active == '1' && $centre == 'centre') {
                    $verificationRequiredErr = "<div class='alert alert-danger'>
                            vous etes pas encore autoriser à sasisr des données sur ce site .
                            Contacter l'administrateur du site pour vous attribuez un centre .
                        </div>";
                }
                
                else {
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            vous devez verifier votre compte .
                        </div>';
                }

        

            

        } else {
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Code d'activation non fourni .
                    </div>";
            }
             /* if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Password non fourni .
                        </div>";
            }     */        
        }

    }

?>    