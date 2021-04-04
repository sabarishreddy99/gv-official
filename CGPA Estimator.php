<?php


session_start();

require_once 'includes/dbh-inc.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGPA Estimator-gradeVITian</title>

  <link rel="icon" href="img/LOGO-192px.png" type="image/gif">
  <meta name="author" content="Sabarish Reddy Remala">
  
  <meta name="keywords" content=" cgpa esimation, gpa, vit, average, VIT cgpa calculator, instant cgpa, gpa calculator vit, grade vitian, gradevitan, grade vit, VIT, calculation, semester, vellore, vellore institute of technology, FAT, exams, class, project, lab, vitian, theory, j component">
  <meta name="description" content="Hey guys! CGPA ESTIMATOR is an interesting section in all where you can estimate the GPA, credits to be taken in the upcomming semester to meet your desired CGPA.">


 
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
  <link rel="stylesheet" href="css/CGPA Estimator.css">
  


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
  <!-- ---------------------- social links & loading   ------------------------------------- -->
  
  <div id="loading">
    <img src="img/loading.svg" alt="gradevitian">
    <h3>gradevitian.in</h3>
  </div>


<!-- ----------------------------------  POP UP     --------------------------------------- -->

<div class="full-screen flex-container-center hidden" id="pop-up-result">
  <img class="result-img" src="img/result pop-up.svg" alt="gradeVITian result">
  
  <!-- BODY of pop-up -->
 
<h5 id="estcgpa" ></h5>
<h5 id="estcgpa1"></h5>




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






  <!-- -----------------------------------section-2---------------------------------------- -->


  <section class="section2">

    <div class="cgpa-est-sec">
      <br>
      <h2>CGPA Estimator</h2>
       <br>

       <img class="cgpa-est-inputimg" src="img/target.svg" alt="CGPA Estimator">
       <h1 class="cgpa-est-sec-txt">We believe, you will <br>always give your best.</h1>

       <!-- ------------------------------------form start---------------- -->


       
       <?php

$a1="";
$a2="";
$a3="";
$a4="";




if(isset($_SESSION['userid'])){



$username=$_SESSION['userid'];

$sql = "SELECT * FROM cgpa_estimator WHERE userId='$username';";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

$usersId;

$row=mysqli_fetch_assoc($result);

if($resultCheck>0){

$a1= $row["cgpaneed"];
$a2= $row["currentcgpa"];
$a3= $row["creditscompleted"];
$a4= $row["creditstakennow"];



}


  }

        ?>





       <form id="cgpaestform" action="includes/cgpaest-inc.php" method="post">


         <div class="input-bottom-space">     
         <h6>Do you Wanna be a _?_ Pointer <b>?</b> </h6>
           <input type="number" id="CGPAneed" name="cgpaneed" value="<?php echo $a1;?>" min="0" value="9.00" step="0.05" max="10" placeholder="Desired CGPA?" class="default-reset-cgpa-est">
          </div> 
      
        
       
     
     
         
           <div class="input-bottom-space">
           <h6>Current <b>CGPA</b></h6>
           <input type="number" id="ccgpa" name="currentcgpa" value="<?php echo $a2;?>" min="0" max="10" step="0.005" placeholder="Enter your current CGPA." class="default-reset-cgpa-est">
          </div> 
       
     
     
     
           
         <div class="input-bottom-space">     
     <h6>Total no of <b>Credits</b> Completed</h6>
           <input type="number" id="ccredits" name="creditscompleted" value="<?php echo $a3;?>" min="1" max="300"  placeholder="(max-300)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-cgpa-est" >
          </div>
     

           
         <div class="input-bottom-space">
     <h6>No of <b>Credits</b> taken now</h6>
      
           <input type="number" id="ncredits" name="creditstakennow" value="<?php echo $a4;?>" min="1" max="50"  placeholder="(max-50)" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="default-reset-cgpa-est" >
          </div> 
     
     
     
     
    



    <!-- submit buttons -->

    <div class="compute-btn">

             <button type="submit" name="cgpaestsubmit" class="btn btn-outline-dark btn-md btn1">Save <i class="fas fa-save"></i></button>
     
         
            <button type="button" class="btn btn-outline-dark btn-md btn1" onclick="showPopup();cgpaestreset();">Reset <i class="fas fa-sliders-h"></i></button>
         
      
     
      
     
            <button type="button" class="btn btn-dark btn-md btn2" onclick="showPopup();cgpaestimation();" >Compute <i class="fas fa-arrow-alt-circle-right"></i></button>


         
       
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

      <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='Grade Predictor.php'">Grade Predictor <i class="fas fa-arrow-alt-circle-right"></i></button>
    <button type="button" class="btn btn-dark btn-lg btn-md btn-sm" onclick="window.location.href='Attendance Calculator.php'">Attendance Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>
    <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='CGPA Calculator.php'">CGPA Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>
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











</div>


<!-- ----------------------------------input alerts----------------------------------- -->
<script>

  
document.getElementById("CGPAneed").onkeyup=function(){
  var input=parseFloat(this.value);
  if(Number.isNaN(input)){
        document.getElementById("CGPAneed").value="";
  }
  
  if(input<0 || input>10)
  {
  alert("Value should be between 0 - 10");
  document.getElementById("CGPAneed").value="";
}

return;

}



document.getElementById("ccgpa").onkeyup=function(){
  var input=parseFloat(this.value);
  if(Number.isNaN(input)){
        document.getElementById("ccgpa").value="";
  }
  
  if(input<0 || input>10)
  {
  alert("Value should be between 0 - 10");
  document.getElementById("ccgpa").value="";
}

return;

}




document.getElementById("ccredits").onkeyup=function(){

  var input=parseInt(this.value);

  if(Number.isNaN(input)){
        document.getElementById("ccredits").value="";
  }
  
  if(input<1 || input>300)
  {
  alert("Value should be between 1 - 300");
  document.getElementById("ccredits").value="";
}

return;

}



document.getElementById("ncredits").onkeyup=function(){


  var input=parseInt(this.value);
  if(Number.isNaN(input)){
        document.getElementById("ncredits").value="";
  }
  
  if(input<1 || input>50)
  {
  alert("Value should be between 1 - 50");
  document.getElementById("ncredits").value="";
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
<script src="js/CGPA Estimator.js"></script>


</body>
</html>
