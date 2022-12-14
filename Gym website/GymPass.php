<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style_gymPass.css">
   <link rel="stylesheet" type="text/css" href="CSS\style_main.css">
  <link rel="stylesheet" type="text/css" href="CSS/header.css">
  <link rel="stylesheet" type="text/css" href="CSS\footer.css">
   <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e40bf94de.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<?php include 'PHP/login.php';
          include 'PHP/cart.php' ?>

<div class="newHeader">
    <div id="avatar"> <span class="dot"><span class="dot2"></div>
    <div id="logo1"><img src="CSS/logo-new.png" width="100px" height="70px"></div>


    <div class="loginDiv">
        <button class="button-6" onclick="document.getElementById('loginBox').style.display='block'">Login</button>
    </div>

      <div class="registerDiv">
        <button class="button-6" onclick="document.getElementById('registerBox').style.display='block'">Sign Up</button>
      </div>
</div>




  <div class="container">

    <div id="header" class="header" style=" position: absolute;">
      <a id="myID" class="logo" href="Main.php"></a>
      <div class="nav_offer">
        <div id="nav"><a href="Offer.php">Trainers</a></div>
      </div>
      <div class="nav_shop">
        <div id="nav"> <a href="shop.php">Shop</a> </div>
      </div>
      <div class="nav_activities">
        <div id="nav"><a href="GymPass.php">Gym Pass</a></div>
      </div>
      <div class="nav_schedule">
        <div id="nav"><a href="schedule.php"> Schedule</a></div>
      </div>
      <div class="nav_job">
        <div id="nav"> <a href="Career.php">Job</a> </div>
      </div>
      <div class="nav_about">
        <div id="nav"> <a href="Contact.php">About Us</a> </div>
      </div>
      <div id="icon1"><i class="fa" style="font-size:30px">&#xf07a;</i>
                    <span class='badge badge-warning' id='lblCartCount'> 5<!--miejsce na wartosc z php / ilosc w koszyku --> </span>
                    <div id="doll1">:400<!--miejsce na wartosc z php / cena --><i class="fas-stack-1x fa-dollar-sign fa-1x" ></i></div>
                </div>
                <div id="icon2"><i class="fa-solid fa-wallet" style="font-size:30px"></i>
                  <div id="doll1">:400<!--miejsce na wartosc z php / kasa--><i class="fas-stack-1x fa-dollar-sign fa-1x" ></i></div>
                </div>  
        
    </div>

    <div id="loginBox" class="loginModal" name="log">
            <form class="loginModalContent animateLogin" method="post">
              <div class="loginImgContainer">
                <span onclick="document.getElementById('loginBox').style.display='none'" class="closeLogin" title="Close Modal">&times;</span>
                <img src="CSS/scr/img_avatar2.png" alt="Avatar" class="loginAvatar">
              </div>
          
              <div class="loginBoxContainer">
              <div id="error"><?php echo($_SESSION['login_fail'])?></div>
                <label for="uname"><b>Username</b></label>
                <input class="emailInput" type="text" placeholder="Enter Username or Email" name="uname" required>
          
                <label for="loginpsw"><b>Password</b></label>
                <input class="passwordInput" type="password" placeholder="Enter Password" name="loginpsw" required>
                

                <button class="loginBoxButton" name="login-btn" type="submit">Login</button>
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
            <form class="registerModalContent animateLogin" action="shop.php" method="POST">
              <div class="registerBoxContainer">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <div class="inputReg">
                <div><b>Username</b></div>
                <input class="registerUsername" type="text" placeholder="Enter Username" name="usernameReg" required>
                </div>

                <div class="inputReg">
                <div><b>Email</b></div>
                <input class="registerEmail" type="email" placeholder="Enter Email" name="emailReg" required>
                </div>
          
                <div class="inputReg">
                <div><b>Password</b></div>
                <input class="registerPassword" type="password" placeholder="Enter Password" name="passwordReg" required>
                </div>

                <div class="inputReg">
                <div><b>Repeat Password</b></div>
                <input class="registerPassword" type="password" placeholder="Repeat Password" name="passwordRepReg" required>
                </div>
                
                <div id="error"><?php echo($_SESSION['register_fail'])?></div>

                <hr>
          
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('registerBox').style.display='none'" class="registercancelbtn">Cancel</button>
                  <button type="submit" name="signup-btn" class="registersignupbtn">Sign Up</button>
                </div>
              </div>
            </form>
          </div>

  <div class="kropka"> 
    <div class="flex">
      <div id="noc"></div>
      <div id="noc"></div>
      <div id="noc"></div>
      <div id="noc"></div>
      <div id="noc"></div>
      <div id="noc"></div>
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

      <div class="logo_foot"><img src="CSS/logo-new.png" width="170px" height="100%"></div>
    </div>
  </div>





</body>
</html>