<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In - gradeVITian</title>

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
  <link rel="stylesheet" href="css/login.css">
  
  



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
      </div>





<!-- section1 -->


<section id="section1">
<div class="intro-content">
<!-- navigation bar -->
<div class="navigation">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img class="brand-logo" src="img/brand-logo.svg" alt="logo" />gradeVITian</a>
      <button class="navbar-toggler" type="button" onclick="openNav()">
        <i class="fas fa-ellipsis-h fa-2x"></i>
      </button>

      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times fa-1.5x"></i></a>
        <div class="overlay-content">
          
          <a href="GPA Calculator.php">GPA Calculator</a>
          <a href="index.php">CGPA Calculator</a>
          <a href="Grade Predictor.php">Grade Predictor</a>
          <a href="CGPA Estimator.php">CGPA Estimator</a>
          <a href="Attendance Calculator.php">Attendance Calculator</a>
          

          
        </div>
      </div>


      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">CGPA Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="GPA Calculator.php">GPA Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Grade Predictor.php">Grade Predictor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="CGPA Estimator.php">CGPA Estimator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Attendance Calculator.php">Attendance Calculator</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


</div>





<div class="login-signup-btn">
  <p>New to gradeVITian? 
    <button type="button" class="btn btn-dark btn-md" onclick="window.location.href='index.php'" >Sign Up</button></p>
</div>







  
  
      <div class="intro-text">

        <h1 class="hi-there">Hi there!</h1>
        <h1 class="intro-txt-line-2">I'll help you in computing</h1>
        <h1>
          <a href="" class="typewrite" data-period="2000" data-type='[ "GPA.", "CGPA.", "Attendance %.", "Grades." ]'>
            <span class="wrap"></span>
          </a>
        </h1>





        

<div class="login-form">
<h2>Log In</h2>
<img class="login-img" src="img/login-img.svg" alt="Log in">
<img class="welcome-img" src="img/welcome-img.svg" alt="welcome">
<br>
<form action="includes/login-inc.php" method="post" > 
<input type="text" name="uid" placeholder="Email Id/ User Id" value="">

<input type="password" name="pwd" placeholder="Password..." value="">

<?php
if(isset($_GET["error"])){

  if($_GET["error"] == "emptyinput"){

    echo '<P style="color: #DC143C;">Fill in all fields!</P>';

  }

  else if($_GET["error"] == "wronglogin"){
    echo '<P style="color: #DC143C;">Incorrect username/password!</P>';
  }


}

if(isset($_GET["reset"])){


if($_GET["reset"] == "passwordupdated"){
  echo '<P style="color: green;"> Your password has been updated successfully! </P>';
}

elseif($_GET["reset"] == "failed"){
  echo '<P style="color:#DC143C;"> We are now facing some issues. Please try again later! </P>';
}

}

?>


<button type="submit" name="submit" class="btn btn-dark btn-md" id="">Log In</button>
</form>

<br>

<p><a href="includes/reset-password.php" style="color:#556B2F;">Forgot Password</a></p>
<p>Logging in signifies that you have signed up by reading and accepting to the  <a href="Terms and Conditions.php">Terms and Conditions <i class="fas fa-external-link-alt"></i></a> and our <a href="Privacy Policy.php">Privacy Policy <i class="fas fa-external-link-alt"></i></a>.</p>


</div>








   <div class="add2home">

   <h4>New to gradeVITian? 
    <button type="button" class="btn btn-outline-dark btn-md" style="border-width:3px;"  onclick="window.location.href='index.php'" >Sign Up</button></h4>
    <br>
    <h4>Add to home screen</h4>

    <div class="twinbtns-pc">
    <button type="button" class="btn btn-outline-dark btn-lg" id="btn1pc"><i class="fab fa-windows"></i> Windows</button>
    <button type="button" class="btn btn-dark btn-lg" id="btn2pc"><i class="fab fa-android"></i> Android</button>
  </div>     



  <div class="twinbtns-mob">
    <button type="button" class="btn btn-outline-dark btn-md" id="btn1mob"><i class="fab fa-windows"></i> Windows</button>
    <button type="button" class="btn btn-dark btn-md" id="btn2mob"><i class="fab fa-android"></i> Android</button>

  </div> 
  
  </div>


      </div>


   
  

   
      
   

</div>

  </section>




 




  <!-- section-2 -->

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


   
    <button type="button" class="btn btn-outline-dark btn-lg btn-md btn-sm" onclick="window.location.href='CGPA Calculator.php'">CGPA Calculator <i class="fas fa-arrow-alt-circle-right"></i></button>

   

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

// document.getElementById("sem1c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem1c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem1c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem1g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem1g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem1g").value="";
//       }

//       return;

//     }



//     document.getElementById("sem2c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem2c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem2c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem2g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem2g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem2g").value="";
//       }

//       return;

//     }








// document.getElementById("sem3c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem3c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem3c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem3g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem3g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem3g").value="";
//       }

//       return;

//     }





// document.getElementById("sem4c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem4c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem4c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem4g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem4g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem4g").value="";
//       }

//       return;

//     }





// document.getElementById("sem5c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem5c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem5c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem5g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem5g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem5g").value="";
//       }

//       return;

//     }




// document.getElementById("sem6c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem6c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem6c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem6g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem6g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem6g").value="";
//       }

//       return;

//     }







// document.getElementById("sem7c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem7c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem7c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem7g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem7g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem7g").value="";
//       }

//       return;

//     }






// document.getElementById("sem8c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem8c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem8c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem8g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem8g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem8g").value="";
//       }

//       return;

//     }










// document.getElementById("sem9c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem9c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem9c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem9g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem9g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem9g").value="";
//       }

//       return;

//     }





// document.getElementById("sem10c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem10c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem10c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem10g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem10g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem10g").value="";
//       }

//       return;

//     }






// document.getElementById("sem11c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem11c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem11c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem11g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem11g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem11g").value="";
//       }

//       return;

//     }






// document.getElementById("sem12c").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem12c").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("sem12c").value="";
//       }

//       return;

//     }



//      document.getElementById("sem12g").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("sem12g").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("sem12g").value="";
//       }

//       return;

//     }

// //----------------------------------------------INSTANT CGPA--------------------------------------------------------

// document.getElementById("iccgpa").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("iccgpa").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("iccgpa").value="";
//       }

//       return;

//     }






// document.getElementById("iccredits").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("iccredits").value="";
//         }
        
//         if(input<1 || input>300)
//         {
//         alert("Value should be between 1 - 300");
//         document.getElementById("iccredits").value="";
//       }

//       return;

//     }




// document.getElementById("iCGPAneed").onkeyup=function(){
//         var input=parseFloat(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("iCGPAneed").value="";
//         }
        
//         if(input<0 || input>10)
//         {
//         alert("Value should be between 0 - 10");
//         document.getElementById("iCGPAneed").value="";
//       }

//       return;

//     }






// document.getElementById("incredits").onkeyup=function(){
//         var input=parseInt(this.value);
//         if(Number.isNaN(input)){
//               document.getElementById("incredits").value="";
//         }
        
//         if(input<1 || input>50)
//         {
//         alert("Value should be between 1 - 50");
//         document.getElementById("incredits").value="";
//       }

//       return;

//     }





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



</body>
</html>
