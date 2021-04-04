<?php




if(isset($_POST["cgpaestsubmit"])){
  $cgpaneed = $_POST["cgpaneed"];
  $currentcgpa = $_POST["currentcgpa"];
  $creditscompleted = $_POST["creditscompleted"];
  $creditstakennow = $_POST["creditstakennow"];






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

$sql1="SELECT * FROM cgpa_estimator WHERE userId='$usersId';";
$result1 = mysqli_query($conn,$sql1);

$resultCheck1 = mysqli_num_rows($result1);

if($resultCheck1>0){

  $sql1 = "UPDATE cgpa_estimator SET cgpaneed='$cgpaneed', currentcgpa='$currentcgpa', creditscompleted='$creditscompleted', creditstakennow='$creditstakennow' WHERE userId='$usersId';"; 
  mysqli_query($conn,$sql1);

  header("location: ../CGPA Estimator.php?status=updatedsuccessfully"); 
  exit();
 
}
else{


  createcgpaest($conn, $usersId, $cgpaneed, $currentcgpa, $creditscompleted, $creditstakennow );

}


}

else{
  header("location: ../index.php"); 
  exit();
}

}