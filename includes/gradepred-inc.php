<?php

if(isset($_POST["gradepredsubmit"])){


  
  $tccredits = $_POST["tccredits"];
  $tcredits = $_POST["tcredits"];
  $lcredits = $_POST["lcredits"];
  $jcredits = $_POST["jcredits"];
  $cat1 = $_POST["cat1"];
  $cat2 = $_POST["cat2"];
  $da1 = $_POST["da1"];
  $da2 = $_POST["da2"];
  $quiz = $_POST["quiz"];
  $fat = $_POST["fat"];
  $addlearn = $_POST["addlearn"];
  $labint = $_POST["labint"];
  $labfat = $_POST["labfat"];
  $jreview1 = $_POST["jreview1"];
  $jreview2 = $_POST["jreview2"];
  $jreview3 = $_POST["jreview3"];






  require_once 'dbh-inc.php';
  require_once 'functions-inc.php';



  



if(isset($_SESSION['userid'])){

$username=$_SESSION['useruid'];

$sql="SELECT usersId FROM users WHERE usersUid='$username';";

$result = mysqli_query($conn,$sql);


$resultCheck = mysqli_num_rows($result);


$usersId;
while($row=mysqli_fetch_assoc($result)){
$usersId=$row["usersId"];
}

// ----------------   checking userId in sem_wise_cgpa table  --------------------------------
$sql1="SELECT * FROM grade_predictor WHERE userId='$usersId';";
$result1 = mysqli_query($conn,$sql1);
$resultCheck1 = mysqli_num_rows($result1);


if($resultCheck1>0){

  $sql1 = "UPDATE grade_predictor SET tccredits='$tccredits', tcredits='$tcredits', lcredits='$lcredits', jcredits='$jcredits', cat1='$cat1', cat2='$cat2', da1='$da1', da2='$da2', quiz='$quiz', fat='$fat', addlearn='$addlearn', labint='$labint', labfat='$labfat', jreview1='$jreview1', jreview2='$jreview2', jreview3='$jreview3' WHERE userId='$usersId';"; 
  mysqli_query($conn,$sql1);

  header("location: ../Grade Predictor.php?status=updatedsuccessfully"); 
  exit();
 
}
else{


 creategradepred( $conn, $usersId, $tccredits, $tcredits, $lcredits, $jcredits, $cat1, $cat2, $da1, $da2, $quiz, $fat, $addlearn, $labint, $labfat, $jreview1, $jreview2, $jreview3 );

}
 
}

else{
  header("location: ../index.php"); 
  exit();
}



}