<?php
include("session.php");
session_start();

$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['pass'];


$sql="INSERT INTO register (name,email,phone,dob,gender,profile,teacher,approve) VALUES ('$name','$email','$phone',NULL,NULL,NULL,NULL,NULL)";
$result=mysqli_query($con,$sql);

$sql1="INSERT INTO login (username,password,role) VALUES ('$email','$phone','USER')";
$result1=mysqli_query($con,$sql1);

if(($result)&&($result1))
{
    header("Location:index.php");
}
else
{
    $message = "Some issue with the site try later";
  echo "<script type='text/javascript'>alert('$message');window.location='index.php'</script>";
}

?>