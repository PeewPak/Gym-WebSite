var mysql = require('mysql');
/*
var loginModal = document.getElementById('loginBox');
var registerModal = document.getElementById('registerBox');

window.onclick = function (event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }
    else if (event.target == registerModal) {
        registerModal.style.display = "none";
    }
}
*/
function setAlert(){
  alert("Hello");
}

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "admin",
  database: "gym"
});

con.connect(function (err) {
  if (err) throw err;
});

function dbQuery(statement, value, callBack) {
    con.query(statement, value, function (err, result) {
      if (err) {
        callBack(err, null);
      } else {
        callBack(null, result);
      }
    });
  }

/*====================================================================*/

function callBack(err, resp) {
    var response;
    if (err) {response = err.message;
    console.log(response);} 
    else {response = resp;
      console.log(response);}
  }
  
  function loginVerification(username, password, callBack) {
    const statement = "SELECT password FROM login WHERE email = ?";
    const values = [username];
  
    dbQuery(statement, values, function (err, result) {
  
      if (err) {callBack(err, false);} 
      else {
        if (result.length == 0) {callBack(new Error("Invalid username or password."), null);}
        else {
          var userPassword = result[0].password;
          var verify = (userPassword == password);
          if (verify == false) {callBack(new Error("Invalid username or password."), null);}
          else {
            callBack(null, "Succesfuly login");}
        }
      }
    });
  }
  
  function checkLogin(){
  loginVerification("patryk@gmail.com", "patryk123", function (err, result) {
    if (err) {
        callBack(err, null);
        alert("Unlucky");
    } 
    else {
        callBack(null, result);
        alert("Succesfuly login");
      }
  });
}
  
  
  /*======================================================================================================*/
  
con.end();


