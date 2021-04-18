<?php

session_start();

//return cart
echo json_encode($_SESSION['cart']);