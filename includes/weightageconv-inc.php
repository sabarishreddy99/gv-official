<?php




if(isset($_POST["weightageconvsubmit"])){
  $maxorgmarks = $_POST["maxorgmarks"];
  $maxweightmarks = $_POST["maxweightmarks"];
  $orgobtmarks = $_POST["orgobtmarks"];





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

// ----------------   checking userId in weightage_converter table  --------------------------------

$sql1="SELECT * FROM weightage_converter WHERE userId='$usersId';";
$result1 = mysqli_query($conn,$sql1);

$resultCheck1 = mysqli_num_rows($result1);

if($resultCheck1>0){

  $sql1 = "UPDATE weightage_converter SET maxorgmarks='$maxorgmarks', maxweightmarks='$maxweightmarks', orgobtmarks='$orgobtmarks' WHERE userId='$usersId';"; 
  mysqli_query($conn,$sql1);

  header("location: ../Grade Predictor.php?status=updatedsuccessfully"); 
  exit();
 
}
else{


  createweightageconv($conn, $usersId, $maxorgmarks, $maxweightmarks, $orgobtmarks );

}


}

else{
  header("location: ../index.php"); 
  exit();
}

}