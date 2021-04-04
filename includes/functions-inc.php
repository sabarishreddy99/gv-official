<?php

session_start();


function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
  $result;
  if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
    $result = true;
  }
  else{
    $result = false;
  }

  return $result;
}

function invalidUid($username){
  $result;
  if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result = true;
  }
  else{
    $result = false;
  }

  return $result;
}


function invalidEmail($email){
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
  }
  else{
    $result = false;
  }

  return $result;
}


function pwdMatch($pwd, $pwdRepeat){
  $result;
  if($pwd !== $pwdRepeat){
    $result = true;
  }
  else{
    $result = false;
  }

  return $result;
}



function uidExists($conn, $username, $email){
  $result;
$sql="SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
  header("location: ../index.php?error=stmtfailed");
  exit();
}

mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
    return $row;
}
else{
  $result = false;
  return $result;
}


mysqli_stmt_close($stmt);



}




function  createUser($conn, $name, $email, $username, $pwd ){
  $result;
$sql="INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
  header("location: ../index.php?error=stmtfailed");
  exit();
}


$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("location: ../index.php?error=none");
header("location: ../login.php");

exit();



}



function emptyInputLogin($username, $pwd){
  $result;
  if(empty($username) || empty($pwd)){
    $result = true;
  }
  else{
    $result = false;
  }

  return $result;
}


function loginUser($conn, $username, $pwd){

  $uidExists = uidExists($conn, $username, $username);

  if($uidExists === false){
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $uidExists["usersPwd"];

  $checkPwd = password_verify($pwd, $pwdHashed);

  if($checkPwd === false){
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  else if($checkPwd === true){
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../User Notifications.php");
    exit();

  }
}



// ---------- Instant CGPA ----------------------------------------

function createicgpa($conn, $usersId, $icgpa1, $icgpa2, $icgpa3, $icgpa4 ){
  $sql = "INSERT INTO instant_cgpa (userId, Icgpa1, Icgpa2, Icgpa3, Icgpa4) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../CGPA Calculator.php?error=stmtfailed");
    exit();
  }
  
  
  mysqli_stmt_bind_param($stmt, "issss", $usersId, $icgpa1, $icgpa2, $icgpa3, $icgpa4);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../CGPA Calculator.php?status=savedsuccessfully");
  exit();
  
  
  
  }

  


// ----------------SEM WISE CGPA-------------------------

  function createcgpa($conn, $usersId, $c1, $g1, $c2, $g2, $c3, $g3, $c4, $g4, $c5, $g5, $c6, $g6, $c7, $g7, $c8, $g8, $c9, $g9, $c10, $g10, $c11, $g11, $c12, $g12)
  {
    $sql = "INSERT INTO sem_wise_cgpa (userId, c1, g1, c2, g2, c3, g3, c4, g4, c5, g5, c6, g6, c7, g7, c8, g8, c9, g9, c10, g10, c11, g11, c12, g12) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../CGPA Calculator.php?error=stmtfailed");
      exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "issssssssssssssssssssssss", $usersId, $c1, $g1, $c2, $g2, $c3, $g3, $c4, $g4, $c5, $g5, $c6, $g6, $c7, $g7, $c8, $g8, $c9, $g9, $c10, $g10, $c11, $g11, $c12, $g12);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../CGPA Calculator.php?status=savedsuccessfully");
    exit();
    
    
    
    }






    
// ----------------GPA Calculator-------------------------

  function creategpacal($conn, $usersId, $c1, $g1, $c2, $g2, $c3, $g3, $c4, $g4, $c5, $g5, $c6, $g6, $c7, $g7, $c8, $g8, $c9, $g9, $c10, $g10, $c11, $g11, $c12, $g12)
  {
    $sql = "INSERT INTO gpa_cal (userId, c1, g1, c2, g2, c3, g3, c4, g4, c5, g5, c6, g6, c7, g7, c8, g8, c9, g9, c10, g10, c11, g11, c12, g12) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../GPA Calculator.php?error=stmtfailed");
      exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "issssssssssssssssssssssss", $usersId, $c1, $g1, $c2, $g2, $c3, $g3, $c4, $g4, $c5, $g5, $c6, $g6, $c7, $g7, $c8, $g8, $c9, $g9, $c10, $g10, $c11, $g11, $c12, $g12);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../GPA Calculator.php?status=savedsuccessfully");
    exit();
    
    
    
    }



    
