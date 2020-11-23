<?php
include 'config.php';



$name=$_POST["name"];

$phn=$_POST["phn"];
$email=$_POST["email"];
$msg=$_POST["msg"];


$conn= new mysqli($servername, $username, $password, $dbname);

//echo 'success';

if($conn->connect_error)
{
die("Connection failed" .$conn->connect_error);
}


$sql="INSERT INTO contact(name,phone,email,msg) values('$name','$phn','$email','$msg')";

if($conn->query($sql)===TRUE){
//echo "success";
 header('Location:index.html');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>