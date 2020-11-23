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
          <div class="row">
              <div class="col-xs-4">
                  
              </div>
              
                <div class="col-xs-4">
                   <form action="r.php" method="POST" role="form">
  

    <div class="form-group">
        <label for="sname" style="color:white;font-weight:bold">Service Name</label>
        <input type="text" name="sname" class="form-control" id="sname" value="<?php echo $_GET['sname'];  ?>" readonly required="">
    </div>

    <div class="form-group">
        <label for="phone" style="color:white;font-weight:bold">Booking Id</label>
        <input type="text" class="form-control" id="phone" name="phone"  value="<?php echo $_GET['id'];  ?>" readonly required="">
    </div>

    <div class="form-group">
        <label for="email" style="color:white;font-weight:bold">Email Id</label>
        <input type="text" class="form-control" id="email" name="email"  value="<?php echo $_GET['email'];  ?>" readonly required="">
    </div>
    
     <div class="form-group">
        <label for="r" style="color:white;font-weight:bold">Write review</label>
        <input type="text" name="r" class="form-control" id="r" placeholder="Write review" required="">
    </div>

   <div class="form-group">
        <label for="add" style="color:white;font-weight:bold">Rating</label>
         <select class="form-control" 
        id="rate" name="rate">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

  
    

    <button type="submit" name="submit" class="btn btn-primary form-control"><b>Submit</b></button>
    
</form>
              </div>
              
              
                <div class="col-xs-4">
                  
              </div>
              
          </div>
          
          
   

</div>



    

  </div>
  
  
  
</div>

</body>
</html>
