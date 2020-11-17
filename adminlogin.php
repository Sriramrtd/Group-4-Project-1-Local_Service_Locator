<?php
session_start();

include 'config.php';

$un=$_POST['un'];
$pass=$_POST['pass'];



if ($un=="admin" && $pass=="admin") {
     $_SESSION["un"] = $un;
    header('Location:adminhome.php');
} else {
  echo "Invalid Details";
}
$conn->close();


?>