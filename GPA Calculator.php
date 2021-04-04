<?php


session_start();

require_once 'includes/dbh-inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GPA Calculator-gradeVITian</title>

  <link rel="icon" href="img/LOGO-192px.png" type="image/gif">
  <meta name="author" content="Sabarish Reddy Remala">

  <meta name="keywords" content="gpa, gpa calculator vit, gpa calculator, vit, grade vitian, gradevitan, grade vit, VIT, calculation, semester, vellore, vellore institute of technology, FAT, exams, class, project, lab, vitian, theory, j component">
  
  <meta name="description" content="VITians can compute their GPA with the course credits and the grade they have secured in that particular semester accurately up to 3 decimal places with in no time." >

 
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
  <link rel="stylesheet" href="css/GPA Calculator.css">
  



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



<!-- ----------------------------------  POP UP     --------------------------------------- -->

<div class="full-screen flex-container-center hidden" id="pop-up-result">
  <img class="result-img" src="img/result pop-up.svg" alt="gradeVITian result">
  
  <!-- BODY of pop-up -->


    <!-- gpa calculation -->
  
    <h5><strong id="alertgpacal"></strong></h5>
    <h5 id="alertgpacal1"></h5>

    


 <!-- gpa calculation reset -->

 <h5><strong id="alertgpacalr"></strong></h5>
 <h5 id="alertgpacal1r" ></h5>










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

    <div class="gpacal-sec">
      <br>
      <h2>GPA Calculator</h2>
       <br>

       <img class="gpainputimg" src="img/gpaimg.svg" alt="GPA Calculator">
       

       <!-- form start -->


             

       <?php

$c1=""; $g1=""; $c2=""; $g2=""; $c3=""; $g3=""; $c4=""; $g4=""; $c5=""; $g5=""; $c6=""; $g6=""; $c7=""; $g7=""; $c8=""; $g8=""; $c9=""; $g9=""; $c10=""; $g10=""; $c11=""; $g11=""; $c12=""; $g12="";



if(isset($_SESSION['userid'])){

$loginuserid=$_SESSION['userid'];

$sql_gpa_cal = "SELECT * FROM gpa_cal WHERE userId='$loginuserid';";
$result_gpa_cal = mysqli_query($conn,$sql_gpa_cal);

$resultCheck_gpa_cal = mysqli_num_rows($result_gpa_cal);

$usersId;

$row_gpa_cal = mysqli_fetch_assoc($result_gpa_cal);

if($resultCheck_gpa_cal>0){

$c1= $row_gpa_cal["c1"];
$g1= $row_gpa_cal["g1"];
$c2= $row_gpa_cal["c2"];
$g2= $row_gpa_cal["g2"];
$c3= $row_gpa_cal["c3"];
$g3= $row_gpa_cal["g3"];
$c4= $row_gpa_cal["c4"];
$g4= $row_gpa_cal["g4"];
$c5= $row_gpa_cal["c5"];
$g5= $row_gpa_cal["g5"];
$c6= $row_gpa_cal["c6"];
$g6= $row_gpa_cal["g6"];
$c7= $row_gpa_cal["c7"];
$g7= $row_gpa_cal["g7"];
$c8= $row_gpa_cal["c8"];
$g8= $row_gpa_cal["g8"];
$c9= $row_gpa_cal["c9"];
$g9= $row_gpa_cal["g9"];
$c10= $row_gpa_cal["c10"];
$g10= $row_gpa_cal["g10"];
$c11= $row_gpa_cal["c11"];
$g11= $row_gpa_cal["g11"];
$c12= $row_gpa_cal["c12"];
$g12= $row_gpa_cal["g12"];





}


  }


    ?>



       <form id="gpacalform" method="post" action="includes/gpacal-inc.php">


