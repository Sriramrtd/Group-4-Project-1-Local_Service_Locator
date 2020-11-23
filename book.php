<?php
session_start();
$servername="localhost";
 $username = "root";
 $password = "";
$dbname="location_acess";



$name=$_POST["sname"];

$phn=$_POST["phone"];
$email=$_POST["email"];
$hso=$_POST["hso"];
$add=$_POST["add"];
$dat=$_POST["dat"];

 $u=$_SESSION["un"];

$con= new mysqli($servername, $username, $password, $dbname);

//echo 'success';

if($con->connect_error)
{
die("Connection failed" .$con->connect_error);
}


$sql="INSERT INTO book(sname,phone,email,hso,address,dat,status,bname) values('$name','$phn','$email','$hso','$add','$dat','Pending','$u')";

if($con->query($sql)===TRUE){
//echo "success";
 header('Location:services.html');
} else{
echo "Error:" .$sql."<br>".$con->error;} 


?>