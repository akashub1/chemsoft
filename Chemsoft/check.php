<?php
	include("config.php");
    session_start();
	$user_name = $_POST['usrname'];
	$password = $_POST['pass'];


	$sql = "SELECT * FROM login WHERE username = '$user_name' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
    
    $_SESSION['email']=$_POST['usrname'];
    
if($row['role']=="USER"){
	header('Location:student.php');
}
elseif($row['role']=="ADMIN"){

	header('Location:admin.php');

}
else{
    $message = "Worng pass word";
  echo "<script type='text/javascript'>alert('$message');window.location='index.php'</script>";
}




?>
