<?php
 $name=$_post['name'];
 $email=$_post['email'];
 $projectfild=$_post['projectfild'];
 $mobile=$_post['mobile'];
 $details=$_post['details'];
 //database connection 
  $conn =new mysqli('localhost','root','','contact');
  if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into contact(name,email,projectfild,mobile,details) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$email,$projectfild,$mobile,$details);
    $stmt->execute();
    echo"sucessful"
    $stmt->close();
    $conn->close();
  }
?>
