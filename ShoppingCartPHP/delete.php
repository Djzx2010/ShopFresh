<?php

session_start();

//remove item from cart
$name = $_POST['item'];

unset($_SESSION['cart'][$name]);

//return new cart
echo json_encode($_SESSION['cart']);