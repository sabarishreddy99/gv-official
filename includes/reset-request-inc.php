<?php

require_once 'dbh-inc.php';


$template_file = "./email-template.php";


if(isset($_POST['reset-request-submit'])){

  $selector = bin2hex(random_bytes(8));

  $token = random_bytes(32);

  $url = "http://gv-official-test.herokuapp.com/includes/create-new-password.php?selector=". $selector ."&validator=". bin2hex($token);

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




// // --------Creating the html message ------------------------
//     $message;
// if(file_exists($template_file)){
  

//   $message = file_get_contents($template_file);

  

// }

// else{
//   die("unable to locate the template file.");
// }


  $message = "<h3 style='text-align:center; color: #383754;text-decoration: none;'>gradevitian.in</h3>";
  $message .= "<p></p>We received a password reset request. The link to reset your password is below. If you didn't make this request, Kindly ignore this email.</p>";

  $message .= "<p>Here is your password reset link: </br>";

  $message .= '<a href="' . $url . '">' . $url . '</a></p>';



 if( mail($to, $subject, $message, $headers)){
  header("location: reset-password.php?reset=success");
 }
 else{
  header("location: ../login.php?reset=failed");
  //  echo "mail send failed";
 }


}
else{
  header("location: ../reset-password.php?reset=failed"); 
}