// ----------------Grade Predictor-------------------------

function creategradepred( $conn, $usersId, $tccredits, $tcredits, $lcredits, $jcredits, $cat1, $cat2, $da1, $da2, $quiz, $fat, $addlearn, $labint, $labfat, $jreview1, $jreview2, $jreview3 )
{
  $sql = "INSERT INTO grade_predictor (userId, tccredits, tcredits, lcredits, jcredits, cat1, cat2, da1, da2, quiz, fat, addlearn, labint, labfat, jreview1, jreview2, jreview3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? );";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../Grade Predictor.php?error=stmtfailed");
    exit();
  }
  
  
  mysqli_stmt_bind_param($stmt, "issssssssssssssss", $usersId, $tccredits, $tcredits, $lcredits, $jcredits, $cat1, $cat2, $da1, $da2, $quiz, $fat, $addlearn, $labint, $labfat, $jreview1, $jreview2, $jreview3 );
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../Grade Predictor.php?status=savedsuccessfully");
  exit();
  
  
  
  }





      
// ----------------Weightage Converter-------------------------

function createweightageconv($conn, $usersId, $maxorgmarks, $maxweightmarks, $orgobtmarks )
{
  $sql = "INSERT INTO weightage_converter (userId, maxorgmarks, maxweightmarks, orgobtmarks) VALUES (?, ?, ?, ? );";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../Grade Predictor.php?error=stmtfailed");
    exit();
  }
  
  
  mysqli_stmt_bind_param($stmt, "isss", $usersId, $maxorgmarks, $maxweightmarks, $orgobtmarks );
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../Grade Predictor.php?status=savedsuccessfully");
  exit();
  
  
  
  }



  
      
// ----------------CGPA Estimator-------------------------

function createcgpaest($conn, $usersId, $cgpaneed, $currentcgpa, $creditscompleted, $creditstakennow )
{
  $sql = "INSERT INTO cgpa_estimator (userId, cgpaneed, currentcgpa, creditscompleted, creditstakennow) VALUES (?, ?, ?, ?, ? );";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../CGPA Estimator.php?error=stmtfailed");
    exit();
  }
  
  
  mysqli_stmt_bind_param($stmt, "issss", $usersId, $cgpaneed, $currentcgpa, $creditscompleted, $creditstakennow );
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../CGPA Estimator.php?status=savedsuccessfully");
  exit();
  
  
  
  }



// ----------------Attendance Calculator format 1-------------------------

function createattendcal1($conn, $usersId, $classespresent, $classesabsent )
{
  $sql = "INSERT INTO attendance_calculator_1 (userId, classespresent, classesabsent) VALUES (?, ?, ? );";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../Attendance Calculator.php?error=stmtfailed");
    exit();
  }
  
  
  mysqli_stmt_bind_param($stmt, "iss", $usersId, $classespresent, $classesabsent );
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../Attendance Calculator.php?status=savedsuccessfully");
  exit();
  
  
  
  }




// ----------------Attendance Calculator format 2-------------------------

function createattendcal2($conn, $usersId, $noofclasses, $classespresent, $classesabsent )
{
  $sql = "INSERT INTO attendance_calculator_2 (userId, noofclasses, classespresent, classesabsent) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../Attendance Calculator.php?error=stmtfailed");
    exit();
  }
  
  
  mysqli_stmt_bind_param($stmt, "isss", $usersId, $noofclasses, $classespresent, $classesabsent );
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../Attendance Calculator.php?status=savedsuccessfully");
  exit();
  
  
  
  }



