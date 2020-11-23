<!DOCTYPE html>
<html lang="en">
<head>
  <title>Intelligent Service Provider With Location Access</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
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
<body>

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
  <div class="" style="background-image: url(Images/bglogin.jpg);height: 100%;width: 100%;  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">

 
 
      <div class="container">
          
           <form action="book.php" method="POST" role="form">
  

    <div class="form-group">
        <label for="sname" style="color:white;font-weight:bold">Service Name</label>
        <input type="text" name="sname" class="form-control" id="sname" value="<?php echo $_GET['name'];  ?>" readonly required="">
    </div>

    <div class="form-group">
        <label for="phone" style="color:white;font-weight:bold">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone"  value="<?php echo $_GET['phone'];  ?>" readonly required="">
    </div>

<div class="form-group">
        <label for="email" style="color:white;font-weight:bold">Email</label>
        <input type="text" class="form-control" id="email" name="email"  value="<?php echo $_GET['email'];  ?>" readonly required="">
    </div>
    
    
     <div class="form-group">
        <label for="hso" style="color:white;font-weight:bold">House No</label>
        <input type="text" name="hso" class="form-control" id="hso" placeholder="Enter House Number" required="">
    </div>

   <div class="form-group">
        <label for="add" style="color:white;font-weight:bold">Address</label>
        <input type="text" name="add" class="form-control" id="add" placeholder="Enter Address" required="">
    </div>

  <div class="form-group">
        <label for="dat" style="color:white;font-weight:bold">Choose Date</label>
        <input type="date" name="dat" class="form-control" id="dat" placeholder="Enter Date" required="">
    </div>
    

    <button type="submit" name="submit" class="btn btn-primary form-control"><b>Submit</b></button>
    
</form>
   

</div>



    

  </div>
  
  
  
</div>

</body>
</html>
