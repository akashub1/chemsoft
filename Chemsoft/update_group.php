<?php
include("session.php");
$move=0;
if($_GET['update'])
{
    $update=$_GET['update'];
}

$sql="select * from register where email='$update'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

if($row[6]==NULL)
{
    $move=1;
    $sql1="update register set teacher='owner' where email='$update'";
$result1=mysqli_query($con,$sql1);
    
}
else{
    $message = "member has Teacher already";
  echo "<script type='text/javascript'>alert('$message');window.location='admin.php'</script>";
}
if($move==1){
    
    header("Location:admin.php");
}
?>