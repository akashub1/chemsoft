<?php
   include("config.php");
   session_start();
   
   $email=$_SESSION['email'];
   
   $ses_sql = mysqli_query($con,"select * from login where username = '$email' ");
   
   $rowsec = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   
   if(!isset($_SESSION['email']))
   {
      header("location:index.php");
   }
?>