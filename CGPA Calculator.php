<?php


session_start();

require_once 'includes/dbh-inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGPA Calculator - gradeVITian</title>

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
  <link rel="stylesheet" href="css/CGPA Calculator.css">
  



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

<body onload="loadfunc();introTEXTtypewriting();">

<!-- ---------------------- social links , loading & custom pop up   --------------------- -->
  
<div id="loading">
  <img src="img/loading.svg" alt="gradevitian">
  <h3>gradevitian.in</h3>
</div>




 <!-- <div id="new-year" class="newyear">
      <h3>gradeVITian</h3>
      <h6>is now compatible with all devices.</h6>
      <h2>Happy Learning!</h2>

      <img src="img/add2homescreen-img.svg" alt="Add to homescreen" />
      <br />
      <h6>You can now</h6>
      <h5>Add it to Home Screen.</h5>

      <button
        class="btn btn-dark btn-sm"
        id="new-year-close"
        type="button"
        title="Let's compute GPA, CGPA, Grades and Attendance."
        onclick="closenewyear()"
      >
        <b>Dive In</b> <i class="fas fa-arrow-alt-circle-right"></i>
      </button>
 </div> -->






<!-- ----------------------------------  POP UP     --------------------------------------- -->

<div class="full-screen flex-container-center hidden" id="pop-up-result">
  <img class="result-img" src="img/result pop-up.svg" alt="gradeVITian result">
  
  <!-- BODY of pop-up -->

 <!-- sem wise calculation -->
  <p id="note-msg"><strong>Note:</strong>If you are failed in a particular course(s) in any of the semesters; kindly visit the GPA calculator section and calculate your GPA <b>excluding failed course(s)</b> for that sem and proceed with this.</p>  
<h5><strong id="alertcgpacal"></strong></h5>
<h5 id="alertcgpacal1" ></h5>

  <!-- sem wise reset -->
<h5><strong id="alertcgpacalr"></strong></h5>
<h5 id="alertcgpacal1r"></h5>


  <!-- Instant calculation -->
 <h5> <strong id="iestcgpa"></strong></h5>
 <h5 id="iestcgpa1"></h5>

  <!-- Instant reset -->
<h5><strong id="alerticgpacalr"></strong></h5>
<h5 id="alerticgpacal1r"></h5>







  <i class="pop-up-close-icon" title="Close" onclick="closePopup()"><i class="far fa-times-circle fa-2x"></i></i>
  <button class="pop-up-close-button btn btn-dark btn-sm"  type="button" title="Close pop-up" onclick="closePopup()" >Close</button>
  <h6 class="pop-up-watermark">gradeVITian.in</h6>

</div>
<!-- ---------------------------------------  POP UP END  ---------------------------------- -->


<!-- Total blur except pop up -->
<div id="pop-up-blur">




<!-- ----------------------------FIXED tops---------------------------------------------- -->

 
      <div class="fixed-tops">
        <div class="go-to-top">
          <i
            title="Go to top"
            onclick="topFunction()"
            class="fas fa-angle-double-up topsy"
          ></i>
        </div>

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





  <!-- section1 is in header.php -->

  <?php
   include_once 'header.php';
  ?>



 




  <!-- section-2 -->


  <section class="section2">

    <div class="cgpacal-sec">
      <br>
      <h2>Sem wise CGPA</h2>
       <br>

       <img class="cgpainputimg" src="img/gpaimg.svg" alt="GPA Calculator">
       

       <!-- form start -->
       


       

       <?php

$c1=""; $g1=""; $c2=""; $g2=""; $c3=""; $g3=""; $c4=""; $g4=""; $c5=""; $g5=""; $c6=""; $g6=""; $c7=""; $g7=""; $c8=""; $g8=""; $c9=""; $g9=""; $c10=""; $g10=""; $c11=""; $g11=""; $c12=""; $g12="";



