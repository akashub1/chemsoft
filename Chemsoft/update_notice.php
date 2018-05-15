

<?php
include("session.php");
session_start();

$notice=$_POST['notice'];
$admin='owner';
$date= date("Y-m-d");


$sql="INSERT INTO notice(information,admin,date) VALUES ('$notice','$admin','$date')";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:admin.php");
}
else
{
    $message = "Counln'd able to updat notice";
  echo "<script type='text/javascript'>alert('$message');window.location='index.php'</script>";
}



?>