<!-- ---------------------------------   course-1   ------------------------------------------ -->
        <div class="row course-division">
        <h5>Course-1</h5>
        <br>

        <div class="col align-self-start course-div-parts">
       <h6>Credits</h6>
          <select id="gcred1" name="c1">
             
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c1=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c1=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c1=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c1=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c1=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c1=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c1=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
               
          </select>
        </div>
          


        <div class="col align-self-center course-div-parts">
          <h6>Category</h6>
          <select id="gcat1" placeholder="Course Category">
             <option selected="selected">Course Category</option>
             <option>PC (Program Core) </option>
            <option>PE (Program Elective) </option>
            <option>UC (University Core) </option>
            <option>UE (University Elective) </option>
            
          </select>

        </div>

        
        <div class="col align-self-end course-div-parts">
          <h6>Grade</h6>
          <select id="ggrad1" name="g1">

             <option value="" class="default-reset" >Grade</option>
             <option value="S" <?php if($g1=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g1=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g1=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g1=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g1=="D") echo 'selected="selected"'; ?>>D</option>
             <option value="E" <?php if($g1=="E") echo 'selected="selected"'; ?>>E</option>
              <option value="F" <?php if($g1=="F") echo 'selected="selected"'; ?>>F</option>
               <option value="N" <?php if($g1=="N") echo 'selected="selected"'; ?>>N</option>

          </select>

        </div>

        </div>
        



        <!-- ---------------------------   course-2   ------------------------------------------ -->
        <div class="course-division-dark-variant">
        <br>
        <div class="row ">
          <h5>Course-2</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred2" name="c2">
           
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c2=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c2=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c2=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c2=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c2=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c2=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c2=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat2" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad2" name="g2">
              
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g2=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g2=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g2=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g2=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g2=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g2=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g2=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g2=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          


          <!-- ---------------------------   course-3   ------------------------------------------ -->
          <div class="course-division">
            <br>
        <div class="row">
          <h5>Course-3</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred3" name="c3">
               
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c3=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c3=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c3=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c3=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c3=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c3=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c3=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat3" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad3" name="g3">
                   
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g3=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g3=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g3=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g3=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g3=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g3=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g3=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g3=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          


          <!-- --------------------------   course-4  ------------------------------------- -->
          <div class="course-division-dark-variant">
            <br>
        <div class="row">
          <h5>Course-4</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred4" name="c4">
               
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c4=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c4=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c4=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c4=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c4=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c4=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c4=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category </h6>
            <select id="gcat4" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad4" name="g4">
                  
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g4=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g4=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g4=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g4=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g4=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g4=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g4=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g4=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          




          <!-- ---------------------------------   course-5   --------------------------------- -->
          <div class="course-division">
            <br>
          <div class="row">
          <h5>Course-5</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred5" name="c5">
         
              <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c5=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c5=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c5=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c5=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c5=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c5=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c5=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat5" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad5" name="g5">
                  
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g5=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g5=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g5=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g5=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g5=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g5=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g5=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g5=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          


          <!-- ---------------------------------   course-6   ---------------------------------- -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
          <h5>Course-6</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred6" name="c6">
             
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c6=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c6=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c6=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c6=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c6=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c6=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c6=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat6" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad6" name="g6">
                
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g6=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g6=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g6=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g6=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g6=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g6=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g6=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g6=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          



          <!-- --------------------   course-7   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
          <h5>Course-7</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred7" name="c7">
               
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c7=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c7=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c7=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c7=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c7=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c7=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c7=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat7" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad7" name="g7">
                   
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g7=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g7=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g7=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g7=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g7=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g7=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g7=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g7=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          


          <!-- -----------------------   course-8   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
          <h5>Course-8</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred8" name="c8">
            
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c8=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c8=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c8=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c8=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c8=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c8=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c8=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat8" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad8" name="g8">
         
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g8=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g8=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g8=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g8=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g8=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g8=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g8=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g8=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          



          <!-- ------------------------   course-9   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
          <h5>Course-9</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred9" name="c9">
                 
              <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c9=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c9=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c9=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c9=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c9=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c9=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c9=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat9" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad9" name="g9">
            
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g9=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g9=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g9=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g9=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g9=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g9=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g9=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g9=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          



          <!-- -----------------------   course-10   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
          <h5>Course-10</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred10" name="c10">
              
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c10=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c10=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c10=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c10=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c10=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c10=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c10=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat10" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad10" name="g10">
                  
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g10=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g10=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g10=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g10=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g10=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g10=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g10=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g10=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
        
          


          <!-- -----------------------   course-11   ------------------------------------------ -->
          <div class="course-division">
            <br>
          <div class="row">
          <h5>Course-11</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred11" name="c11">
               
            <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c11=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c11=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c11=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c11=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c11=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c11=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c11=="20") echo 'selected="selected"'; ?>>20</option>
                 
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat11" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad11" name="g11">
                  
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g11=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g11=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g11=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g11=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g11=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g11=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g11=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g11=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>

          </div>
        
          



          <!-- -----------------------   course-12   ------------------------------------------ -->
          <div class="course-division-dark-variant">
            <br>
          <div class="row">
          <h5>Course-12</h5>
          <br>
  
          <div class="col align-self-start course-div-parts">
         <h6>Credits</h6>
            <select id="gcred12" name="c12">

              <option value="" class="default-reset">Credits</option>
              <option value="1" <?php if($c12=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($c12=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($c12=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($c12=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($c12=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($c12=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($c12=="20") echo 'selected="selected"'; ?>>20</option>
                 
            </select>
          </div>
            
  
  
          <div class="col align-self-center course-div-parts">
            <h6>Category</h6>
            <select id="gcat12" placeholder="Course Category">
               <option selected="selected">Course Category</option>
               <option>PC (Program Core) </option>
              <option>PE (Program Elective) </option>
              <option>UC (University Core) </option>
              <option>UE (University Elective) </option>
              
            </select>
  
          </div>
  
          
          <div class="col align-self-end course-div-parts">
            <h6>Grade</h6>
            <select id="ggrad12" name="g12">
                   
            <option value="" class="default-reset" >Grade</option>
            <option value="S" <?php if($g12=="S") echo 'selected="selected"'; ?>>S</option>
            <option value="A" <?php if($g12=="A") echo 'selected="selected"'; ?>>A</option>
            <option value="B" <?php if($g12=="B") echo 'selected="selected"'; ?>>B</option>
            <option value="C" <?php if($g12=="C") echo 'selected="selected"'; ?>>C</option>
            <option value="D" <?php if($g12=="D") echo 'selected="selected"'; ?>>D</option>
            <option value="E" <?php if($g12=="E") echo 'selected="selected"'; ?>>E</option>
            <option value="F" <?php if($g12=="F") echo 'selected="selected"'; ?>>F</option>
            <option value="N" <?php if($g12=="N") echo 'selected="selected"'; ?>>N</option>
               
            </select>
  
          </div>
  
          </div>
          </div>
          
         
          
    <br>
    <h6 class="gpacal-note"><b>Note:</b>  Category is <em>optional.</em></h6>


    <!-- submit buttons -->

    <div class="compute-btn">

            <button type="submit" name="gpacalsubmit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
     
         
            <button type="button" class="btn btn-outline-dark btn-md btn1" onclick="showPopup();gpacalreset();">Reset <i class="fas fa-sliders-h"></i></button>
         
      
     
      
     
            <button type="button" class="btn btn-dark btn-md btn2" onclick="showPopup();gpacal()">Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
         
       
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
    <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='CGPA Calculator.php'"> CGPA Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>
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
<script src="js/GPA Calculator.js"></script>


</body>
</html>
