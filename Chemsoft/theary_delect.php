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
     <?php include("session.php");
     
        
     if(!$rowsec['role']=="ADMIN")
     {
         header("location:index.php"); 
     }
    
    
    $print=0;
    $sql1="select * from register where email='akashub666@gmail.com'";
$result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($result1);
        if($row1[7]=='yes')
        {
    $sql="SELECT * FROM theary where admin='$row1[6]'";
$result=mysqli_query($con,$sql);
            $print=1;
        }
    ?>
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<br><br>
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Chemsoft</a>
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">User</a>
      <a href="admin.php"  class="w3-bar-item w3-button">Back</a>
      <a href="logout.php"class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<div class="w3-main" >

  <!-- Header -->
  <header id="portfolio">
    <div class="w3-container">
    <h1><b>Theary</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  
 <?php if($print==1){
    while($row=mysqli_fetch_array($result)){
    echo '<div class="w3-third w3-container w3-margin-bottom">';
      echo "<object data='$row[3]' type='application/pdf' width='100%' height='300'>
   <p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href='$row[3]'>Download PDF</a>.</p>
</object>";
      echo '<div class="w3-container w3-white">';
        echo "<span class='w3-right w3-opacity'>$row[2]</span>";
        echo "<span class='w3-right w3-opacity'>$row[2]</span>";
        echo "<p><b>$row[0]</b></p>";
        echo "<p>BY-$row[1]</p>";
        echo '<p>This is the theary of chemestry whe it includes the information of all the stuffs.</p>';
        echo "<a href='delete_notice.php?theary=$row[1]' class='w3-right'>Delete</a>";
        
      echo '</div>';  
  echo '</div>'; }}?>
  
   
  </div>

</body>
</html>
