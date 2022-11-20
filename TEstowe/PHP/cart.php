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

foreach($_POST as $id => $content) { // Most people refer to $key => $value
    //getItem($id);
    if (isset($_POST[$id])){
        addToCart($id);
    }
 }

