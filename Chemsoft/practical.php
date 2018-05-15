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
     
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.php"); 
     }
    
    $print=0;
    $sql1="select * from register where email='akashub666@gmail.com'";
$result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($result1);
        if($row1[7]=='yes')
        {
    $sql="SELECT * FROM partical where admin='$row1[6]'";
$result=mysqli_query($con,$sql);
            $print=1;
        }
    
    ?>
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<div class="w3-main" >

  <!-- Header -->
  <header id="portfolio">
    <div class="w3-container">
    <h1><b>Practical</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  

  <?php if($print==1){
    while($row=mysqli_fetch_array($result)){
    echo '<div class="w3-third w3-container w3-margin-bottom">';
      echo '<video width="390" height="350"  controls class="w3-hover-opacity" >';
  echo "<source src='$row[3]' type='video/mp4'>";
  
  echo 'Your browser does not support the video tag.';
echo '</video> ';
      echo '<div class="w3-container w3-white">';
        echo "<span class='w3-right w3-opacity'>$row[2]</span>";
        echo "<p><b>$row[0]</b></p>";
        echo "<p>BY-$row[1]</p>";
      echo '</div>';
    echo '</div>';}}?>
    
  </div>

</body>
</html>
