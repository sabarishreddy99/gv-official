<?php


session_start();


require_once 'includes/dbh-inc.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Calculator-gradeVITian</title>
  <link rel="icon" href="img/LOGO-192px.png" type="image/gif">
  <meta name="author" content="Sabarish Reddy Remala">

  <meta name="keywords"
    content="attendance Calculator VIT, grade predictor VIT, VIT grade calculator, VIT cgpa calculator, instant cgpa, gpa calculator vit, grade vitian, gradevitan, grade vit, VIT attendance calculator, gpa calculator, VIT, calculation, semester, vellore, vellore institute of technology, FAT, exams, class, project, lab, vitian, theory, j component">
    
  <meta name="description"
    content="It is a tool for calculating your attendance percentage, where many of us bang ourselves in this and starts calculating with pen and paper. This section comprises of two formats, Format-1 deals with the no of classes present and classes absent. Format-2 with total no of classes and classes present or absent. Toggle to switch between them. You can make use of addons to increment and decrement your entries by one unit. The progress bar will alert you with the range by changing its colour. Click on compute if you are entering manually. Don't worry with the input range and special characters, it will alert you the very moment when it finds them.">
 
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
  <link rel="stylesheet" href="css/Attendance Calculator.css">
  



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

<!-- -----------------------------section-1 pop up body--------------------------------- -->
  <div class="progress" id="cbar-div">
    <div class="progress-bar progress-bar-striped progress-bar-animated" 
    style="width:0%;height:22px;" id="cbar"></div>
  </div>
   <br>
 <strong><h5 id="cresult2"></h5></strong>




<!-- -----------------------------section-2 pop up body--------------------------------- -->

 
<div class="progress" id="bar-div">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%;height:22px;"
    id="bar"></div>
</div>
<br>
<h6 id="note-msg"><strong>Note:</strong> Use either any one of the
  entries. (Classes Present or Classes Absent)</h6>
  <br>
<strong><h5 id="result2"></h5></strong>












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

    <div class="attendance-cal-1-sec">
      <br>
      <h2>Attendance Calculator</h2>
      <h5>  Format-1 </h5>
       <br>

       <img class="attendance-inputimg" src="img/attendance-inp-img.svg" alt="Attendance Calculator">
       <h1 class="attendance-1-txt">Your presence <i class="fas fa-check-circle"></i> <br> might be valuable.</h1>

       <!-- form start -->


        
       <?php






$a1="";
$a2="";


if(isset($_SESSION['userid'])){



$username=$_SESSION['userid'];

$sql = "SELECT * FROM attendance_calculator_1 WHERE userId='$username';";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

$usersId;

$row=mysqli_fetch_assoc($result);

if($resultCheck>0){

$a1= $row["classespresent"];
$a2= $row["classesabsent"];




}


  }

        ?>





       <form id="attendancecal-1-form" action="includes/attendcal-1-inc.php" method="post">

<br>

<!-- --------------------------   attendance cal sec-1   ------------------------------------------ -->
        <div>

          <h6>Classes Present:</h6>
            <input type="number" name="classespresent" value="<?php echo $a1;?>" min="1" step="1" max="300" id="cone" placeholder="(max-100)"
              onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-1">
           
        
     





          <h6>Classes Absent:</h6>
            <input type="number" name="classesabsent" value="<?php echo $a2;?>" min="1" max="300" step="1" id="ctwo" placeholder="(max-100)"
              onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-1">
           
        </div>





         
          


    <!-- submit buttons -->

    <div class="compute-btn">


            <button type="submit" name="attendcal1submit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>  
            


         
            <button type="button" class="btn btn-outline-dark btn-md btn1" onclick="showPopup();attendancecal1reset();">Reset <i class="fas fa-sliders-h"></i></button>
         
      
     
      
     
            <button type="button" class="btn btn-dark btn-md btn2" onClick="showPopup();cdivideBy();attendcal2null();">Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
         
       
      </div>
     

     



