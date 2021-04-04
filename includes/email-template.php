
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email - gradevitian</title>




  <style>

@import url("https://fonts.googleapis.com/css2?family=Pacifico&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap");


  body{
    
  }

  .template-body{
 
  }
  .template-body h1{
   
  }
  </style>
</head>
<body style="background-color: #add8e6;">
  <div style=" margin-top: 30px; font-family: 'Montserrat', sans-serif;
 color: #383754;
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 text-align: center;">
  <h1 style=" font-family: 'Pacifico', cursive;
    color: #383754;">gradevitian.in</h1>
  <img style="height:50px;" src="../img/brand-logo.svg" alt="logo" />

  <br>
<h4>Create your new password.</h4>
  <h6>Hello! User,</h6>
<p>

We received a password reset request. The link to reset your password is below. If you didn't make this request, you can ignore this email.
</p>

<p>Here is your password reset link: </p>
<a href="<?php echo $url;?>" style="color:brown"><b> Create new password</b></a>


  
  </div>
</body>
</html>