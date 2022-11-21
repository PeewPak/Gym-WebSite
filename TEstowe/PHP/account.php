<?php

if(empty($_SESSION["firstName"])){
    $_SESSION["firstName"] = "FirstName";
}
if(empty($_SESSION["lastName"])){
$_SESSION["lastName"] = "LastName";
}
if(empty($_SESSION["gender"])){
    $_SESSION["gender"] = "Gender";
}
if(empty($_SESSION["height"])){
    $_SESSION["height"] = "Height";
}
if(empty($_SESSION["weight"])){
    $_SESSION["weight"] = "Weight";
}
if(empty($_SESSION["age"])){
    $_SESSION["age"] = "Age";
}


if (isset($_POST['account-btn'])) {

if(!empty($_SESSION['id'])){
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $query = "SELECT * FROM customers WHERE id=1 LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $_SESSION['id']);
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    //if($user['first_name'] != null){
        $_SESSION["firstName"] = $user['first_name'];
    //}
}
}

?>