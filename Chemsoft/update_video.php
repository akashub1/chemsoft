

<?php
include("session.php");
session_start();

$title=$_POST['title'];
$admin='owner';
$date= date("Y-m-d");


$file=$_FILES['vid']['name'];
$filetmp= $_FILES['vid']['tmp_name'];
$file1='video/' .	basename($_FILES['vid']["name"]);
move_uploaded_file($filetmp,$file1);




$sql="INSERT INTO partical (title,admin,date,file) VALUES ('$title','$admin','$date','$file1')";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:admin.php");
}
else
{
    $message = "Counln'd able to update Pratical";
  echo "<script type='text/javascript'>alert('$message');window.location='index.php'</script>";
}



?>