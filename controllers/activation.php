<?php
  
     date_default_timezone_set("Africa/Dakar"); // set time_zone 
    // Database connection
    include('./config/db.php');

   function delete() {
    $delete = mysqli_query($connection, "DELETE FROM users WHERE token = '$token' ");
}
    

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
                // Dtate created 
                $created = $time_db;
                //Expire Date
                $now = date("Y-m-d H:i:s"); //current time
                $expire_date = date('Y-m-d H:i:s',strtotime('+5 minutes',strtotime($created)));
                $code_activation = $rowData['code_activation'];
                  if($code_active == 0) {
                     $update = mysqli_query($connection, "UPDATE users SET code_active = '0', num_agent='$id'  WHERE token = '$token' ");
                       if($update){
                         
                           
                          }  
                          if ($now>$expire_date) { //if current time is greater then created time

                            $activation_error = "<div class='alert alert-danger'>
                           Link is expired ok bye <b style='color:black'>$time_db</b> 
                         </div>
                    ";
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
                  } else {
                    $email_already_verified = '<div class="alert alert-danger">
                           Cet email est d??j??s verifi?? !
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