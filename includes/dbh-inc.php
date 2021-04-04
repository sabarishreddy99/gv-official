<?php

//   -------------   Development Local Host   --------------------------------
// $servername="localhost";
// $dbusername="root";
// $dbpassword="";
// $dbname="gradevitianlogintest1";

//   -------------   remote sql   --------------------------------
 $servername="remotemysql.com";
 $dbusername="j7RmeBquSY";
 $dbpassword="vWzTdj7Tvy";
 $dbname="j7RmeBquSY";


$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn) {
  die("connection failed: " . mysqli_connect_error());
}
