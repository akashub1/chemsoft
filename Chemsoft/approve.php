<?php
include("session.php");

$approve=$_POST['approve'];
$move=0;
if($approve=='accept')
{
    $sql="update register set approve='yes' where email='$email'";
$result=mysqli_query($con,$sql);
$move=1;
}
elseif($approve=='decline')
{
    $sql="update register set teacher=NULL where email='$email'";
$result=mysqli_query($con,$sql);
    $move=1;
}
if($move==1)
{
    header("Location:student.php");
}
else
{
    $message = "Some issue with the site try later";
  echo "<script type='text/javascript'>alert('$message');window.location='index.php'</script>";
}
?>