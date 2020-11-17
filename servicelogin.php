<?php
session_start();

include 'config.php';

$un=$_POST['un'];
$pass=$_POST['pass'];



$sql = "SELECT * FROM service where email='$un' and pass='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $_SESSION["un"] = $un;
    header('Location:servicehome.php');
} else {
  echo "Invalid Details";
}
$conn->close();


?>