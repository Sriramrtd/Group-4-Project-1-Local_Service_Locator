<!DOCTYPE html>
<html lang="en">
<head>
  <title>Intelligent Service Provider With Location Access</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-
    /master/css/star-rating.min.css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 100%; height: 500px; border: 0px; padding: 0px; }
        </style>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAy7XZpeeSIdDT3x7FmZ4Xw5H07zqBv5bI&sensor=false" type="text/javascript"></script>
        <script type="text/javascript">
            //Sample code written by August Li
            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
                       new google.maps.Size(32, 32), new google.maps.Point(0, 0),
                       new google.maps.Point(16, 32));
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map
                });
                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });
            }           
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(0, 0),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });
<?php
include 'config.php';


$s=$_GET['loc'];
$t=$_GET['type'];
$query_json = "SELECT * from service where loc='$s' and type='$t'";
$query = mysqli_query($conn,$query_json);
//mysqli_fetch_assoc($retval_json)
while($row = mysqli_fetch_assoc($query))
{
  $name = $row['name'];
  $lat = $row['lat'];
  $lon = $row['log'];
  $desc = $row['loc'];



  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc');\n");

}

?>
 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
  
   <style>
      
      .navbar-inverse {
    background-color: #013fa2;
    border-color: #013fa2;
}


.navbar {
    border-radius: 0px;
}

.navbar-inverse .navbar-nav>li>a {
    color: #fff;
}

.navbar-inverse .navbar-brand {
    color: #fff;
}

.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #f30a03;
}

  </style>
</head>

 <body onload="initMap()" style="margin:0px; border:0px; padding:0px;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">Intelligent Service Provider With Location Access</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
       <li><a href="services.html">Services</a></li>
        <li><a href="mybookings.php">My Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

   
  
<div class="container">
    
    <div class="row">
        <div class="col-xs-6">
               
           <h3>Service Provider Details</h3>
         
         
           <?php
                          include 'config.php';
                          

                          $s=$_GET['loc'];
                          $t=$_GET['type'];
                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }
                          
                          $query = "SELECT * from service where loc='$s' and type='$t'";
                          $result = $conn->query($query);
                          
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                          
                              ?>
                          
                              <div class='col-sm-12' >
                                
                              
                                <div class='well' style='height:100%;margin-bottom:30px'>
                                
                                <table style="width:100%">
                                <tr>
                                <td style="width:50%">
                                <h2><?php 
                                
                               echo '<img src="images/'.$row["pic"].'?>" style="width:70px;"/>';
                               
                                
                                ?></h2></td>
                          
                                <td style="width:50%;text-align:right" align="right"><?php
                                    $sql1 = "SELECT AVG(rating) as AVGRATE from rating where rid='" . $row["Id"]. "'";
                                      $result1 = $conn->query($sql1);
                                      
                                      if ($result1->num_rows > 0) {
                                        // output data of each row
                                        while($row1 = $result1->fetch_assoc()) {
                                          $AVGRATE=$row1['AVGRATE'];
                                          echo "<h3 align='right'><i class='fa fa-star' data-rating='2' style='font-size:20px;color:#ff9f00;'></i>  $AVGRATE</h3>
                                          ";
                                      
                                        }
                                      } else {
                                        echo "0 results";
                                      }
                                ?></td>
                                </tr></table>
                          
                                
                                
                                
                            
                               
                                <p><?php echo $row["name"]?></p>
                                <p><?php echo $row["phone"]?></p>
                                <p><?php echo $row["email"]?></p>
                                <p><?php echo $row["Id"]?></p>
                              
                              <?php echo  "<a href='bookservice.php?name=".$row['name']."&phone=".$row['phone']."&email=".$row['email']."' ><input type='button' value='Book' /></a>";
            ?>

                                  <?php
                                  
                                  echo "
                                  <button type='button' data-toggle='modal' data-target='#" . $row['Id'] . "' class='btn btn-success btn-xs'>Write a Review</button>
      "
                                  
                                  ?>

    <!-- Modal -->
    <div id=" . $row['Id'] . " class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Write a Review</h4>
        </div>
        <div class="modal-body">
          
        <form method="POST" action="review.php" enctype="multipart/form-data">
               
               <div class="form-group">
                   <label for="name">Recipe Id</label>
                   <input type="text" id="rid" name="rid" value='<?php echo $row["Id"] ?>' class="form-control" readonly required>
               </div>



               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" id="email" name="email" class="form-control" required>
               </div>


               <div class="form-group">
                 
                  
                   <div class="form-group">
                    <label for="rating">Select Rating:</label>
                    <select class="form-control" id="rating" name="rating" >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    </div>

               </div>


               <div class="form-group">
                   <label for="comment">Write your message</label>
                   <!-- <input type="text" id="comment" name="comment" class="form-control" required> -->
                   <textarea class="form-control" rows="5" id="comment" name="comment" id="comment"></textarea>
              
                </div>

         
               <button class="btn btn-success form-control" type="submit" name="submit" value="submit">Submit</button>
               &nbsp;
               <br>

            
           </form>


        </div>
       
        </div>

    </div>
    </div>

                              </div>
                            </div>
                            
                          <?php
                              
                          
                          
                            }
                          } else {
                            echo "No Data Found";
                          }
                          $conn->close();
                          ?>
         
         
         
         </div>
        
        <div class="col-xs-6">
              <div id="map"></div>
        </div>
        
    </div>
    
 



</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/index.js"></script>


</body>
</html>
