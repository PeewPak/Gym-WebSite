<?php
$_SESSION['items'] = array();
$errors = [];



function getItem($itemID){
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $query = "SELECT * FROM offers WHERE id=? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $itemID);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $item = $result->fetch_assoc();
        $_SESSION['items'][] = $item;
        //array_push($_SESSION['items'], $item);
        //echo $_SESSION['items'][];
    }
}

function addToCart($itemID){
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $query = "INSERT INTO cart (customer_id, item_id) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $_SESSION['id'], $itemID);
    $stmt->execute();
}

function pay(){

    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $sql = "SELECT ROUND(SUM(price), 2) AS Total FROM cart INNER JOIN offers ON cart.item_id = offers.id WHERE cart.customer_id = ? GROUP BY cart.customer_id";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $_SESSION['id']);
    $statement->execute();
    $result = $statement->get_result();
    $total = $result->fetch_assoc();
    echo $total['Total'];
    
    
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $query = "UPDATE customers SET balance = (balance - ?) WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ds', $total['Total'], $_SESSION['id']);
    $stmt->execute();
}

if (isset($_POST['pay-btn'])) {
    pay();
}

foreach($_POST as $id => $content) { // Most people refer to $key => $value
    //getItem($id);
    if (is_int($id) && isset($_POST[$id])){
        addToCart($id);
    }
 }