if(isset($_SESSION['userid'])){

$loginuserid=$_SESSION['userid'];

$sql_sem_wise = "SELECT * FROM sem_wise_cgpa WHERE userId='$loginuserid';";
$result_sem_wise = mysqli_query($conn,$sql_sem_wise);

$resultCheck_sem_wise = mysqli_num_rows($result_sem_wise);

$usersId;

$row_sem_wise=mysqli_fetch_assoc($result_sem_wise);

if($resultCheck_sem_wise>0){

$c1= $row_sem_wise["c1"];
$g1= $row_sem_wise["g1"];
$c2= $row_sem_wise["c2"];
$g2= $row_sem_wise["g2"];
$c3= $row_sem_wise["c3"];
$g3= $row_sem_wise["g3"];
$c4= $row_sem_wise["c4"];
$g4= $row_sem_wise["g4"];
$c5= $row_sem_wise["c5"];
$g5= $row_sem_wise["g5"];
$c6= $row_sem_wise["c6"];
$g6= $row_sem_wise["g6"];
$c7= $row_sem_wise["c7"];
$g7= $row_sem_wise["g7"];
$c8= $row_sem_wise["c8"];
$g8= $row_sem_wise["g8"];
$c9= $row_sem_wise["c9"];
$g9= $row_sem_wise["g9"];
$c10= $row_sem_wise["c10"];
$g10= $row_sem_wise["g10"];
$c11= $row_sem_wise["c11"];
$g11= $row_sem_wise["g11"];
$c12= $row_sem_wise["c12"];
$g12= $row_sem_wise["g12"];





}


  }


    ?>




       <form id="cgpacalform"  method="post" action="includes/cgpa-inc.php">

       <br>

<!-- ---------------------------------   course-1   ------------------------------------------ -->
<div class="row course-division">
          <h5 class="semester-heading-1"> Semester-1 </h5>

        <div class="col align-self-start course-div-parts">
       <h6>Credits</h6>
       <input type="number" id="sem1c" name="c1" value="<?php echo $c1?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
      
        </div>
          


        <div class="col align-self-center course-div-parts semester-heading-2">
          <h5> Semester-1 </h5>
        </div> 

        
        <div class="col align-self-end course-div-parts">
          <h6>GPA</h6>
          <input type="number" id="sem1g" name="g1" value="<?php echo $g1?>" min="0" max="10" placeholder="max-10" step="0.1">

        </div>

        </div>
        



        <!-- -----------------------------   course-2   ------------------------------------------ -->
        <div class="course-division-dark-variant">
          <br>
        <div class="row">
          <h5 class="semester-heading-1"> Semester-2 </h5>

        <div class="col align-self-start course-div-parts">
       <h6>Credits</h6>
       <input type="number" id="sem2c" name="c2" value="<?php echo $c2?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
      
        </div>
          


        <div class="col align-self-center course-div-parts semester-heading-2">
          <h5> Semester-2 </h5>
        </div> 

        
        <div class="col align-self-end course-div-parts">
          <h6>GPA</h6>
          <input type="number" id="sem2g" name="g2" value="<?php echo $g2?>" min="0" max="10" placeholder="max-10" step="0.1">

        </div>

        </div>
        </div>
        


          <!-- ---------------------------   course-3   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-3 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem3c" name="c3" value="<?php echo $c3?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-3 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem3g" name="g3" value="<?php echo $g3?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
        
          


          <!-- --------------------------   course-4   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-4 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem4c" name="c4" value="<?php echo $c4?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-4 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem4g" name="g4" value="<?php echo $g4?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          
        
          




          <!-- ---------------------------------   course-5   --------------------------------- -->
          <div class="course-division">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-5 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem5c" name="c5" value="<?php echo $c5?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-5 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem5g" name="g5" value="<?php echo $g5?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          

          <!-- ---------------------------------   course-6   ---------------------------------- -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-6 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem6c" name="c6" value="<?php echo $c6?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-6 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem6g" name="g6" value="<?php echo $g6?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          



          <!-- --------------------   course-7   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-7 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem7c" name="c7" value="<?php echo $c7?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-7 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem7g" name="g7" value="<?php echo $g7?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          
        
          


          <!-- -----------------------   course-8   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-8 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem8c" name="c8" value="<?php echo $c8?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-8 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem8g" name="g8" value="<?php echo $g8?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          
        
          



          <!-- ------------------------   course-9   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-9 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem9c" name="c9" value="<?php echo $c9?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-9 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem9g" name="g9" value="<?php echo $g9?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          
        
          



          <!-- -----------------------   course-10   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-10 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem10c" name="c10" value="<?php echo $c10?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-10 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem10g" name="g10" value="<?php echo $g10?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
        
          


          <!-- -----------------------   course-11   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-11 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem11c" name="c11" value="<?php echo $c11?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-11 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem11g" name="g11" value="<?php echo $g11?>" min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          
        
          



          <!-- -----------------------   course-12   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
            <h5 class="semester-heading-1"> Semester-12 </h5>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
         <input type="number" id="sem12c" name="c12" value="<?php echo $c12?>" min="1" max="50" step="1" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="max-50">
        
          </div>
            
  
  
          <div class="col align-self-center course-div-parts semester-heading-2">
            <h5> Semester-12 </h5>
          </div> 
  
          
          <div class="col align-self-end course-div-parts">
            <h6>GPA</h6>
            <input type="number" id="sem12g" name="g12" value="<?php echo $g12?>"  min="0" max="10" placeholder="max-10" step="0.1">
  
          </div>
  
          </div>
          </div>
          
         
          


    <!-- submit buttons -->

    <div class="compute-btn">


            <button type="submit" name="cgpasubmit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
         
            <button type="button" class="btn btn-outline-dark btn-md btn1" onClick="showPopup();cgpacalculationreset();semwisenull();instantnull();instantresetnull();shownote();" >Reset <i class="fas fa-sliders-h"></i></button>
         
      
     
      
     
            <button type="button" class="btn btn-dark btn-md btn2" onClick="showPopup();cgpacalculation();semwiseresetnull();instantnull();instantresetnull();shownote();" >Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
         
       
      </div>
     

     



