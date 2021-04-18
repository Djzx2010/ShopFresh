<?php

session_start();

//change the quantity of the item in the cart
$name = $_POST['item'];
$task = $_POST['task'];

if (strcmp($task, 'remove')) { 
    $_SESSION['cart'][$name][1] += 1;
}
elseif (strcmp($task, 'add')) {
    if ($_SESSION['cart'][$name][1] !== 0) {
        $_SESSION['cart'][$name][1] -= 1;
    }
}

//return new cart
echo json_encode($_SESSION['cart']);