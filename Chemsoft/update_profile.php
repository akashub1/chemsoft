<?php
    include("session.php");

$dob=$_POST['dob'];
if($_POST['gender'])
{
   $gender=$_POST['gender']; 
}
$phone=$_POST['phone'];

$file=$_FILES['profile']['name'];
$filetmp= $_FILES['profile']['tmp_name'];
$file1='profile/' .	basename($_FILES['profile']["name"]);
move_uploaded_file($filetmp,$file1);

$sql="update register set dob='$dob',gender='$gender',profile='$file1' where email='$email'";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:student.php");

}
else
{
    $message = "Some issue with the site try later";
  echo "<script type='text/javascript'>alert('$message');window.location='student.php'</script>";
}
?>