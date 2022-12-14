<?php
$_SESSION['items'] = array();

if(empty($_SESSION['itemsAmount'])){
    $_SESSION['itemsAmount'] = 0;
}

if(empty($_SESSION['totalPrice'])){
    $_SESSION['totalPrice'] = 0;
}



function getItem($itemID){
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $query = "SELECT * FROM items WHERE id=? LIMIT 1";
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
    $_SESSION['totalPrice'] = getTotalPrice();

}

function countItems(){
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $sql = "SELECT COUNT(*) FROM cart WHERE customer_id = ? ";
    $statement = $conn->prepare($sql);
    $statement->bind_param('d', $_SESSION['id']);
    $statement->execute();
    $result = $statement->get_result();
    $sum = $result->fetch_assoc();
    $_SESSION['itemsAmount'] = $sum['COUNT(*)'];
}

function getTotalPrice(){
    $_SESSION['moneyError'] = "";
    $conn = new mysqli('localhost', 'root', 'admin', 'gym');
    $sql = "SELECT ROUND(SUM(price), 2) AS Total FROM cart INNER JOIN items ON cart.item_id = items.id WHERE cart.customer_id = ? GROUP BY cart.customer_id";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $_SESSION['id']);
    $statement->execute();
    $result = $statement->get_result();
    $total = $result->fetch_assoc();
    if(empty($total['Total'])){
        return null;
    }
    else{
        return $total['Total'];
    }
}

function pay(){
   
    $total = getTotalPrice();
    if(empty($total)){
        $_SESSION['totalPrice'] = "Cart is empty";
        //echo $total['Total'];
    } 
    else if($_SESSION['balance'] - $total > 0){
        $_SESSION['totalPrice'] = $total;
        $conn = new mysqli('localhost', 'root', 'admin', 'gym');
        $query = "UPDATE customers SET balance = (balance - ?) WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ds', $_SESSION['totalPrice'], $_SESSION['id']);
        $stmt->execute();

        $conn = new mysqli('localhost', 'root', 'admin', 'gym');
        $query = "DELETE FROM cart WHERE customer_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('d', $_SESSION['id']);
        $stmt->execute();
        $_SESSION['totalPrice'] = "";
    }
    else{
        $_SESSION['totalPrice'] = $total;
        $_SESSION['moneyError'] = "Not enough founds";
    }
}

if (isset($_POST['pay-btn'])) {
    pay();
    getBalance();
}

foreach($_POST as $id => $content) { // Most people refer to $key => $value
    //getItem($id);
    if (is_int($id) && isset($_POST[$id])){
        addToCart($id);
        countItems();
    }
 }

