var mysql = require('mysql');
var current_customer;

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "admin",
  database: "gym"
});

con.connect(function (err) {
  if (err) throw err;
});

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function dbQuery(statement, value, callBack) {
  con.query(statement, value, function (err, result) {
    if (err) {
      callBack(err, null);
    } else {
      callBack(null, result);
    }
  });
}

/*======================================================================================================*/


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

loginVerification("patryk@gmail.com", "patryk123", function (err, result) {
  if (err) {callBack(err, null);} 
  else {
    callBack(null, result);
  }
});



/*======================================================================================================*/

con.end();