<?php
include 'config.php';



$name=$_POST["name"];
$loc=$_POST["loc"];
$phn=$_POST["phn"];
$email=$_POST["email"];
$un=$_POST["un"];
$pwd=$_POST["pwd"];


$con=mysqli_connect($servername, $username, $password,$dbname) OR DIE ("Unable to connect to database! Please try again later.");


//$id=$_SESSION['id'];

if(@$_POST['submit'])
{
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_type = $file ['type'];
    $file_size = $file ['size'];
    $file_path = $file ['tmp_name'];
    
    //Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 
    
    //if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400)
    
    if(move_uploaded_file ($file_path,'images/'.$file_name))//"images" is just a folder name here we will load the file.
    
    
    $sql="INSERT INTO customer(name,loc,phone,email,uname,pwd,photo) values('$name','$loc','$phn','$email','$un','$pwd','$file_name')";

    if($conn->query($sql)===TRUE){
    //echo "success";
     header('Location:userlogin.html');
    } else{
    echo "Error:" .$sql."<br>".$conn->error;} 


}
?>
