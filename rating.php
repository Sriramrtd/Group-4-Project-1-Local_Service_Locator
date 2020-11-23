<h5><b>Rating & Reviews</b></h5>
<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT AVG(rating) as AVGRATE from rating";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $AVGRATE=$row['AVGRATE'];
    echo "<h3 align='left'><i class='fa fa-star' data-rating='2' style='font-size:20px;color:#ff9f00;'></i>  $AVGRATE</h3>
    ";

 }
} else {
  echo "0 results";
}

?>
