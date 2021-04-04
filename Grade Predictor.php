<?php

session_start();

require_once 'includes/dbh-inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Predictor-gradeVITian</title>

  <link rel="icon" href="img/LOGO-192px.png" type="image/gif">
  <meta name="author" content="Sabarish Reddy Remala">

  <meta name="keywords"
    content="grade predictor VIT, VIT, VIT grade calculator, VIT cgpa calculator, instant cgpa, gpa calculator vit, grade vitian, gradevitan, grade vit, VIT attendance calculator, gpa calculator, VIT, calculation, semester, vellore, vellore institute of technology, FAT, exams, class, project, lab, vitian, theory, j component">
    
  <meta name="description"
    content="It is a tool that helps you to predict the grade for a course and estimates the final marks along with the absolute grade.">
 
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
  <link rel="stylesheet" href="css/Grade Predictor.css">
  



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

  <!-- ---------------------- social links & loading   --------------------------------- -->
  
  <div id="loading">
    <img src="img/loading.svg" alt="gradevitian">
    <h3>gradevitian.in</h3>
  </div>


<!-- ----------------------------------  POP UP     --------------------------------------- -->

<div class="full-screen flex-container-center hidden" id="pop-up-result">
  <img class="result-img" src="img/result pop-up.svg" alt="gradeVITian result">
  
  <!-- BODY of pop-up -->


    <!-- grade predictor -->
    <strong> <p id="gradepred" ></p></strong> 
    <strong> <p id="gradepred1" ></p></strong> 
    <strong> <p id="gradepred2" ></p></strong> 
    <strong> <p id="gradepred3" ></p></strong> 
    <strong> <p id="gradepred4" ></p></strong> 

    


 <!-- grade predictor reset -->

 <h5><strong id="gradepredr"></strong></h5>
 <h5 id="gradepred1r" ></h5>





  <!-- weightage converter -->
  <h5><strong id="weigh-conv-result"></strong></h5>


   <!-- weightage converter reset -->
   <h5><strong id="weigh-conv-reset"></strong></h5>









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
            <img class="brand-logo-fixedtops" src="brand-logo.svg" alt="logo" />
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

    <div class="gpsec">
      <br>
      <h2>Grade Predictor</h2>
       <br>

       <img class="gpinputimg" src="img/growth.svg" alt="GradePredictor">

       <!-- form start -->

       <?php
  
  $tccredits = "";
  $tcredits = "";
  $lcredits = "";
  $jcredits = "";
  $cat1 = "";
  $cat2 = "";
  $da1 = "";
  $da2 = "";
  $quiz = "";
  $fat = "";
  $addlearn = "";
  $labint = "";
  $labfat = "";
  $jreview1 = "";
  $jreview2 = "";
  $jreview3 = "";





