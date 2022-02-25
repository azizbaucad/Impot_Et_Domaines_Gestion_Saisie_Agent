<?php
  
     date_default_timezone_set("Africa/Dakar"); // set time_zone 
    // Database connection
    include('./config/db.php');

   
    

    global $email_verified, $email_already_verified, $activation_error ;

    // GET the token = ?token
    if(!empty($_GET['token'])){
       $token = $_GET['token'];
       //echo $token ;
      // header('Location:./index.php') ;
    } else {
        $token = "";
    }

    // GET the code_activation
    if(!empty($_GET['code_activation'])){
        $code_activation = $_GET['code_activation'];
     } else {
         $code_activation = "";
     } 


    if($token != "" ) {
        $sqlQuery = mysqli_query($connection, "SELECT * FROM users WHERE token = '$token' ");
        $countRow = mysqli_num_rows($sqlQuery);

        if($countRow == 1){
            while($rowData = mysqli_fetch_array($sqlQuery)){
                $is_active = $rowData['is_active'];
                $code_active = $rowData['code_active'];
                $id = $rowData['id'];
                $time_db = $rowData['time_db']; 
                $date_time= $rowData['date_time'];
                // Dtate created 
                $created_updated = $time_db;
                $created_created = $date_time;
                //Expire Date
                $now = date("Y-m-d H:i:s"); //current timeb
                $expire_date = date('Y-m-d H:i:s',strtotime('+5 minutes',strtotime($created_updated)));
                $expire_date_created = date('Y-m-d H:i:s',strtotime('+1 minutes',strtotime($created_created)));
                $code_activation = $rowData['code_activation'];
                  if($code_active == 0) {
                     $update = mysqli_query($connection, "UPDATE users SET code_active='0', num_agent='$id'  WHERE token = '$token' ");
                       if($update){

                        if ($created_updated >= $created_created && $now>$expire_date) { //if current time is greater then created time

                            $activation_error = "<div class='alert alert-danger'>
                           Link is expired ok bye <b style='color:black'>$time_db</b> 
                         </div>
                    ";
                   /*  $updatee = mysqli_query($connection, "DELETE FROM users WHERE token = '$token' ");
                    if($updatee){
                    } */
                        header('Location:./404.php');
                     exit();
                    
                    
                        }
                        // update function
                        else if ($created_created >= $created_updated && $now>$expire_date_created){
                                $updatee = mysqli_query($connection, "DELETE FROM users WHERE token = '$token' ");
                                if($updatee){
                                    header('Location:./404.php');
                                exit();
                                } 
                        } 
                        else  //still has a time
                        {

                            $activation_error = "<div class='alert alert-danger'>
                            Votre code d'activation expire dans <b> 1 minutes </b>   
                          </div>";

                            $email_verified = "<div class='alert alert-success'>
                            Votre code d'activation est le <b style='color:black'>$code_activation</b> 
                          </div>
                     ";
                     
                     
                        } 

                                    /* if ($now>$expire_date_created) { //if current time is greater then created time

                                        $activation_error = "<div class='alert alert-danger'>
                                    Link is expired ok bye <b style='color:black'>$time_db</b> 
                                    </div>
                                ";
                                $updatee = mysqli_query($connection, "DELETE FROM users WHERE token = '$token' ");
                                if($updatee){
                                    header('Location:./404.php');
                                exit();
                                }
                                    } */
                          }  
                        
                  } else {
                    $email_already_verified = '<div class="alert alert-danger">
                           Cet email est dèjàs verifié !
                        </div>
                    ';
                    header('Location:./403.php');
                     exit();
              }
        }
    } else {
        $activation_error = '<div class="alert alert-danger">
                Activation error!
            </div>
        ';
        header('Location:./404.php');
                     exit();
    }
}

?>