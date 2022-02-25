<?php
   
    // Database connection
    //error_reporting(0);
    include('config/db.php');

    // Swiftmailer lib
    require_once './lib/vendor/autoload.php';
    
    // Error & success messages
    global $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_mobileErr, $_passwordErr, $co_password , $code_activation;
    global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr, $mobileEmptyErr, $passwordEmptyErr, $email_verify_err, $email_verify_success;
    
    // Set empty form vars for validation mapping
     $_email = $_password = "";

    if(isset($_POST["submit"])) {
         
        $email         = $_POST["email"];
         
        $password      = $_POST["password"];
        //$o_password      = $_POST["password"];
        $c_password    = $_POST["c_password"];

        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}'");
        $rowCount = mysqli_num_rows($email_check_query);

        //recuperation des lignes de la base de données
        if($rowCount >= 0){
            while($rowData = mysqli_fetch_array($email_check_query)){
              $firstname = $rowData['firstname'];
              $lastname = $rowData['lastname'];
              $e_mail = $rowData['email'];
            }
        }


        // PHP validation
        // Verify if form values are not empty
        if(!empty($email) && !empty($password) && !empty($c_password)  ){

             if($c_password !== $password){
                $co_password = '<div class="alert alert-danger">
                        Mot de passe incorrect not matched 
                </div>';
            }     
            
            // check if user email already exist
         else if($email !== $e_mail) {
                $email_exist = '<div class="alert alert-danger" role="alert">
                        Veuillez fournir un bon email !
                    </div>';
            }  
        
            else if($email !== $e_mail) {
                $email_exist = '<div class="alert alert-danger" role="alert">
                        Veuillez fournir un bon email !
                    </div>';
            }  
            
            else {
                // clean the form data before sending to database
                //$_first_name = mysqli_real_escape_string($connection, $firstname);
               // $_last_name = mysqli_real_escape_string($connection, $lastname);
                $_email = mysqli_real_escape_string($connection, $email);
               // $_mobile_number = mysqli_real_escape_string($connection, $mobilenumber);
                $_password = mysqli_real_escape_string($connection, $password);

                // perform validation
                 
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="alert alert-danger">
                            format email non valide
                        </div>';
                }
                /*if(!preg_match("/^[0-9]{9}+$/", $_mobile_number)) {
                    $_mobileErr = '<div class="alert alert-danger">
                            Ne peut prendre que 9 chiffres
                        </div>';
                }*/
                if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $_password)) {
                    $_passwordErr = '<div class="alert alert-danger">
                             Le mot de passe doit contenir au moins 8 caracteres avec au moins un caractere special , une majuscule , une miniscule et un chiffre.
                        </div>';
                }
                
                /* if($password !== $c_password){

                    $_passwordErr = '<div class="alert alert-danger">
                    Le mot de passe ne correspond pas 
               </div>';

                } */
                
                // Store the data in db, if all the preg_match condition met
                if( 
                 (filter_var($_email, FILTER_VALIDATE_EMAIL))   && 
                 (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $_password))){

                    // Generate random activation token
                    $code_activation = rand(000000,900000);
                    $token = md5(rand().time());


                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    // Query
                    $sql = "UPDATE users  SET is_active='0', code_active='0',  password= '$password_hash' , token='$token', time_db=now(), code_activation='$code_activation'  WHERE email = '{$email}'"
                    
                    ;
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 

                    // Send verification email
                    if($sqlQuery) {
                        $msg = '<p>Hello <b>'.$firstname.' '.$lastname.'</b>
                        Votre mot de passe a été bien réinitailisé . <br> Merci de cliquer sur le lien suivant 
                        pour réactiver votre compte.
                         <br></p>
                          <a href="localhost/secure_log00/php-user-authentication/c_user.php?token='.$token.'"> Cliquer ici  </a>
                        ';

                        // Create the Transport
                        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                        ->setUsername('ba.test694@gmail.com')
                        ->setPassword('Aziz_2019');

                        // Create the Mailer using your created Transport
                        $mailer = new Swift_Mailer($transport);

                        // Create a message
                        $message = (new Swift_Message("Récupération du mot de passe à l'application de saisie des données de sources internes"))
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
                                le lien de récupération du mot de passe est envoyé  , Merci de verifier votre mail !
                            </div>';
                        }
                    }
                }
            }
        } else {
            
             if(empty($email)){
                $emailEmptyErr = '<div class="alert alert-danger">
                le mail ne peut pas etre vide
                </div>';
            }
             
            else if(empty($password)){
                $passwordEmptyErr = '<div class="alert alert-danger">
                Le mot de passe ne peut pas etre vide
                </div>';
            }
            else if(empty($c_password)){
                $co_password = '<div class="alert alert-danger">
                        Mot de passe confirm ne peut pas etre vide 
                </div>';
            } 
            else if($c_password !== $o_password){
                $co_password = '<div class="alert alert-danger">
                        Mot de passe incorrect not matched
                </div>';
            }             
        }
    }
?>