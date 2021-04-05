<?php

use PHPMailer\PHPMailer\PHPMailer;

include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";

require_once 'dbh-inc.php';




if(isset($_POST['reset-request-submit'])){

  $selector = bin2hex(random_bytes(8));

  $token = random_bytes(32);

  $url = "http://localhost/gv-official/includes/create-new-password.php?selector=". $selector ."&validator=". bin2hex($token);

  $expires = date("U") + 1800;



  $userEmail = $_POST["email"];

// ----------------  Checking if user exists or not -----------------------------------------
$sql = "SELECT * FROM users WHERE usersEmail='$userEmail';";


$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);



$row=mysqli_fetch_assoc($result);

if($resultCheck<1){

  header("location: reset-password.php?reset=usernotexists");
  exit();

}


    // -----------------Deleting the token if exists before ---------------------------------
  $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";

  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../login.php?reset=failed");
    exit();
  }
  else{

mysqli_stmt_bind_param($stmt, "s", $userEmail);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);



  }


  $sql1 = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";

  $stmt1 = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt1, $sql1)){
    header("location: ../login.php?reset=failed");
    exit();
  }
  else{

$hashedToken = password_hash($token, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt1, "ssss", $userEmail, $selector, $hashedToken, $expires);
mysqli_stmt_execute($stmt1);



  }

  mysqli_stmt_close($stmt1);
  mysqli_close($conn);


  $to = $userEmail;

  $subject = 'Reset your password for gradeVITian';




  $headers = "From: gradeVITian <sabarirjsr@gmail.com>\r\n";
  $headers .= "Reply-To: sabarirjsr@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";







  $message = "<h3 style='text-align:center; color: #383754;text-decoration: none;'>gradevitian.in</h3>";

  $message .= '<p style="text-align:left;">Hello,</p>';

  $message .= "<p></p>We have received a password reset request from your account. The link to reset your password is below. If you didn't make this request, Kindly ignore this email.</p>";

  $message .= "<p>Here is your password reset link: </br>";

  $message .= '<a href="' . $url . '">' . $url . '</a></p>';

  $message .= '<p style="text-align:left;">Thanks,<br>gradeVITian.</p>';


$mail = new PHPMailer();


//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "gradevitian@gmail.com";                 
$mail->Password = "cjyrmpyunadobjqq";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl"; //TLS                          
//Set TCP port to connect to
$mail->Port = 465;      //587                             

$mail->From = "gradevitian@gmail.com";
$mail->FromName = "gradeVITian";

$mail->addAddress($to);

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "";

try {
    $mail->send();
    header("location: reset-password.php?reset=success");
} catch (Exception $e) {
     header("location: ../login.php?reset=failed");
}









//-------------------------DEFAULT MAIL FUNCTION---------------

//  if( mail($to, $subject, $message, $headers)){
//   header("location: reset-password.php?reset=success");
//  }
//  else{
//   header("location: ../login.php?reset=failed");
//   //  echo "mail send failed";
//  }


}


else{
  header("location: ../reset-password.php?reset=failed"); 
}
