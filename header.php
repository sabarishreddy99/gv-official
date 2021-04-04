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
          
          <a id="gpacal-mob-active" href="GPA Calculator.php">GPA Calculator</a>
          <a id="cgpacal-mob-active" href="CGPA Calculator.php">CGPA Calculator</a>
          <a id="gradepred-mob-active" href="Grade Predictor.php">Grade Predictor</a>
          <a id="cgpaest-mob-active" href="CGPA Estimator.php">CGPA Estimator</a>
          <a id="attendancecal-mob-active" href="Attendance Calculator.php">Attendance Calculator</a>
          

          
        </div>
      </div>


      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" id="cgpacal-pc-active"  href="CGPA Calculator.php">CGPA Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="gpacal-pc-active" href="GPA Calculator.php">GPA Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="gradepred-pc-active" href="Grade Predictor.php">Grade Predictor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="cgpaest-pc-active" href="CGPA Estimator.php">CGPA Estimator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="attendancecal-pc-active" href="Attendance Calculator.php">Attendance Calculator</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


</div>




<?php

          if(isset($_SESSION["useruid"])){

            echo '<div class="login-signup-btn">
    
            <a class="btn btn-outline-dark btn-md" style="border-radius: 50px; border-width:3px;" href="includes/logout-inc.php" >Log Out <i class="fas fa-sign-out-alt"></i></a>
              </div>';

              
            echo '<div class="container intro-login-signup">
            <h3>Welcome!</h3>
            
            </div>';

          
           

         


          }

          else{


            echo '<div class="login-signup-btn">
            <h6><i class="fas fa-user"></i> Guest mode!  <a class="btn btn-outline-dark btn-md" href="index.php" >Sign Up</a>
            <a class="btn btn-dark btn-md" href="login.php" >Log In</a></h6>
         </div>';


          }


            ?>
        













  <div class="row">
    <div class="col-lg-6 col-sm-6">
      <div class="intro-text">

      <?php

      if(isset($_SESSION["useruid"])){


       echo '<h1>Hello, <h3> ' .$_SESSION["useruid"]. '!</h3></h1>';

        }
       else{
        echo "<h1>Hi there!</h1>";
        }
      ?>

        <h1 class="intro-txt-line-2">I'll help you in computing</h1>
        <h1>
          <a href="" class="typewrite" data-period="2000" data-type='[ "GPA.", "CGPA.", "Attendance %.", "Grades." ]'>
            <span class="wrap"></span>
          </a>
        </h1>

   <div class="add2home">

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

    <div class="col-lg-6 col-sm-6">
      <img class="intro-img" src="img/intro-img.svg" alt="Graduation">

    </div>
      
    </div>

</div>

  </section>