if(isset($_SESSION['userid'])){

$loginuserid=$_SESSION['userid'];

$sql_grade_pred = "SELECT * FROM grade_predictor WHERE userId='$loginuserid';";
$result_grade_pred  = mysqli_query($conn,$sql_grade_pred);

$resultCheck_grade_pred = mysqli_num_rows($result_grade_pred);

$usersId;

$row_grade_pred = mysqli_fetch_assoc($result_grade_pred);

if($resultCheck_grade_pred >0){


$tccredits = $row_grade_pred["tccredits"];
$tcredits = $row_grade_pred["tcredits"];
$lcredits = $row_grade_pred["lcredits"];
$jcredits = $row_grade_pred["jcredits"];
$cat1 = $row_grade_pred["cat1"];
$cat2 = $row_grade_pred["cat2"];
$da1 = $row_grade_pred["da1"];
$da2 = $row_grade_pred["da2"];
$quiz = $row_grade_pred["quiz"];
$fat = $row_grade_pred["fat"];
$addlearn = $row_grade_pred["addlearn"];
$labint = $row_grade_pred["labint"];
$labfat = $row_grade_pred["labfat"];
$jreview1 = $row_grade_pred["jreview1"];
$jreview2 = $row_grade_pred["jreview2"];
$jreview3 = $row_grade_pred["jreview3"];





}


  }


    ?>








       <form id="gradepred-form" action="includes/gradepred-inc.php" method="post" >
        
        <div>

          <h5>Total Course Credits</h5>
          <select id="pcc" name="tccredits">

              <option value="Course credits" id="pcca" class="default-reset">Course credits</option>
              <option value="1" <?php if($tccredits=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($tccredits=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($tccredits=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($tccredits=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($tccredits=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($tccredits=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($tccredits=="20") echo 'selected="selected"'; ?>>20</option>

          </select>


        </div>

      


        <div class="row course-division">
     

          <div class="col align-self-start course-div-parts">
            <h5>Theory Credits</h5>
            <select id="ptc" name="tcredits">
         
              <option value="Theory credits" class="default-reset">Theory credits</option>
              <option value="1" <?php if($tcredits=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($tcredits=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($tcredits=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($tcredits=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($tcredits=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($tcredits=="6") echo 'selected="selected"'; ?>>6</option>
              
            </select>
          </div>
            
    
    
          <div class="col align-self-center course-div-parts">
            <h5>Lab Credits</h5>
            <select id="plc" name="lcredits">
             
              <option value="Lab credits" class="default-reset">Lab credits</option>
              <option value="1" <?php if($lcredits=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($lcredits=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($lcredits=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($lcredits=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($lcredits=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($lcredits=="6") echo 'selected="selected"'; ?>>6</option>
              

              
            </select>
    
          </div>
    
          
          <div class="col align-self-end course-div-parts">
            <h5>J-comp Credits</h5>
            <select id="pjc" name="jcredits">
            
              <option value="J-comp credits" class="default-reset">J-comp credits</option>
              <option value="1" <?php if($jcredits=="1") echo 'selected="selected"'; ?>>1</option>
              <option value="2" <?php if($jcredits=="2") echo 'selected="selected"'; ?>>2</option>
              <option value="3" <?php if($jcredits=="3") echo 'selected="selected"'; ?>>3</option>
              <option value="4" <?php if($jcredits=="4") echo 'selected="selected"'; ?>>4</option>
              <option value="5" <?php if($jcredits=="5") echo 'selected="selected"'; ?>>5</option>
              <option value="6" <?php if($jcredits=="6") echo 'selected="selected"'; ?>>6</option>
              <option value="20" <?php if($jcredits=="20") echo 'selected="selected"'; ?>>20
              </option>
              
            </select>
    
          </div>
    
          </div>



<!-- Individual Components Theory,Lab, Project -->
    
    
    <div class="course-division-dark-variant">
    <br>


    <div class="row">
      <h5>Theory Component</h5>
      <br>

      <div class="col align-self-start course-div-parts">
        <h6>CAT-1</h6>
        <input type="number" name="cat1" value="<?php echo $cat1;?>" id="pcat1" min="0" step="1" max="50" placeholder="max-50" class="default-reset-input-field" />
      </div>
        

      
      <div class="col align-self-end course-div-parts">
        <h6>CAT-2</h6>
       <input type="number" name="cat2" value="<?php echo $cat2;?>" id="pcat2" min="0" step="1" max="50" placeholder="max-50" class="default-reset-input-field"/>

      </div>

      </div>




     <br> 
    <div class="row course-division">
     

      <div class="col align-self-start course-div-parts">
        <h6>DA/Quiz</h6>
       <input type="number" name="da1" value="<?php echo $da1;?>" id="pdq1" min="0" step="1" max="10" placeholder="max-10" class="default-reset-input-field"/>
      </div>
        


      <div class="col align-self-center course-div-parts">
        <h6>DA/Quiz</h6>
        <input type="number" name="da2" value="<?php echo $da2;?>" id="pdq2" min="0" step="1" max="10" placeholder="max-10" class="default-reset-input-field"/>

      </div>

      
      <div class="col align-self-end course-div-parts">
        <h6>DA/Quiz</h6>
        <input type="number" name="quiz" value="<?php echo $quiz;?>" id="pdq3" min="0" step="1" max="10" placeholder="max-10" class="default-reset-input-field"/>

      </div>

      </div>



      <br>
      <div class="row course-division">
    

        <div class="col align-self-start course-div-parts">
          <h6>Final Assesment Test</h6>
        <input type="number" name="fat" value="<?php echo $fat;?>" id="ptf" min="0" step="1" max="100" placeholder="max-100" class="default-reset-input-field"/>
        </div>
          
  
  
  
        
        <div class="col align-self-end course-div-parts">
          <h6>Additional Learning</h6>
          <input type="number" name="addlearn" value="<?php echo $addlearn;?>" id="adl" min="0" step="1" max="10" placeholder="max-10" class="default-reset-input-field"/>
  
        </div>
  
        </div>
       <br>
      </div>



      



    
     <br> 
    <div class="row course-division">
      <h5>Lab Component</h5>
      <br>

      <div class="col align-self-start course-div-parts">
        <h6>Lab Internals</h6>
        <input type="number" name="labint" value="<?php echo $labint;?>" id="pli" min="0" step="1" max="60" placeholder="max-60" class="default-reset-input-field"/>
      </div>
        


      
      <div class="col align-self-end course-div-parts">
        <h6>Lab FAT</h6>
        <input type="number" name="labfat" value="<?php echo $labfat;?>" id="plf" min="0" step="1" max="100" placeholder="max-50" class="default-reset-input-field"/>

      </div>

      </div>
      <br>

   


    
    
    
         
         <div class="course-division-dark-variant">
         <br>


         <div class="row ">
          <h5>J Component</h5>
          <br>
    
          <div class="col align-self-start course-div-parts">
            <h6>Review-1</h6>
            <input type="number" name="jreview1" value="<?php echo $jreview1;?>" id="pj1" min="0" step="1" max="20" placeholder="max-20" class="default-reset-input-field"/>
          </div>
            
    
    
        <div class="col align-self-center course-div-parts">
          <h6>Review-2</h6>
          <input type="number" name="jreview2" value="<?php echo $jreview2;?>" id="pj2" min="0" step="1" max="30" placeholder="max-30" class="default-reset-input-field"/>
    
          </div> 
    
          
          <div class="col align-self-end course-div-parts">
            <h6>Review-3</h6>
            <input type="number" name="jreview3" value="<?php echo $jreview3;?>" id="pj3" min="0" step="1" max="50" placeholder="max-50" class="default-reset-input-field"/>
    
          </div>
    
          </div>

          <br>

          
        </div>
        <!-- ---------------------------Terms of use--------------------------- -->
        <br>
        <div id="terms-of-use-div">
        <h5 id="terms-of-use"><a href="" data-toggle="collapse" data-target="#demo">Terms of Use</a></h5>
        
        <div id="demo" class="collapse">
        <p><b>Note:</b> This section is designed and tends to give accurate results only if your secured score is <b>out of</b> above mentioned values. If not convert them using <b>weightage converter</b> (scroll down) and proceed with this.</p>
        </div>

      </div>
       
    
       





    <!-- submit buttons -->

    <div class="compute-btn">

            <button type="submit" name="gradepredsubmit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
     
         
            <button type="button" class="btn btn-outline-dark btn-md btn1" onclick="showPopup();gradeprednull();gradepredreset();weightageconvnull();weightageconvresetnull();">Reset <i class="fas fa-sliders-h"></i></button>
         
      
     
      
     
            <button type="button" class="btn btn-dark btn-md btn2" onclick="showPopup();gradepredresetnull();gradepred();weightageconvnull();weightageconvresetnull();">Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
         
       
      </div>
     

     



</form>








    </div>


  </section>




  <section class="section-2a" id="">


    <div class="weightage-conv-sec">
      <br>
      <h2>Weightage Converter</h2>
       <br>

       <img class="weightage-conv-img" src="img/weightage-conv.svg" alt="Weightage Converter">
       <h1 class="weightage-conv-txt"> Don't just change, <br> transform.</h1>
       

       <!-- form start -->



       
       <?php

$a1="";
$a2="";
$a3="";




if(isset($_SESSION['userid'])){



$username=$_SESSION['userid'];

$sql = "SELECT * FROM weightage_converter WHERE userId='$username';";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

$usersId;

$row=mysqli_fetch_assoc($result);

if($resultCheck>0){

$a1= $row["maxorgmarks"];
$a2= $row["maxweightmarks"];
$a3= $row["orgobtmarks"];



}


  }

        ?>






       <form id="weightage-conv-form" action="includes/weightageconv-inc.php" method="post">


        <div class="weightage-partition">
        <h6>MAXIMUM original marks</h6>
        <input type="number" id="max-org" name="maxorgmarks" value="<?php echo $a1;?>" min="0" max="100" step="1" placeholder="(max-100)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-weightage-conv">
      </div>
        
      

      <div class="weightage-partition">
        <h6>MAXIMUM weightage marks</h6>
        <input type="number" id="max-weightage" name="maxweightmarks" value="<?php echo $a2;?>" min="1" max="100" step="1" placeholder="(max-100)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-weightage-conv">
      </div>


        <div class="weightage-partition">
          <h6>Original marks obtained</h6>
            <input type="number" id="obtained-org" name="orgobtmarks" value="<?php echo $a3;?>" min="0" step="1" max="100" placeholder="(max-100)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-weightage-conv">

          </div>
       
    

        






        
    <!-- submit buttons -->

    <div class="compute-btn">

    <button type="submit" name="weightageconvsubmit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
     
         
      <button type="button" class="btn btn-outline-dark btn-md btn1" onClick="showPopup();gradeprednull();gradepredresetnull();weightageconvnull();weightageconvreset();">Reset <i class="fas fa-sliders-h"></i></button>
   




      <button type="button" class="btn btn-dark btn-md btn2" onClick="showPopup();gradeprednull();gradepredresetnull();weightageconv();weightageconvresetnull();" >Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
   
 
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
    <button type="button" class="btn btn-dark btn-lg btn-md btn-sm" onclick="window.location.href='GPA Calculator.php'">GPA Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>


   
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









</div>   <!-- ----------------------------blur div------------------------ -->




<script>


//All input limits


document.getElementById("pcat1").onkeyup = function () {
      var x = document.getElementById("withouttfat");
      var input = parseFloat(this.value);
     
        if (Number.isNaN(input)) {
          document.getElementById("pcat1").value = "";
        }

        if (input < 0 || input > 50) {
          alert("Value should be between 0 - 50");
          document.getElementById("pcat1").value = "";
        }
    

      return;

    }


    document.getElementById("pcat2").onkeyup = function () {

      var x = document.getElementById("withouttfat");
      var input = parseFloat(this.value);
   
        if (Number.isNaN(input)) {
          document.getElementById("pcat2").value = "";
        }

        if (input < 0 || input > 50) {
          alert("Value should be between 0 - 50");
          document.getElementById("pcat2").value = "";
        }
     

      return;

    }



    document.getElementById("pdq1").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pdq1").value = "";
      }

      if (input < 0 || input > 10) {
        alert("Value should be between 0 - 10");
        document.getElementById("pdq1").value = "";
      }

      return;

    }



    document.getElementById("pdq2").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pdq2").value = "";
      }

      if (input < 0 || input > 10) {
        alert("Value should be between 0 - 10");
        document.getElementById("pdq2").value = "";
      }

      return;

    }


    document.getElementById("pdq3").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pdq3").value = "";
      }

      if (input < 0 || input > 10) {
        alert("Value should be between 0 - 10");
        document.getElementById("pdq3").value = "";
      }

      return;

    }


    document.getElementById("ptf").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("ptf").value = "";
      }

      if (input < 0 || input > 100) {
        alert("Value should be between 0 - 100");
        document.getElementById("ptf").value = "";
      }

      return;

    }


    document.getElementById("pli").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pli").value = "";
      }

      if (input < 0 || input > 60) {
        alert("Value should be between 0 - 60");
        document.getElementById("pli").value = "";
      }

      return;

    }


    document.getElementById("plf").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("plf").value = "";
      }

      if (input < 0 || input > 50) {
        alert("Value should be between 0 - 50");
        document.getElementById("plf").value = "";
      }

      return;

    }


    document.getElementById("pj1").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pj1").value = "";
      }

      if (input < 0 || input > 20) {
        alert("Value should be between 0 - 20");
        document.getElementById("pj1").value = "";
      }

      return;

    }



    document.getElementById("pj2").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pj2").value = "";
      }

      if (input < 0 || input > 30) {
        alert("Value should be between 0 - 30");
        document.getElementById("pj2").value = "";
      }

      return;

    }


    document.getElementById("pj3").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("pj3").value = "";
      }

      if (input < 0 || input > 50) {
        alert("Value should be between 0 - 50");
        document.getElementById("pj3").value = "";
      }

      return;

    }





    document.getElementById("adl").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("adl").value = "";
      }

      if (input < 0 || input > 10) {
        alert("Value should be between 0 - 10");
        document.getElementById("adl").value = "";
      }

      return;

    }


    document.getElementById("max-org").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("max-org").value = "";
      }

      if (input < 0 || input > 100) {
        alert("Value should be between 0 - 100");
        document.getElementById("max-org").value = "";
      }

      return;

    }




    document.getElementById("max-weightage").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("max-weightage").value = "";
      }

      if (input < 0 || input > 100) {
        alert("Value should be between 0 - 100");
        document.getElementById("max-weightage").value = "";
      }

      return;

    }



    document.getElementById("obtained-org").onkeyup = function () {
      var input = parseFloat(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("obtained-org").value = "";
      }

      if (input < 0 || input > 100) {
        alert("Value should be between 0 - 100");
        document.getElementById("obtained-org").value = "";
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
<script src="js/Grade Predictor.js"></script>




</body>
</html>
