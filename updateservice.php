<?php

include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET['s'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE book SET status='Accepted' WHERE Id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Accepted successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>