<?php




if(isset($_POST["attendcal2submit"])){

  $noofclasses = $_POST["noofclasses"];
  $classespresent = $_POST["classespresent"];
  $classesabsent = $_POST["classesabsent"];






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

// ----------------   checking userId in attendance_calculator_2 table  --------------------------------

$sql1="SELECT * FROM attendance_calculator_2 WHERE userId='$usersId';";
$result1 = mysqli_query($conn,$sql1);

$resultCheck1 = mysqli_num_rows($result1);

if($resultCheck1>0){

  $sql1 = "UPDATE attendance_calculator_2 SET noofclasses='$noofclasses',   classespresent='$classespresent', classesabsent='$classesabsent' WHERE userId='$usersId';"; 
  mysqli_query($conn,$sql1);

  header("location: ../Attendance Calculator.php?status=updatedsuccessfully"); 
  exit();
 
  
}
else{


  createattendcal2( $conn, $usersId, $noofclasses, $classespresent, $classesabsent );

}


}

else{
  header("location: ../index.php"); 
  exit();
}

}