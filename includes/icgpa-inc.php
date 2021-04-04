<?php




if(isset($_POST["icgpasubmit"])){
  $icgpa1 = $_POST["icgpa1"];
  $icgpa2 = $_POST["icgpa2"];
  $icgpa3 = $_POST["icgpa3"];
  $icgpa4 = $_POST["icgpa4"];




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

// ----------------   checking userId in instant_cgpa table  --------------------------------

$sql1="SELECT * FROM instant_cgpa WHERE userId='$usersId';";
$result1 = mysqli_query($conn,$sql1);

$resultCheck1 = mysqli_num_rows($result1);

if($resultCheck1>0){

  $sql1 = "UPDATE instant_cgpa SET Icgpa1='$icgpa1', Icgpa2='$icgpa2', Icgpa3='$icgpa3', Icgpa4='$icgpa4' WHERE userId='$usersId';"; 
  mysqli_query($conn,$sql1);

  header("location: ../CGPA Calculator.php?status=updatedsuccessfully"); 
  exit();
 
}
else{


  createicgpa($conn, $usersId, $icgpa1, $icgpa2, $icgpa3, $icgpa4);

}


}

else{
  header("location: ../index.php"); 
  exit();
}

}