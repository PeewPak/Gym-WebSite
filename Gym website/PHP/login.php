<?php
session_start();
$username = "";
$email = "";
$_SESSION['error'] = "";
$_SESSION['login_fail'] = "";
$_SESSION['register_fail'] = "";

/*
==Display Username==
<?=$_SESSION["username"]?>

==Display Balance==
<?=$_SESSION["balance"]?>

==Display Amount of Items
<?=$_SESSION["itemsAmount"]?>

==Pay button==
<form action="Account.php" method="POST">
    <button type="submit" name="account-btn">Sign Up</button>
</form>
*/

if(empty($_SESSION['username'])){
    $_SESSION['username'] = "Login";
}
if(empty($_SESSION['id'])){
    $_SESSION['balance'] = 0;
}


$conn = new mysqli('localhost', 'root', 'admin', 'gym');

if (isset($_POST['login-btn'])) {
    $username = $_POST['uname'];
    $password = $_POST['loginpsw'];

    if ($_SESSION['error'] === "") {
        $query = "SELECT * FROM login WHERE email=? OR username=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $username);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if($user === null){
                $_SESSION['login_fail'] = "Wrong username or password";
            }
            elseif ($password === $user['password']) { // if password matches
                $stmt->close();
                
                $_SESSION['id'] = $user['customer_id'];
                $_SESSION['username'] = $user['username'];
                getBalance();
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: Main.php');
                exit(0);
            } else { // if password does not match
                $_SESSION['login_fail'] = "Wrong username or password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}


if (isset($_POST['signup-btn'])) {
    if ($_POST['passwordReg'] !== $_POST['passwordRepReg']) {
        $_SESSION['register_fail'] = 'The two passwords do not match';
    }
    else{
    $email = $_POST['emailReg'];
    $username = $_POST['usernameReg'];
    $password = $_POST['passwordReg']; //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM login WHERE email='$email' OR username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['register_fail'] = "User already exists";
    }

    if ($_SESSION['register_fail'] == "" && $_SESSION['login_fail'] == "") {
        $query = "INSERT INTO login (email, password, username) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss', $email, $password, $username);
        $result = $stmt->execute();
        $stmt->close();

        $query = "SELECT * FROM login WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $username);
        $result = $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        $_SESSION['id'] = $user['customer_id'];
        $_SESSION['username'] = $username;
        
        $stmt->close();

        getBalance();

        $query = "INSERT INTO customers (id) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('d', $_SESSION['id']);
        $result = $stmt->execute();
        $stmt->close();
        header('location: Main.php');

    }
}
}

if(!empty($_SESSION['id'])){
getBalance();
}
function getBalance(){
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $query = "SELECT balance FROM customers WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('d', $_SESSION['id']);
        $result = $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        //echo $user['balance'];
        $_SESSION['balance'] = $user['balance'];
        $stmt->close();
}

?>