</form>








    </div>


  </section>





  <section class="section-2a" id="">


    <div class="icgpacal-sec">
      <br>
      <h2>Instant CGPA</h2>
       <br>

       <img class="i-cgpainputimg" src="img/instant-cgpaimg.svg" alt="Instant CGPA Calculator">
       <h1 class="i-cgpacal-txt">Faster. <br> Accurate. <br> Reliable.</h1>
       

       <!-- form start -->



       <?php

$a1="";
$a2="";
$a3="";
$a4="";



if(isset($_SESSION['userid'])){

$username=$_SESSION['userid'];

$sql = "SELECT * FROM instant_cgpa WHERE userId='$username';";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

$usersId;

$row=mysqli_fetch_assoc($result);

if($resultCheck>0){

$a1= $row["Icgpa1"];
$a2= $row["Icgpa2"];
$a3= $row["Icgpa3"];
$a4= $row["Icgpa4"];


}


  }


        ?>


       <form id="icgpacalform" method="post" action="includes/icgpa-inc.php">

        <div>
        <h6>CGPA till previous sem</h6>
        <input type="number" id="iccgpa" name="icgpa1" value="<?php echo $a1;?>" min="0" max="10" step="0.005" placeholder="(max-10)">
      </div>
         

      <div>
        <h6>Credits Completed till previous sem</h6>
        <input type="number" id="iccredits" name="icgpa2" value="<?php echo $a2;?>" min="1" max="300"  placeholder="(max-300)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" >
      </div>

     <div>
          <h6>Current sem GPA</h6>
            <input type="number" id="iCGPAneed" name="icgpa3" value="<?php echo $a3;?>" min="0" step="0.05" max="10" placeholder="(max-10)">

          </div>
       

     <div>
      <h6>Current sem credits</h6>
      <input type="number" id="incredits" name="icgpa4" value="<?php echo $a4;?>" min="1" max="50"  placeholder="(max-50)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" >
    </div>
     
    

        






        
    <!-- submit buttons -->

    <div class="compute-btn">

    <button type="submit" name="icgpasubmit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
     
         
      <button type="button" class="btn btn-outline-dark btn-md btn1" onClick="showPopup();icgpacalculationreset();semwisenull();semwiseresetnull();instantnull();notenull();">Reset <i class="fas fa-sliders-h"></i></button>
   




      <button type="button" class="btn btn-dark btn-md btn2" onClick="showPopup();icgpacalculation();semwisenull();semwiseresetnull();instantresetnull();notenull();" >Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
   
 
</div>

        </form>

        </div>
    
    
      
    
    
    
      </section>
    






  <section class="section3" id="explore-id">


<div class="explore-sec">



    <img src="img/explore.svg" alt="Other options" class="explore-img">

    <h1>Explore... <br>
    gradevitian.in</h1>

    <div class="exp-btns">

      <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='CGPA Estimator.php'"> CGPA Estimator <i class="fas fa-arrow-alt-circle-right"></i></button>
    <button type="button" class="btn btn-dark btn-lg btn-md btn-sm" onclick="window.location.href='Attendance Calculator.php'">Attendance Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>
    <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='GPA Calculator.php'"> GPA Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>
    <button type="button" class="btn btn-dark btn-lg btn-md btn-sm" onclick="window.location.href='Grade Predictor.php'">Grade Predictor <i class="fas fa-arrow-alt-circle-right"></i></button>


   
    <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='comments.php'">Leave a comment <i class="fas fa-comments"></i></button>

   

    </div>


    <br>
    <br>
    <br>


    <div class="exp-btns-add">
   
     
      <a href="https://wa.me/?text=https://gradevitian.in/"><i class="fab fa-whatsapp fa-2x"></i></a>

      <a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgradevitian.in%2F">
        <i class="fab fa-linkedin-in fa-2x"></i>
    </a>

    </div>






