<?php
include("session.php");
if($_GET['delete'])
{
    $info=$_GET['delete'];
 

    $sql="delete from notice where admin='$info'";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:admin.php");

}
else
{
    $message = "Some issue with the site try later";
  echo "<script type='text/javascript'>alert('$message');window.location='admin.php'</script>";
}
}
if($_GET['theary'])
{
    $info=$_GET['theary'];
 

    $sql="delete from theary where admin='$info'";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:admin.php");

}
else
{
    $message = "Some issue with the site try later";
  echo "<script type='text/javascript'>alert('$message');window.location='admin.php'</script>";
}
}
if($_GET['pratical'])
{
    $info=$_GET['pratical'];
 

    $sql="delete from partical where admin='$info'";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:admin.php");

}
else
{
    $message = "Some issue with the site try later";
  echo "<script type='text/javascript'>alert('$message');window.location='admin.php'</script>";
}
}
?>