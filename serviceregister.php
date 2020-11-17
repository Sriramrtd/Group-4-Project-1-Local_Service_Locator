<?php
include 'config.php';



$name=$_POST["name"];
$amt=$_POST["amt"];
$phn=$_POST["phn"];
$email=$_POST["email"];
$un=$_POST["un"];
$pwd=$_POST["pwd"];
$lat=$_POST["lat"];
$log=$_POST["log"];
$loc=$_POST["loc"];
$type=$_POST["type"];

$conn= new mysqli($servername, $username, $password, $dbname);

//echo 'success';

if($conn->connect_error)
{
die("Connection failed" .$conn->connect_error);
}


$sql="INSERT INTO service(name,amt,phone,email,uname,pass,lat,log,loc,type) values('$name','$amt','$phn','$email','$un','$pwd','$lat','$log','$loc','$type')";

if($conn->query($sql)===TRUE){
//echo "success";
 header('Location:servicelogin.html');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>