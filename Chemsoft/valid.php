<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<div class="container">
  <form action="/action_page.php">
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Password</label>
  <  input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<!---<html>
<head>
<script>
function GEEKFORGEEKS()                                   
{
    var name = document.forms["RegForm"]["Name"];              
    var email = document.forms["RegForm"]["EMail"];   
    var phone = document.forms["RegForm"]["Telephone"]; 
    var what =  document.forms["RegForm"]["Subject"]; 
    var password = document.forms["RegForm"]["Password"]; 
    var address = document.forms["RegForm"]["Address"]; 
  
    if (name.value == "")                                 
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
  
    if (address.value == "")                              
    {
        window.alert("Please enter your address.");
        name.focus();
        return false;
    }
      
    if (email.value == "")                                  
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
  
    if (email.value.indexOf("@", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
  
    if (email.value.indexOf(".", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
  
    if (phone.value == "")                          
    {
        window.alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }
  
    if (password.value == "")                       
    {
        window.alert("Please enter your password");
        password.focus();
        return flase;
    }
  
    if (what.selectedIndex < 1)                 
    {
        alert("Please enter your course.");
        what.focus();
        return false;
    }
  
    return true;
}</script>
 
<style>
GEEKFORGEEKS {                                        
    margin-left: 70px;
    font-weight: bold ;
    float: left;
    clear: left;
    width: 100px;
    text-align: left;
    margin-right: 10px;
    font-family:sans-serif,bold, Arial, Helvetica;
    font-size:14px;
}
  
div { 
    box-sizing: border-box;
    width: 100%;
    border: 100px solid black;
    float: left;
    align-content: center;
    align-items: center;
}
  
form {                                        
    margin: 0 auto;
    width: 600px;
}</style></head>
  
<body>
<h1 style="text-align: center"> REGISTRATION FORM </h1>          
<form name="RegForm" action="/submit.php" onsubmit="return GEEKFORGEEKS()" method="post"> 
     
    <p>Name: <input type="text" size=65 name="Name"> </p><br>       
    <p> Address: <input type="text" size=65 name="Address">  </p><br>
    <p>E-mail Address: <input type="text" size=65 name="EMail">  </p><br>
     <p>Password: <input type="text" size=65 name="Password"> </p><br>
    <p>Telephone: <input type="text" size=65 name="Telephone"> </p><br>  
          
    <p>SELECT YOUR COURSE   
        <select type="text" value="" name="Subject">
            <option>BTECH</option>
            <option>BBA</option>
            <option>BCA</option>
            <option>B.COM</option>
            <option>GEEKFORGEEKS</option>
        </select></p><br><br>
    <p>Comments:  <textarea cols="55" name="Comment">  </textarea></p>
    <p><input type="submit" value="send" name="Submit">     
        <input type="reset" value="Reset" name="Reset">  
    </p>         
</form>
</body>
</html>
-->