</div>
   


  



  </section>









<!-- FEEDBACK, Footer are in footer.php -->

<?php
include_once 'footer.php';
?>











</div>

<script>
//------------------------------------- input alerts-------------------------------------------

//All input limits

//--------------------------------semwise CGPA---------------------------------------------------------------------

document.getElementById("sem1c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem1c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem1c").value="";
      }

      return;

    }



     document.getElementById("sem1g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem1g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem1g").value="";
      }

      return;

    }



    document.getElementById("sem2c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem2c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem2c").value="";
      }

      return;

    }



     document.getElementById("sem2g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem2g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem2g").value="";
      }

      return;

    }








document.getElementById("sem3c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem3c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem3c").value="";
      }

      return;

    }



     document.getElementById("sem3g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem3g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem3g").value="";
      }

      return;

    }





document.getElementById("sem4c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem4c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem4c").value="";
      }

      return;

    }



     document.getElementById("sem4g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem4g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem4g").value="";
      }

      return;

    }





document.getElementById("sem5c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem5c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem5c").value="";
      }

      return;

    }



     document.getElementById("sem5g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem5g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem5g").value="";
      }

      return;

    }




document.getElementById("sem6c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem6c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem6c").value="";
      }

      return;

    }



     document.getElementById("sem6g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem6g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem6g").value="";
      }

      return;

    }







document.getElementById("sem7c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem7c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem7c").value="";
      }

      return;

    }



     document.getElementById("sem7g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem7g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem7g").value="";
      }

      return;

    }






document.getElementById("sem8c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem8c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem8c").value="";
      }

      return;

    }



     document.getElementById("sem8g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem8g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem8g").value="";
      }

      return;

    }










document.getElementById("sem9c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem9c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem9c").value="";
      }

      return;

    }



     document.getElementById("sem9g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem9g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem9g").value="";
      }

      return;

    }





document.getElementById("sem10c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem10c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem10c").value="";
      }

      return;

    }



     document.getElementById("sem10g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem10g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem10g").value="";
      }

      return;

    }






document.getElementById("sem11c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem11c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem11c").value="";
      }

      return;

    }



     document.getElementById("sem11g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem11g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem11g").value="";
      }

      return;

    }






document.getElementById("sem12c").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem12c").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("sem12c").value="";
      }

      return;

    }



     document.getElementById("sem12g").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("sem12g").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("sem12g").value="";
      }

      return;

    }

//----------------------------------------------INSTANT CGPA--------------------------------------------------------

document.getElementById("iccgpa").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("iccgpa").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("iccgpa").value="";
      }

      return;

    }






document.getElementById("iccredits").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("iccredits").value="";
        }
        
        if(input<1 || input>300)
        {
        alert("Value should be between 1 - 300");
        document.getElementById("iccredits").value="";
      }

      return;

    }




document.getElementById("iCGPAneed").onkeyup=function(){
        var input=parseFloat(this.value);
        if(Number.isNaN(input)){
              document.getElementById("iCGPAneed").value="";
        }
        
        if(input<0 || input>10)
        {
        alert("Value should be between 0 - 10");
        document.getElementById("iCGPAneed").value="";
      }

      return;

    }






document.getElementById("incredits").onkeyup=function(){
        var input=parseInt(this.value);
        if(Number.isNaN(input)){
              document.getElementById("incredits").value="";
        }
        
        if(input<1 || input>50)
        {
        alert("Value should be between 1 - 50");
        document.getElementById("incredits").value="";
      }

      return;

    }





// ------------------------------- copy-clip board--------------------------------
function copyText(htmlElement){
  if(!htmlElement){
    return;
  }

  let elementText = htmlElement.innerText;
  let inputElement = document.createElement('input');
  inputElement.setAttribute('value', elementText);
  document.body.appendChild(inputElement);
  inputElement.select();
  document.execCommand('copy');
  inputElement.parentNode.removeChild(inputElement);

}
document.querySelector('#copy-text-btn').onclick = 
function(){
copyText(document.querySelector('#clip-text'));
}


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



</script>




<!-- Javascript files -->
<script src="js/index.js"></script>
<script src="js/CGPA Calculator.js"></script>


</body>
</html>
