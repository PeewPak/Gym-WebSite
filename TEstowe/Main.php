<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="CSS\style_main.css">
  <link rel="stylesheet" type="text/css" href="CSS/header.css">
  <link rel="stylesheet" type="text/css" href="CSS\footer.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gym</title>
</head>

<body>
  <div class="container">

    <div class="header">
      <a class="logo" href="Main.php"></a>
      <div class="nav_offer">
        <div id="nav"><a href="">Offer</a></div>
      </div>
      <div class="nav_shop">
        <div id="nav"> <a href="Shop.php">Shop</a> </div>
      </div>
      <div class="nav_activities">
        <div id="nav">zajecia</div>
      </div>
      <div class="nav_schedule">
        <div id="nav">harmonogram</div>
      </div>
      <div class="nav_job">
        <div id="nav"> <a href="Career.html">Job</a> </div>
      </div>
      <div class="nav_about">
        <div id="nav"> <a href="Contact.html">About Us</a> </div>
      </div>
      <div class="loginDiv">
        <button class="loginButton" onclick="document.getElementById('loginBox').style.display='block'">Login</button>
      </div>
      <div class="registerDiv">
        <button class="registerButton" onclick="document.getElementById('registerBox').style.display='block'">Sign Up</button>
    </div>
    </div>

    <div id="loginBox" class="loginModal">
  
      <form class="loginModalContent animateLogin" action="/action_page.php" method="post">
        <div class="loginImgContainer">
          <span onclick="document.getElementById('loginBox').style.display='none'" class="closeLogin" title="Close Modal">&times;</span>
          <img src="CSS/scr/img_avatar2.png" alt="Avatar" class="loginAvatar">
        </div>
    
        <div class="loginBoxContainer">
          <label for="uname"><b>Email</b></label>
          <input class="emailInput" type="text" placeholder="Enter Email" name="uname" required>
    
          <label for="loginpsw"><b>Password</b></label>
          <input class="passwordInput" type="password" placeholder="Enter Password" name="loginpsw" required>
            
          <button class="loginBoxButton" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
    
        <div class="loginBoxContainer" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('loginBox').style.display='none'" class="logincancelbtn">Cancel</button>
          <span class="loginpsw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
  </div>


  <div id="registerBox" class="registerModal">
      <span onclick="document.getElementById('registerBox').style.display='none'" class="closeRegister" title="Close Modal">&times;</span>
      <form class="registerModalContent animateLogin" action="/action_page.php">
        <div class="registerBoxContainer">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email"><b>Email</b></label>
          <input class="registerEmail" type="text" placeholder="Enter Email" name="email" required>
    
          <label for="registerPsw"><b>Password</b></label>
          <input class="registerPassword" type="password" placeholder="Enter Password" name="registerPsw" required>
    
          <label for="registerPsw-repeat"><b>Repeat Password</b></label>
          <input class="registerPassword" type="password" placeholder="Repeat Password" name="registerPsw-repeat" required>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
    
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('registerBox').style.display='none'" class="registercancelbtn">Cancel</button>
            <button type="submit" class="registersignupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

    <div class="slider">
      <div id='slider'></div>
    </div>
    <div class="event1"></div>
    <div class="event2"></div>
    <div class="event3"></div>

    <div class="opinie">
      <div class="opnie1">
        <div id="op">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel dictum lacus. Nam convallis
          diam eget feugiat bibendum. Integer volutpat quis tortor id pretium. Nunc vel purus congue, dapibus enim in,
          pellentesque lectus. Donec iaculis dapibus diam vel pharetra. Pellentesque habitant morbi tristique senectus
          et netus et malesuada fames ac turpis egestas. Etiam id venenatis urna, sed pharetra sem. Proin eu nisl eget
          odio semper dignissim. Quisque quis dignissim velit. Morbi ac nisi sit amet quam suscipit feugiat. Praesent in
          massa pretium, scelerisque tellus eget, tincidunt velit.</div>
      </div>
      <div class="opnie2">
        <div id="op">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel dictum lacus. Nam convallis
          diam eget feugiat bibendum. Integer volutpat quis tortor id pretium. Nunc vel purus congue, dapibus enim in,
          pellentesque lectus. Donec iaculis dapibus diam vel pharetra. Pellentesque habitant morbi tristique senectus
          et netus et malesuada fames ac turpis egestas. Etiam id venenatis urna, sed pharetra sem. Proin eu nisl eget
          odio semper dignissim. Quisque quis dignissim velit. Morbi ac nisi sit amet quam suscipit feugiat. Praesent in
          massa pretium, scelerisque tellus eget, tincidunt velit.</div>
      </div>
    </div>

    <div class="footer">
      <div class="hours">
        <div>Opening hours: </div>
        <div>Monday - Friday (8:00 - 20:00)</div>
        <div>Weekend (10:00 - 21:00)</div>
      </div>

      <div class="contact_foot">
        <div class="foot_info">Adress: ul. Kurwy 2/4, 8800 Viborg</div>
        <div class="foot_info">Tel.: +48 666 666 666</div>
        <div class="foot_info">Email: niejedztyle@gmail.com</div>
      </div>

      <div class="logo_foot"></div>
    </div>
  </div>
</body>

</html>