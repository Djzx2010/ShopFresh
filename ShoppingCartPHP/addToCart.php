<?php

session_start();

//add item to cart
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['quantity'];

$_SESSION["cart"][$name] = array($price, $qty);
