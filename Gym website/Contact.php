<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/style_contact.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e40bf94de.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

<?php include 'PHP/login.php';
          include 'PHP/cart.php' ?>

<div class="newHeader">
    <div id="avatar"> <span class="dot"><span class="dot2"></div>
    <div id="logo1"><img src="CSS/logo-new.png" width="100px" height="100%"></div>


    <div class="loginDiv">
        <button class="button-6" onclick="document.getElementById('loginBox').style.display='block'">Login</button>
    </div>

      <div class="registerDiv">
        <button class="button-6" onclick="document.getElementById('registerBox').style.display='block'">Sign Up</button>
      </div>
</div>

    <div class="container">

        <div class="header" style=" position: absolute;">
            <a class="logo" href="Contact.php"></a>
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



        <div class="info">

            <div class="about"><div id="wie">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel dictum lacus. Nam
                convallis diam eget feugiat bibendum. Integer volutpat quis tortor id pretium. Nunc vel purus congue,
                dapibus enim in, pellentesque lectus. Donec iaculis dapibus diam vel pharetra. Pellentesque habitant
                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam id venenatis urna, sed
                pharetra sem. Proin eu nisl eget odio semper dignissim. Quisque quis dignissim velit. Morbi ac nisi sit
                amet quam suscipit feugiat. Praesent in massa pretium, scelerisque tellus eget, tincidunt velit.</div></div>

            <div class="contacts">

                <div class="localization contact_box">
                    <div class="icon"><i class="fa-solid fa-house-chimney"></i></div>
                    <div class="contact_text">
                        <h1>Visit Us</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel dictum lacus. Nam
                            convallis diam eget feugiat bibendum.</p>
                        <h2>ul. Kurwy 2/4</h2>
                    </div>
                </div>

                <div class="tel contact_box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="contact_text">
                        <h1>Call Us</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel dictum lacus. Nam
                            convallis diam eget feugiat bibendum.</p>
                        <h2>+48 666 666 666</h2>
                    </div>
                </div>

                <div class="email contact_box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="contact_text">
                        <h1>Email Us</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel dictum lacus. Nam
                            convallis diam eget feugiat bibendum.</p>
                        <h2>niejedztyle@wp.pl</h2>
                    </div>
                </div>

            </div>

            <div class="map">
            </div>

            <div class="socialmedia">
                <div class="social_text">Join our social media</div>
                <div class="instagram social">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="facebook social">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="tiktok social">
                    <i class="fa-brands fa-tiktok"></i>
                </div>
                <div class="twitter social">
                    <i class="fa-brands fa-twitter"></i>
                </div>
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