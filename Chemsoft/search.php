<html>
<title>Chemsoft</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/first.css">
<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 6px;
}
</style>
  <?php include("session.php");
     
        
     if(!$rowsec['role']=="ADMIN")
     {
         header("location:index.php"); 
     }
     
        $search=$_POST['search'];
    
    $sql="SELECT * from register where email='$search'";
    $result=mysqli_query($con,$sql);
   
    ?>

<body>


<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Chemsoft</a>
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"><?php echo $email;?></a>
      <a href="admin.php"  class="w3-bar-item w3-button">Back</a>
      <a href="logout.php"class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
    <br><br>
    
    <div class="w3-container">
   <h1>Add Member</h1>
        <form action="search.php" method="POST">
<input type="email" class="w3-xlarge w3-border" size="100%" placeholder="email" name="search" min="0" max="100" ><input type="submit" class="w3-xlarge w3-border"value="Search">
        </form>
        <div id="members"></div>
  <table class="w3-table-all w3-large">
    <thead>
      <tr class="w3-light-grey">
        <th>Name</th>
        <th>Email</th>
          <th>Phone</th>
          <th>Dob</th>
          <th>Gender</th>
          <th>Add</th>
      </tr>
    </thead>
      <?php while($row=mysqli_fetch_array($result)){
    echo "<tr>";
      echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td><a href='update_group.php?update=$row[1]'>Add</td></a>";
    echo "</tr>";
  }?>
  </table>
</div>

    </body></html>