<!DOCTYPE html>
<html lang="en">
<head>
 <title>Intelligent Service Provider With Location Access</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 100%; height: 500px; border: 0px; padding: 0px; }
        </style>
     
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

 <body  style="margin:0px; border:0px; padding:0px;">

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
        <div class="col-xs-12">
               
  <h3>Service Provider Details</h3>
  

<?php
include 'config.php';
session_start();
$usertable = "home";
$un=$_SESSION["un"];

if($conn->connect_error)
{
die("Connection failed" .$con->connect_error);}


// $s=$_GET['loc'];
// $t=$_GET['type'];

  //$con=mysql_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
           // mysql_select_db($dbname);
	    $query = "SELECT * from book where bname='$un'";
	    $retval = mysqli_query($conn,$query);
	    if(! $retval )
	    {
	    echo 'No data'.mysqli_error();
	    }
	    else 
	    {
				$rows = array();
				while($row = mysqli_fetch_assoc($retval)) 
				{
				//	$rows[] = array('Id' => $row

//['Id'],'Name' => $row['Name'],'Deep' => $row['Deep'],'videoid' => $row['videoid']);


              echo  "<div class='panel panel-default'>
                        <div class='panel-body'>
                        
                        <h4>".$row['sname']."</h4>
                        <p>".$row['phone']."</p>
                         <p>".$row['email']."</p>
                         
                          <p>Status : .".$row['status']."</p>
                        
                       
                           <a href='review.php?sname=".$row['sname']."&id=".$row['Id']."&email=".$row['email']."'> <input type='button' class='form-control' value='Write a Feedback' align='right' /></a>
                        </div>
                    </div>";


				}
			//	echo json_encode(array('data'=>$rows));
	  }


?>
        </div>
        
       
        
    </div>
    
 



</div>

</body>
</html>
