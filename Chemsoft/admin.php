<html>
<title>Chemsoft</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/first.css">
<link rel="stylesheet" href="css/thied.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="css/second.min.css">
<?php include("session.php");
     
        
     if(!$rowsec['role']=="ADMIN")
     {
         header("location:index.php"); 
     }
    
    $sql="select * from notice where admin='$email";
$result=mysqli_query($con,$sql);
    
    
    $sql1="select * from register where email='$email'";
$result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($result1);

    ?>
    <style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 6px;
</style>
<body class="w3-theme-l5">


<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Chemsoft</a>
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"><?php echo $email;?></a>
      <a href="find_all.php"  class="w3-bar-item w3-button">Find all members</a>
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>




<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  
  <div class="w3-row">
  
    <div class="w3-col m3">
      
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="used_photo/login.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?php echo $row1[0]?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><?php echo $row1[2]?></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><?php echo $row1[3]?></p>
            <span onclick="document.getElementById('update').style.display='block'">Update profile</span>
        </div>
      </div>
      <br>
      
      
      <div class="w3-card w3-round">
        <div class="w3-white">
          <a href="make_group.php" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Make group</a>
          <a href="find_all.php" onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Members</a>
            <a href="theary_delect.php" onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"> Theary_delete</a>
            <a href="pratical_delect.php" onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"> Partical_delete</a>
        </div>      
      </div>
      <br>
      
      
    
    <!-- End Left Column -->
    </div>
    <div id="update" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('update').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">Close</span>
        <h3>Update_Profile</h3>
      </div>

      <form class="w3-container" action="update_profile.php" method="POST" enctype="multipart/form-data">
        <div class="w3-section">
         <h5>Date of Birth</h5>
          <input class="w3-input w3-border w3-margin-bottom" type="date"  name="dob" value="<?php echo $row1[3]?>"required>
            <h5>Gender</h5>
          Male<input class="w3-input w3-border w3-margin-bottom" type="radio" value="male" name="gender"  >
            Female<input class="w3-input w3-border w3-margin-bottom" type="radio" value="female" name="gender"  >
            <h5>Profile</h5>
          <input class="w3-input w3-border w3-margin-bottom" type="file"  name="profile"  required>
            <h5>Phone</h5>
          <input class="w3-input w3-border w3-margin-bottom" type="number" value="<?php echo $row1[2]?>" placeholder="Enter phone number" name="phone"  required>

          <button class="w3-button w3-block w3-blue w3-section w3-padding"  type="submit">Update</button>
          
        </div>
      </form>

    </div>
  </div>
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Update notice</h6>
                <form action="update_notice.php" method="POST" >
                  <input type="text" name="notice" placeholder="Enter notice information" class="w3-border w3-padding" size="90" required><br><br>
              <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <?php while($row=mysqli_fetch_array($result)){
      echo '<div class="w3-container w3-card w3-white w3-round w3-margin"><br>';
        echo "<span class='w3-right w3-opacity'>$row[2]</span>";
        echo "<h4>$row[1]</h4><br>";
        echo '<hr class="w3-clear">';
        echo "<p>$row[0].</p>";
        echo "<a href='delete_notice.php?delete=$row[1]' class='w3-right'>Delete</a>";
      echo '</div>';
          } ?>
     
      
    
    </div>
   
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Add Theary</p>
          <form action="update_the.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="title" placeholder="Title name"><br><br>
              <input type="file" name="the" accept=".pdf" >
          <p><button  type="submit"class="w3-button w3-block w3-theme-l4">Update</button></p>
              <p><b>Note:</b>Pdf formate only</p>
            </form>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Add Practial</p>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
                <form action="update_video.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="title" placeholder="Title name"><br><br>
              <input type="file" name="vid" accept=".mp4" >
                <p><button  type="submit"class="w3-button w3-block w3-theme-l4">Update</button></p>
                    <p><b>Note:</b>Mp4_formate_only</p>
            </form>
            </div>
            <div class="w3-half">
            </div>
          </div>
        </div>
      </div> 
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
          <a href="magic.php"><p>Magic</p></a>
      </div>
      <br>
      
    </div>

  </div>
  

</div>
<br>



<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="#" target="_blank">Akash and Fairy</a></p>
</footer>
 

</body>
</html> 
