<?php
session_start();
$username = "";
$email = "";
$errors = [];

if(empty($_SESSION['email'])){
    $_SESSION['email'] = "Account";
}

$conn = new mysqli('localhost', 'root', 'admin', 'gym');

if (isset($_POST['login-btn'])) {
    if (empty($_POST['uname'])) {
        $errors['uname'] = 'Username or email required';
    }
    if (empty($_POST['loginpsw'])) {
        $errors['loginpsw'] = 'Password required';
    }
    $username = $_POST['uname'];
    $password = $_POST['loginpsw'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM login WHERE email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $username);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if ($password === $user['password']) { // if password matches
                $stmt->close();
                
                $_SESSION['id'] = $user['customer_id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: Main.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username or password";
                echo($errors['login_fail']);
                //header('location: Contact.php');
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}

if (isset($_POST['signup-btn'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['registerPsw'])) {
        $errors['registerPsw'] = 'Password required';
    }
    if ($_POST['registerPsw'] !== $_POST['registerPsw-repeat']) {
        $errors['registerPsw-repeat'] = 'The two passwords do not match';
        echo($errors['registerPsw-repeat']);
    }

    $email = $_POST['email'];
    $password = $_POST['registerPsw']; //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM login WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
        header('location: Contact.php');
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO login (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $password);
        $result = $stmt->execute();
        $stmt->close();
        header('location: Main.php');

    }
}
?>