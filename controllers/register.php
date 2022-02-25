<?php
   
    // Database connection
    include('config/db.php');

    // Swiftmailer lib
    require_once './lib/vendor/autoload.php';
    
    // Error & success messages
    global $token , $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_passwordErr, $co_password;
    global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr,  $passwordEmptyErr, $email_verify_err, $email_verify_success;
    
    // Set empty form vars for validation mapping
    $_first_name = $_last_name = $_email = $_password = "";

    if(isset($_POST["submit"])) {
        $firstname     = $_POST["firstname"];
        $lastname      = $_POST["lastname"];
        $email         = $_POST["email"];
         
        $password      = $_POST["password"];
        //$o_password      = $_POST["password"];
        $c_password    = $_POST["c_password"];

        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);


        // PHP validation
        // Verify if form values are not empty
        if(!empty($firstname) && !empty($lastname) && !empty($email)  && !empty($password) && !empty($c_password)  ){

             if($c_password !== $password){
                $co_password = '<div class="alert alert-danger">
                        Les mots de passe ne correspondent pas !
                </div>';
            }     
            
            // check if user email already exist
             if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        cet email existe déjàs !
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_first_name = mysqli_real_escape_string($connection, $firstname);
                $_last_name = mysqli_real_escape_string($connection, $lastname);
                $_email = mysqli_real_escape_string($connection, $email);
               // $_mobile_number = mysqli_real_escape_string($connection, $mobilenumber);
                $_password = mysqli_real_escape_string($connection, $password);

                // perform validation
                if(!preg_match("/^[a-zA-Z ]*$/", $_first_name)) {
                    $f_NameErr = '<div class="alert alert-danger">
                            Le prenom ne peut prendre que des lettres et des espaces , pas de caractères spéciaux !
                        </div>';
                }
                if(!preg_match("/^[a-zA-Z ]*$/", $_last_name)) {
                    $l_NameErr = '<div class="alert alert-danger">
                    Le nom ne peut prendre que des lettres et des espaces , pas de caractères spéciaux !
                        </div>';
                }
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="alert alert-danger">
                            format email non valide !
                        </div>';
                }
                /*if(!preg_match("/^[0-9]{9}+$/", $_mobile_number)) {
                    $_mobileErr = '<div class="alert alert-danger">
                            Ne peut prendre que 9 chiffres
                        </div>';
                }*/
                if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $_password)) {
                    $_passwordErr = '<div class="alert alert-danger">
                             Le mot de passe doit contenir au moins 8 caractères avec des caractères spéciaux , une majuscule , une miniscule et un chiffre !
                        </div>';
                }
                
                /* if($password !== $c_password){

                    $_passwordErr = '<div class="alert alert-danger">
                    Le mot de passe ne correspond pas 
               </div>';

                } */
                
                // Store the data in db, if all the preg_match condition met
                if((preg_match("/^[a-zA-Z ]*$/", $_first_name)) && (preg_match("/^[a-zA-Z ]*$/", $_last_name)) &&
                 (filter_var($_email, FILTER_VALIDATE_EMAIL))   && 
                 (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $_password))){

                    // Generate random activation token
                    $token = md5(rand().time());
                    $code_activation = rand(000000,900000);

                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    // Query
                    $sql = "INSERT INTO users (firstname, lastname, email, password, token, is_active, code_active, code_activation,
                    date_time, time_actu) VALUES ('{$firstname}', '{$lastname}', '{$email}',   '{$password_hash}', 
                    '{$token}', '0', '0', '{$code_activation}' , now(), now())";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 

                    // Send verification email
                    if($sqlQuery) {
                        $msg = ' Vous venez de vous inscrire sur application de saisie des données de sources internes.<br></br> Pour accéder à l application, veuillez vérifier votre e-mail en cliquant sur le lien ci-dessous :  <br><br>
                          <a href="localhost/secure_log00/php-user-authentication/c_user.php?token='.$token.'"> Cliquer ici  </a>
                        ';

                        // Create the Transport
                        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                        ->setUsername('ba.test694@gmail.com')
                        ->setPassword('Aziz_2019');

                        // Create the Mailer using your created Transport
                        $mailer = new Swift_Mailer($transport);

                        // Create a message
                        $message = (new Swift_Message("Inscripton à l'application de saisie des données de sources internes"))
                        ->setFrom([$email => $firstname . ' ' . $lastname])
                        ->setTo($email)
                        ->addPart($msg, "text/html")
                        ->setBody('Hello! Agent');

                        // Send the message
                        $result = $mailer->send($message);
                          
                        if(!$result){
                            $email_verify_err = '<div class="alert alert-danger">
                                    lien non envoye , sorry verifier votre saisie !
                            </div>';
                        } else {
                            $email_verify_success = '<div class="alert alert-success">
                                le lien est envoye , Merci de verifier votre mail !
                            </div>';
                        }
                    }
                }
            }
        } else {
            if(empty($firstname)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    le prenom ne peut pas etre vide !
                </div>';
            }
             if(empty($lastname)){
                $lNameEmptyErr = '<div class="alert alert-danger">
                le nom ne peut pas etre vide !
                </div>';
            }
              if(empty($email)){
                $emailEmptyErr = "<div class='alert alert-danger'>
                l'email ne peut pas etre vide !
                </div>";
            }
            
              if(empty($password)){
                $passwordEmptyErr = '<div class="alert alert-danger">
                Le mot de passe ne peut pas etre vide !
                </div>';
            }
              if(empty($c_password)){
                $co_password = '<div class="alert alert-danger">
                        Mot de passe confirm ne peut pas etre vide !
                </div>';
            } 
              if($c_password !== $co_password){
                $co_password = '<div class="alert alert-danger">
                        Les mots de passe ne correspondent pas !
                </div>';
            }             
        }
    }
?>