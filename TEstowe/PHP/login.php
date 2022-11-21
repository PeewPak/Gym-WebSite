<?php
session_start();
$username = "";
$email = "";
$_SESSION['error'] = "";

if(empty($_SESSION['username'])){
    $_SESSION['username'] = "Login";
}

$conn = new mysqli('localhost', 'root', 'admin', 'gym');

if (isset($_POST['login-btn'])) {
    if (empty($_POST['uname'])) {
        $_SESSION['error'] = 'Username or email required';
    }
    if (empty($_POST['loginpsw'])) {
        $_SESSION['error'] = 'Password required';
    }
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
                $_SESSION['error'] = "Wrong username or password";
                echo($_SESSION['error']);
            }
            elseif ($password === $user['password']) { // if password matches
                $stmt->close();
                
                $_SESSION['id'] = $user['customer_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: Main.php');
                exit(0);
            } else { // if password does not match
                $error['login_fail'] = "Wrong username or password";
                echo($error['login_fail']);
                //header('location: Contact.php');
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}


if (isset($_POST['signup-btn'])) {
    if ($_POST['passwordReg'] !== $_POST['passwordRepReg']) {
        $error['passwordRepReg'] = 'The two passwords do not match';
        echo($error['passwordRepReg']);
    }
    else{
    $email = $_POST['emailReg'];
    $username = $_POST['usernameReg'];
    $password = $_POST['passwordReg']; //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM login WHERE email='$email' OR username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $error['username'] = "User already exists";
        echo($error['username']);
        //header('location: Contact.php');
    }

    if (count($error) === 0) {
        $query = "INSERT INTO login (email, password, username) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss', $email, $password, $username);
        $result = $stmt->execute();
        $stmt->close();

        $query = "SELECT customer_id FROM login WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);
        $result = $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();


        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $username;

        $query = "INSERT INTO customers (id) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('d', $_SESSION['id']);
        $result = $stmt->execute();
        $stmt->close();
        header('location: Main.php');

    }
}
}

?>