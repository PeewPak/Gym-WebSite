<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/style_schedule.css">
  <link rel="stylesheet" type="text/css" href="CSS/header.css">
  <link rel="stylesheet" type="text/css" href="CSS/footer.css">
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

    <div id="header" class="header">
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






<div class="container2">
  
  <div class="table">
    <div class="table-header">
      <div class="header__item"><a id="name" class="filter__link" haref="#">Name</a></div>
      <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Monday</a></div>
      <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Tuesday</a></div>
      <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Wednesday</a></div>
      <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Thursday</a></div>
      <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Friday</a></div>
      <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Saturday</a></div>
      <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Sunday</a></div>
    </div>
    <div class="table-content"> 
      <div class="table-row">   
        <div class="table-data" id="column1">10:00</div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
      </div>
      <div class="table-row">
        <div class="table-data" id="column2" >10:30 </div>
        <div class="table-data" id="column2"></div>
        <div class="table-data"id="column2"><button id="btn">Join</button></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column1">11:00</div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"><button id="btn">Join</button></div>
        <div class="table-data"id="column1"></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column2">11:30</div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
      </div>
      <div class="table-row">
        <div class="table-data" id="column1">12:00</div>
        <div class="table-data" id="column1"><button id="btn">Join</button></div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
        <div class="table-data" id="column1"></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column2">12:30</div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column1">13:30</div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"><button id="btn">Join</button></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column2">14:00</div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
        <div class="table-data"id="column2"></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column1">14:30</div>
        <div class="table-data"id="column1"><button id="btn">Join</button></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
      </div>
      <div class="table-row">
        <div class="table-data" id="column2">15:00</div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"><button id="btn">Join</button></div>
      </div>
      <div class="table-row">
        <div class="table-data"id="column1">15:30</div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
        <div class="table-data"id="column1"></div>
      </div>
      <div class="table-row">
        <div class="table-data" id="column2">16:00</div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
        <div class="table-data" id="column2"></div>
      </div>
    </div>  
  </div>
  <div id="cool"></div>
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


  <script type="text/javascript">

    const btn = document.getElementById('btn');
    btn.addEventListener('click',function handleClick(){ btn.textContent = 'Joined';});



     var startProductBarPos=-1;
window.onscroll=function(){
  var bar = document.getElementById('header');
  if(startProductBarPos<0)startProductBarPos=findPosY(bar);

  if(pageYOffset>startProductBarPos){
    bar.style.position='fixed';
    bar.style.top=0;
  }else{
    bar.style.position='relative';
  }

};

function findPosY(obj) {
  var curtop = 0;
  if (typeof (obj.offsetParent) != 'undefined' && obj.offsetParent) {
    while (obj.offsetParent) {
      curtop += obj.offsetTop;
      obj = obj.offsetParent;
    }
    curtop += obj.offsetTop;
  }
  else if (obj.y)
    curtop += obj.y;
  return curtop;
}


myID = document.getElementById("myID");

var myScrollFunc = function() {
  var y = window.scrollY;
  if (y < 200) {
    myID.className = "bottomMenu show"
  } else {
    myID.className = "logo"
  }
};

window.addEventListener("scroll", myScrollFunc);

  </script>




<!--<div div class="parent">
  
  <div class="grid">
    <table>
      <thead>
        <th scope="col">Time</th>
        <th scope="col">Monday</th>
        <th scope="col">Tuesday</th>
        <th scope="col">Wednesday</th>
        <th scope="col">Thursday</th>
        <th scope="col">Friday</th>
      </thead>
      <tbody>
        <tr>
          <th scope="row">7:30am</th>
          <td><span>Breakfast</span></td>
          <td><span>Breakfast</span></td>
          <td><span>Breakfast</span></td>
          <td><span>Breakfast</span></td>
          <td><span>Breakfast</span></td>
        </tr>
        <tr class="bg-yellow">
          <th scope="row">9:00am</th>
          <td><span>Exercise</span></td>
          <td><span>Exercise</span></td>
          <td><span>Exercise</span></td>
          <td><span>Exercise</span></td>
          <td><span>Exercise</span></td>
        </tr>
        <tr class="bg-green">
          <th scope="row">9:30am</th>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
        </tr>
        <tr>
          <th scope="row">10:00am</th>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
        </tr>
        <tr>
          <th scope="row">11:00am</th>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
        </tr>
        <tr>
          <th scope="row">12:00</th>
          <td><span>Lunch</span></td>
          <td><span>Lunch</span></td>
          <td><span>Lunch</span></td>
          <td><span>Lunch</span></td>
          <td><span>Lunch</span></td>
        </tr>
        <tr class="bg-green">
          <th scope="row">1:00pm</th>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
          <td><span>Free play</span></td>
        </tr>
        <tr>
          <th scope="row">2:00pm</th>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
        </tr>
        <tr>
          <th scope="row">3:00pm</th>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
        </tr>
        <tr>
          <th scope="row">4:00pm</th>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
          <td data-cell></td>
        </tr>
        <tr class="bg-green">
          <th scope="row">5:00pm</th>
          <td><span>Free play/TV</span></td>
          <td><span>Free play/TV</span></td>
          <td><span>Free play/TV</span></td>
          <td><span>Free play/TV</span></td>
          <td><span>Free play/TV</span></td>
        </tr>
        <tr>
          <th scope="row">6:00pm</th>
          <td><span>Dinner</span></td>
          <td><span>Dinner</span></td>
          <td><span>Dinner</span></td>
          <td><span>Dinner</span></td>
          <td><span>Dinner</span></td>
        </tr>
      </tbody>
    </table>

    
  </div>
</div>-->
</body>
</html>