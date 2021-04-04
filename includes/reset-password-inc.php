<?php

require_once 'dbh-inc.php';

if(isset($_POST["reset-password-submit"])){


  $selector = $_POST["selector"];
  $validator = $_POST["validator"];
  $password = $_POST["pwd"];
  $passwordRepeat = $_POST["pwd-repeat"];


  if(empty($password) || empty($passwordRepeat)){

    header("location: create-new-password.php?newpwd=empty"); 
    exit();
  }
  elseif($password != $passwordRepeat){

    header("location: create-new-password.php?newpwd=pwdnotsame"); 
    exit();
  }


  $currentDate = date("U");



  $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?;";

  
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../login.php?reset=failed");
    exit();
  }
  else{

mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);

if(!$row = mysqli_fetch_assoc($result)){

  header("location: ../login.php?reset=failed");
  exit();

}
else{
  $tokenBin = hex2bin($validator);
  
  $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

  if($tokenCheck === false){
    header("location: ../login.php?reset=failed");
    exit();
  }
  elseif ($tokenCheck === true){

    $tokenEmail = $row["pwdResetEmail"];

    $sql = "SELECT * FROM users WHERE usersEmail=?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../login.php?reset=failed");
      // echo 'There was an error-1-!';
      exit();
    }
    else{


      mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);

      if(!$row = mysqli_fetch_assoc($result)){
        header("location: ../login.php?reset=failed");
        // echo 'There was an error-2-.';
       exit();

}
else{

           $sql = "UPDATE users SET usersPwd=? WHERE usersEmail=?;";

           $stmt = mysqli_stmt_init($conn);

           if(!mysqli_stmt_prepare($stmt, $sql)){

            header("location: ../login.php?reset=failed");
            //  echo 'There was an error-3-!';
             exit();
           }
           else{
       
             $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
             mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
             mysqli_stmt_execute($stmt);


             $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";

             $stmt = mysqli_stmt_init($conn);
           
             if(!mysqli_stmt_prepare($stmt, $sql)){

              header("location: ../login.php?reset=failed");
              // echo 'There was an error-4-!';
               exit();
             }
             else{
           
           mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
           mysqli_stmt_execute($stmt);
           header("location: ../login.php?reset=passwordupdated");
           
           
           
             }




      }
    

    }





  }
}


  }

     
}
}


else{
  header("location: ../login.php"); 
}