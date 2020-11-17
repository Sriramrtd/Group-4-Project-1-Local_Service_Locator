<?php
session_start();

include 'config.php';

$un=$_POST['un'];
$pass=$_POST['pass'];



$sql = "SELECT * FROM customer where uname='$un' and pwd='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $_SESSION["un"] = $un;
    header('Location:userhome.php');
} else {
  echo "Invalid Details";
}
$conn->close();


?>