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

function log_in(){
  var statement = "SELECT customer_id FROM login WHERE email = ?", userID;
  var values = ["patryk@gmail.com"]

  userID = connection(statement, values);
  console.log("Log_in result: ");
  console.log(userID);
}

function connection(statement, value) {
    con.query(statement, value, function (err, result, fields) {
      try{
      console.log("Connection result: ");
      console.log(result);
      return result;
      }
      catch(err){
        console.log("Error");
      }
    });
}

log_in();




function template() {
  con.connect(function (err) {
    if (err) throw err;
    con.query(statement, [], function (err, result, fields) {
      try{
      console.log(result);
      }
      catch(err){
        console.log("Error")
      }
    });
  });
}

function add_to_cart(item_id, customer_id) {
  var statement = "INSERT INTO cart (customer_id, item_id, quantity) VALUES ((SELECT id FROM offers WHERE id = " + id + "), "
  return statement;
}

function login() {
  var email = "patryk@gmail.com", password = "patryk123", userID, userPassword;
  var statementEmail = "SELECT customer_id FROM login WHERE email = ?", statementPassword = "SELECT password FROM login WHERE customer_id = ?";
  var valueEmail = [email], valuePassword = [1]; 

  userID = connection(statementEmail, valueEmail);
  userPassword = connection(statementPassword, valuePassword);
  console.log(userID);
  console.log(userPassword);



  /*
  con.connect(function (err) {
    if (err) throw err;
    con.query("SELECT customer_id FROM login WHERE email = ?", value, function (err, result, fields) {
      try {
        userID = current_customer = result[0].customer_id;
        console.log(userID);
      }
      catch (err) {
        console.log("Not Found!");
      }
    });
    con.end();
  });
*/
}

con.end();