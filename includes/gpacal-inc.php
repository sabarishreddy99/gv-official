<?php

if(isset($_POST["gpacalsubmit"])){
  $c1 = $_POST["c1"];
  $g1 = $_POST["g1"];
  $c2 = $_POST["c2"];
  $g2 = $_POST["g2"];
  $c3 = $_POST["c3"];
  $g3 = $_POST["g3"];
  $c4 = $_POST["c4"];
  $g4 = $_POST["g4"];
  $c5 = $_POST["c5"];
  $g5 = $_POST["g5"];
  $c6 = $_POST["c6"];
  $g6 = $_POST["g6"];
  $c7 = $_POST["c7"];
  $g7 = $_POST["g7"];
  $c8 = $_POST["c8"];
  $g8 = $_POST["g8"];
  $c9 = $_POST["c9"];
  $g9 = $_POST["g9"];
  $c10 = $_POST["c10"];
  $g10 = $_POST["g10"];
  $c11 = $_POST["c11"];
  $g11 = $_POST["g11"];
  $c12 = $_POST["c12"];
  $g12 = $_POST["g12"];





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
$sql1="SELECT * FROM gpa_cal WHERE userId='$usersId';";
$result1 = mysqli_query($conn,$sql1);
$resultCheck1 = mysqli_num_rows($result1);


if($resultCheck1>0){

  $sql1 = "UPDATE gpa_cal SET c1='$c1', g1='$g1', c2='$c2', g2='$g2', c3='$c3', g3='$g3', c4='$c4', g4='$g4', c5='$c5', g5='$g5', c6='$c6', g6='$g6', c7='$c7', g7='$g7', c8='$c8', g8='$g8', c9='$c9', g9='$g9', c10='$c10', g10='$g10', c11='$c11', g11='$g11', c12='$c12', g12='$g12' WHERE userId='$usersId';"; 
  mysqli_query($conn,$sql1);

  header("location: ../GPA Calculator.php?status=updatedsuccessfully"); 
  exit();
 
}
else{


 creategpacal($conn, $usersId, $c1, $g1, $c2, $g2, $c3, $g3, $c4, $g4, $c5, $g5, $c6, $g6, $c7, $g7, $c8, $g8, $c9, $g9, $c10, $g10, $c11, $g11, $c12, $g12);

}
 
}

else{
  header("location: ../index.php"); 
  exit();
}



}