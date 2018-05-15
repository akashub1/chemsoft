<html>
<title>Chemsoft</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/first.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="css/second.min.css">
<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 6px;
}
</style>
    <?php include("session.php");
     
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.php"); 
     }
    
    
    $print=0;
    $sql1="select * from register where email='$email'";
$result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($result1);
        if($row1[7]=='yes')
        {
    $sql="SELECT * FROM notice where admin='$row1[6]'";
$result=mysqli_query($con,$sql);
            $print=1;
        }
    $email='akashub666@gmail.com';
    ?>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Chemsoft</a>
    <div class="w3-right w3-hide-small">
        <span onclick="document.getElementById('update').style.display='block'"><a class="w3-bar-item w3-button">Update Profile</a></span>
      <a href="logout.php"class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>



<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="<?php echo $row1[5];?>" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $email;?></strong></span><br>
      <a class="w3-bar-item w3-button" title="<?php echo $row1[1];?>"><i class="fa fa-envelope"></i></a>
      <a class="w3-bar-item w3-button" title="<?php echo $row1[2];?>"><i class="fa fa-phone"></i></a>
      <a class="w3-bar-item w3-button" title="<?php echo $row1[6];?>"><i class="fa fa-users fa-fw"></i></a>
        
    <h5>Profile </h5>
    <div class="w3-grey">
        <?php if($row1[4]==NULL){
      echo "<div class='w3-container w3-center w3-padding w3-green' style='width:25%'>25%</div>";}
            elseif($row1[4]!=NULL){
                echo "<div class='w3-container w3-center w3-padding w3-green' style='width:100%'>100%</div>";}
        ?>
    
  </div>
  <hr>  
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="student.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <span onclick="theary()"><a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Theary</a></span>
    <span onclick="practical()"><a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Pratical</a></span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Magic</a>
    <a href="student.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  Refrersh</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>




<div class="w3-main" style="margin-left:300px;margin-top:43px;" id="main">


  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-clear"></div>
        <span onclick="theary()"><h4>Theary</h4></span>
      </div>
        </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-clear"></div>
        <span onclick="practical()"><h4>Practical</h4></span>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-clear"></div>
        <h4>Magic</h4>
      </div>
    </div>
    <span onclick="document.getElementById('approvel').style.display='block'"><div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"></div>
          <h4>Admin Approve</h4>
      </div>
    </div></span>
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
    
     <div id="approvel" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('approvel').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">Close</span>
          <h2>Approve</h2>
        
      </div>

      <form class="w3-container" action="approve.php" method="POST">
        <div class="w3-container">
          <p>Teacher Name:-<?php echo $row1[6]; ?></p>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button  type="submit" name="approve" value="accept" class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button onclick="#"  type="submit"  name="approve" value="decline" class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
    
<div class="w3-container">
    <b><h5>Notice</h5></b>
  </div>
    <?php
    if($print==1){
    while($row=mysqli_fetch_array($result)){
      echo '<div class="w3-container w3-card w3-white w3-round w3-margin"><br>';
        echo "<span class='w3-right w3-opacity'>$row[2]</span>";
        echo "<h4>$row[1]</h4><br>";
        echo '<hr class="w3-clear">';
        echo "<p>$row[0].</p>";
      echo '</div>';
          } }?>

  

 

 
</div>

<script>
    function theary() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "theary.php", true);
  xhttp.send();
}
    function practical() {
  var par = new XMLHttpRequest();
  par.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main").innerHTML =
      this.responseText;
    }
  };
  par.open("GET", "practical.php", true);
  par.send();
}
    </script>
<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="#" target="_blank">Akash and Fairy</a></p>
</footer>
</body>
</html>
