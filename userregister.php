<?php
include 'config.php';



$name=$_POST["name"];
$loc=$_POST["loc"];
$phn=$_POST["phn"];
$email=$_POST["email"];
$un=$_POST["un"];
$pwd=$_POST["pwd"];

$conn= new mysqli($servername, $username, $password, $dbname);

//echo 'success';

if($conn->connect_error)
{
die("Connection failed" .$conn->connect_error);
}


$sql="INSERT INTO customer(name,loc,phone,email,uname,pwd) values('$name','$loc','$phn','$email','$un','$pwd')";

if($conn->query($sql)===TRUE){
//echo "success";
 header('Location:userlogin.html');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>