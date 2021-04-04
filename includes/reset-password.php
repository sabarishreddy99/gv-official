<?php

require_once 'dbh-inc.php';

require_once 'functions-inc.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password - gradeVITian</title>

  
  <link rel="icon" href="../img/LOGO-192px.png" type="image/gif">
  <meta name="author" content="Sabarish Reddy Remala">

  <meta name="keywords" content="vit grades, courses vit, grade predictor, attendance Calculator VIT, grade predictor VIT, VIT grade calculator, VIT cgpa calculator, instant cgpa, gpa calculator vit, grade vitian, gradevitan, grade vit, VIT attendance calculator, gpa calculator, VIT, calculation, semester, vellore, vellore institute of technology, FAT, exams, class, project, lab, vitian, theory, j component">
  
  <meta name="description" content="Hey guys!Now VITians can calculate their attendance,gpa,cgpa,grades in gradevitian.in. All the info you need is at your finger tips. Then what are you waiting for? Its free, reliable, accurate and handier to use. It comprises of different sections named attendance calculator, CGPA estimator, Grade predictor, Grade calculator, GPA calculator, CGPA calculator. Have most out of it and Happy Learning.">
 
  
<!-- bootstrap css-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  

<!-- bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
  integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

  <!-- stylesheets -->
  <link rel="stylesheet" href="../css/reset password.css">

  
  



  <!-- ---------- PWA FILES------------ -->

  	 
  <link rel="manifest" href="../manifest.json">
  <link rel="apple-touch-icon" href="../img/LOGO-192px.png">
  <link rel="apple-touch-icon" href="../img/LOGO-512px.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style">
  <meta name="theme-color" content="#ffffff">
  <script src="js/main.js" defer></script>
	
<!-- Adds by GOOGLE -->
<script data-ad-client="ca-pub-2577856688906575" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
</head>

<body onload="loadfunc()">





<div id="resetpwd" class="notifications">


<div class="resetpwd-form">
<img style="height:50px;" src="../img/brand-logo.svg" alt="logo" />
      <h3>gradeVITian</h3>
      <br>
<h2>Reset your password</h2>
<p> An e-mail will be send to you with instructions on how to reset your password. </p>
<!-- <img class="resetpwd-img" src="img/login-img.svg" alt="Log in">
<img class="welcome-img" src="img/welcome-img.svg" alt="welcome"> -->
<br>




<form action="reset-request-inc.php" method="post" > 
<input type="email" name="email" placeholder="Your E-mail Id..." value="" required>




<?php
if(isset($_GET["reset"])){

  if($_GET["reset"] == "success"){

    echo '<P style="color: green;">Check your e-mail!</P>';

  }

  else if($_GET["reset"] == "failed"){
    echo '<P style="color: #DC143C;">We are now facing some issues. Please Try again later!</P>';
  }

  else if($_GET["reset"] == "passwordupdated"){
    echo '<P style="color: green;"> Your password has been updated successfully! </P>';
  }


  else if($_GET["reset"] == "usernotexists"){
    echo '<P style="color: #DC143C;"> Sorry, it seems like you are not an valid user! </P>';
    echo '<p><a style="color: #00008B; text-decoration:none;" href="../index.php"> Sign Up  </a></p>';
  }



}
?>


<?php
if(isset($_GET["error"])){
  
  if($_GET["error"] == "stmtfailed"){
  echo '<P style="color: #DC143C;">We are now facing server side issues. Please Try again later!</P>';
}

}
?>



<button type="submit" name="reset-request-submit" class="btn btn-dark btn-md" id="">Receive new password</button>
</form>







</div>




 </div>
  
</body>

<!-- Javascript files -->
<script src="js/index.js"></script>

</html>