<?php

require_once 'includes/dbh-inc.php';

require_once 'includes/functions-inc.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Notifications - gradeVITian</title>

  
  <link rel="icon" href="img/LOGO-192px.png" type="image/gif">
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
  <link rel="stylesheet" href="css/index.css">

  
  



  <!-- ---------- PWA FILES------------ -->

  	 
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="img/LOGO-192px.png">
  <link rel="apple-touch-icon" href="img/LOGO-512px.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style">
  <meta name="theme-color" content="#ffffff">
  <script src="js/main.js" defer></script>
	
<!-- Adds by GOOGLE -->
<script data-ad-client="ca-pub-2577856688906575" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
</head>

<body onload="loadfunc()">


<!-- ----------------------------FIXED tops---------------------------------------------- -->

 
<div class="fixed-tops">
        <!-- <div class="go-to-top">
          <i
            title="Go to top"
            onclick="topFunction()"
            class="fas fa-angle-double-up topsy"
          ></i>
        </div> -->

        <div id="overlayqr" onclick="off()">
          <div id="textqr">
            <img class="brand-logo-fixedtops" src="img/brand-logo.svg" alt="logo" />
            <h6>Scan here to visit</h6>
            <h4>gradevitian.in</h4>
            <img src="img/gradevitian_QR.svg" alt="Gradevitian QR code" />
          </div>
        </div>

        <div class="share-section-left">
          <button
            type="button"
            id="share-btn-left"
            title="Go to top"
            class="btn btn-secondary btn-sm"
            onclick="on()"
          >
            <i class="fas fa-qrcode"></i>
          </button>
        </div>

        <div class="share-section">
          <button
            type="button"
            id="share-btn"
            title="Go to top"
            class="btn btn-secondary btn-sm"
            onclick="onshare()"
          >
            <i class="fas fa-share-alt"></i>
          </button>

          <div id="overlayshare" onclick="offshare()">
            <!-- SHARE CONTENT -->
            <div class="share-content" onclick="offshare()">
              <a
                id="whatsapp"
                title="Whatsapp"
                href="https://wa.me/?text=https://gradevitian.in/"
                target="_blank"
                ><i class="fab fa-whatsapp fa-2x"></i
              ></a>

              <a
                id="linkedin"
                title="Linked in"
                href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgradevitian.in%2F"
                target="_blank"
              >
                <i class="fab fa-linkedin-in fa-2x"></i>
              </a>

              <a
                id="twitter"
                title="twitter"
                href="https://twitter.com/intent/tweet?text=https://gradevitian.in/"
                target="_blank"
              >
                <i class="fab fa-twitter"></i>
              </a>

              <a
                id="facebook"
                title="Facebook"
                target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgradevitian.in%2F&amp;src=sdkpreparse"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <a
                data-toggle="tooltip"
                data-placement="right"
                title="Copy Link"
                id="copy-text-btn"
                ><i class="far fa-clipboard"></i
              ></a>
              <p id="clip-text" style="display: none">
                https://gradevitian.in/
              </p>

              <button
                type="button"
                class="btn btn-secondary btn-sm"
                onclick="offshare()"
              >
                <i class="fas fa-share-alt"></i>
              </button>
            </div>
            <!-- SHARE CONTENT END -->
          </div>
        </div>
           
          <?php

          if(isset($_SESSION["useruid"])){

           echo
          '<div class="fixed-logout">
          <a class="btn btn-dark btn-md" title="Log out" href="includes/logout-inc.php" ><i class="fas fa-sign-out-alt"></i></a> 
           </div>';
          }


         ?>

      

       

      </div>





<div id="notifications" class="notifications">


<div class="skip-notifications">
  <p>Skip 
<button
        class="btn btn-outline-dark btn-sm"
        id="skip-notifications-btn"
        type="button"
        title="Let's compute GPA, CGPA, Grades and Attendance."
        onclick="window.location.href='CGPA Calculator.php'"
      >
      <i class="fas fa-chevron-right"></i>
      </button></p>

 </div>


<?php

if(isset($_SESSION["useruid"])){


 echo '<h2>Welcome! <h3> ' .$_SESSION["useruid"]. '.</h3></h2>';

  }
 else{
  echo "<h2>Welcome!</h2>";
  }
?>

<br>
<img style="height:50px;" src="img/brand-logo.svg" alt="logo" />
      <h3>gradeVITian</h3>
      <h6>is now compatible with all devices.</h6>
      <h6>Save your data online by <a href="index.php"><b>creating an account.</b></a> </h6>
      <h4>Happy Learning!</h4>

      <img src="img/add2homescreen-img.svg" alt="Add to homescreen" />
      <br />
      <h6>You can now</h6>
      <h5>Add it to Home Screen.</h5>

      <button
        class="btn btn-dark btn-sm"
        id="new-year-close"
        type="button"
        title="Let's compute GPA, CGPA, Grades and Attendance."
        onclick="window.location.href='CGPA Calculator.php'"
      >
        <b>Dive In</b> <i class="fas fa-arrow-alt-circle-right"></i>
      </button>
 </div>
  
</body>

<!-- Javascript files -->
<script src="js/index.js"></script>

</html>