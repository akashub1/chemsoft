<?php

include("session.php");

if (mysqli_connect_errno())
{

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

  // $username = $_POST["username"];

  $username = 'hilbi';

  $query = mysqli_query($con,"SELECT * FROM users WHERE username =   '$username' ");

  $find = mysqli_num_rows($query);

  echo $find;

  mysqli_close($con);

  ?>