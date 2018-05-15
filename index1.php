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
    <script> 
    function verify() {
    var x = document.getElementById("txtPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
        function verifyr() {
    var x = document.getElementById("txtpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
         var y = document.getElementById("txtConfirmPassword");
    if (y.type === "password") {
        y.type = "text";
    } else {
        
        y.type = "password";
    }
}
        function Validate() {
        var y= document.myform.usrname.value;
        var y1= document.myform.pass.value;
        var p=document.myform1.password.value;
        var a=document.myform1.username.value;
        var c=document.myform1.phone.value;
        var b=document.myform1.name.value;
        var password = document.getElementById("txtpassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        
        if(y==null || y=="") {
            alert("username cannot be empty.");
            return false;
        }
            else if(y1==null||y1==""){
                alert("enter a valid password");
            return false;
        }
        if(p==null||p.length<8){
            alert("enter a valid password");
            return false;
            
        } else if(a==null||a=="")
            {
                alert("username cannot be null");
                return false;
            }
            
        if(b==null||b=""){
            alert("enter a valid name.");
            return false;
            
        } else if(c==null||c.length!=10)
            {
                alert("enter a valid phone number");
                return false;
            }
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
        
       $(document).ready(function(){
        $("#username").change(function(){
             $("#message").html("<img src='images/loader.gif' /> checking...");


        var username = $("#username").val();

          $.ajax({
                type:"post",
                url:"checker.php",
                data:"username =" + username,
                    success:function(data){
                    if(data==0){
                        $("#message").html("<img src='images/tick.png' /><span style='font-size:13px; color: black'> Username available</span>");
                    }
                    else{
                        $("#message").html("<img src='images/err.png' /><span style=font-size:13px; color: red'> Username already taken</span>");
                    }
                }
             });

        });

     });
        
    </script>
<body>


<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Chemsoft</a>
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <span onclick="document.getElementById('login').style.display='block'"  class="w3-bar-item w3-button">Login</span>
      <span onclick="document.getElementById('register').style.display='block'" class="w3-bar-item w3-button">Register</span>
    </div>
  </div>
</div>

      <div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">Close</span>
          <h2>Login</h2>
        
      </div>

      <form class="w3-container" action="check.php" method="POST" name="myform">
        <div class="w3-section">
            <h5>E-mail</h5>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <h5>Password</h5>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pass" id="txtPassword" required>
          <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit"><h5>Login</h5></button>
          <input class="w3-check w3-margin-top" type="checkbox"  onclick="verify();" >Show password
        </div>
      </form>
        <span >Forgot <a href="#">password?</a></span>

    </div>
  </div>
    
     <div id="register" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">Close</span>
        <h3>Register</h3>
      </div>

      <form class="w3-container" action="register.php" method="POST" name="myform1">
        <div class="w3-section">
         <h5>Name</h5>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name" required>
            <h5>E-mail</h5><span id="message"></span>
          <input class="w3-input w3-border w3-margin-bottom" type="mail" placeholder="Enter Email" name="username" id="username" onkeyup="checkemail(); " required>
            <h5>Phone</h5>
          <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Enter phone number" name="phone"  required>
          <h5>Password</h5>
          <input class="w3-input w3-border" type="password" placeholder="Password" required name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="txtpassword">
            <h5>Confirm-Password</h5>
          <input class="w3-input w3-border" type="password" placeholder="Enter Same Password"  id="txtConfirmPassword" >
            <input class="w3-check w3-margin-top" type="checkbox" onclick="verifyr();" >Show password<br>
            Password:-must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter:
          <button class="w3-button w3-block w3-blue w3-section w3-padding" onclick="return Validate()" type="submit">Register</button>
          
        </div>
      </form>

    </div>
  </div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="used_photo/team.gif" alt="Hamburger Catering" width="1600" height="30%">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Welcome to Chemsoft</h1>
  </div>
</header>


<div class="w3-content" style="max-width:1100px">

  
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large ">
     <img src="used_photo/about.gif" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="850">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Chemsoft</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large w3-text-grey w3-hide-medium">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
    </div>
  </div>
  
  <hr>
  
  
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Team</h1><br>
      <h4>Akash</h4>
      <p class="w3-text-grey">Member of the team</p><br>
    
      <h4>Fairy</h4>
      <p class="w3-text-grey">Member of the team</p><br>  
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="used_photo/our.gif" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

</div>


<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="#" target="_blank">Akash and Fairy</a></p>
</footer>

</body>
</html>