</form>








    </div>


  </section>





  <section class="section-2a" id="">


    <div class="attendance-cal-2-sec">
      <br>
      <h5>Format-2</h5>
       <br>

       <img class="attendance-2-inputimg" src="img/attendance-cal-2 -inpimg.svg" alt="Instant CGPA Calculator">
       <h1 class="attendance-2-txt">Be the best <br> version of yourself.</h1>
       

       <!-- form start -->


          
       <?php



$b1="";
$b2="";
$b3="";


if(isset($_SESSION['userid'])){



$username=$_SESSION['userid'];

$sql_f2 = "SELECT * FROM attendance_calculator_2 WHERE userId='$username';";
$result_f2 = mysqli_query($conn,$sql_f2);

$resultCheck_f2= mysqli_num_rows($result_f2);

$usersId;

$row_f2=mysqli_fetch_assoc($result_f2);

if($resultCheck_f2>0){

$b1= $row_f2["noofclasses"];
$b2= $row_f2["classespresent"];
$b3= $row_f2["classesabsent"];




}


  }

        ?>




       <form id="attendance-cal-2-form" action="includes/attendcal-2-inc.php" method="post">

        <div>



          <h6 for="noc">Total no of  classes</h6>

            <input type="number" id="noc" name="noofclasses" value="<?php echo $b1;?>" min="1" max="300" step="1"
              placeholder="(max-200)"
              onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-2">

              <br>
              
           


          <h6 for="one">No of classes present</h6>
         
            <input type="number" min="1" step="1" max="300" name="classespresent" value="<?php echo $b2;?>" id="one" placeholder="(max-150)"
              onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-2">
           


         
            <h5>OR</h5>
         




          <h6 for="two">No of classes absent (>= 1)</h6>
             
            <input type="number" min="1" max="300" step="1" name="classesabsent" value="<?php echo $b3;?>" id="two" placeholder="(max-150)"
              onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-2">
            


      </div>
         

      
    

        






        
    <!-- submit buttons -->

    <div class="compute-btn">


    <button type="submit" name="attendcal2submit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
         
      <button type="button" class="btn btn-outline-dark btn-md btn1" onclick="showPopup();attendancecal2reset();">Reset <i class="fas fa-sliders-h"></i></button>
   




      <button type="button" class="btn btn-dark btn-md btn2" onClick="showPopup();divideBy();attendcal1null();">Compute <i class="fas fa-arrow-alt-circle-right"></i></button>
   
 
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
    <button type="button" class="btn btn-dark btn-lg btn-md btn-sm" onclick="window.location.href='CGPA Calculator.php'">CGPA Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>
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

 //All input limits
 document.getElementById("noc").onkeyup = function () {
      var input = parseInt(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("noc").value = "";
      }

      if (input < 1 || input > 200) {
        alert("Value should be between 1 - 200");
        document.getElementById("noc").value = "";
      }

      return;

    }




    document.getElementById("one").onkeyup = function () {
      var input = parseInt(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("one").value = "";
      }

      if (input < 0 || input > 150) {
        alert("Value should be between 0 - 150");
        document.getElementById("one").value = "";
      }

      return;

    }






    document.getElementById("two").onkeyup = function () {
      var input = parseInt(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("two").value = "";
      }

      if (input < 0 || input > 150) {
        alert("Value should be between 0 - 150");
        document.getElementById("two").value = "";
      }

      return;

    }





    document.getElementById("cone").onkeyup = function () {
      var input = parseInt(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("cone").value = "";
      }

      if (input < 0 || input > 100) {
        alert("Value should be between 0 - 100");
        document.getElementById("cone").value = "";
      }

      return;

    }






    document.getElementById("ctwo").onkeyup = function () {
      var input = parseInt(this.value);
      if (Number.isNaN(input)) {
        document.getElementById("ctwo").value = "";
      }

      if (input < 0 || input > 100) {
        alert("Value should be between 0 - 100");
        document.getElementById("ctwo").value = "";
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
<script src="js/Attendance Calculator.js"></script>


</body>
</html>
