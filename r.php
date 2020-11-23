<?php
session_start();
include 'config.php';
$sname=$_POST["sname"];
$phone=$_POST["phone"];
$r=$_POST["r"];
$rate=$_POST["rate"];
$email=$_POST["email"];

$un=$_SESSION["un"];


$conn= new mysqli($servername, $username, $password, $dbname);

//echo 'success';

if($conn->connect_error)
{
die("Connection failed" .$conn->connect_error);
}


$sql="INSERT INTO review(sname,phone,msg,rate,uname,email) values('$sname','$phone','$r','$rate','$un','$email')";

if($conn->query($sql)===TRUE){
//echo "success";
 header('Location:mybookings.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>