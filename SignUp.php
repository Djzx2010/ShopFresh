<?php

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$email = $_POST['email'];
$cEmail = $_POST['confirmEmail'];
$password = $_POST['pw'];
$cPassword = $_POST['confirmPw'];


if($firstName && $lastName && $email && $cEmail && $password && $cPassword) {
    if ($email == $cEmail && $password == $cPassword) {
        echo "<script type='text/javascript'>alert('Account Created!')</script>";

        header("Refresh:1; url=ShopFreshLogin.html");
    }
    else {
        echo "<script type='text/javascript'>alert('Mismatch in Fields!')</script>";

        header("Refresh:1; url=ShopFreshSignUp.php");
    }
}

else {
    echo "<script type='text/javascript'>alert('Missing Fields!')</script>";

    header("Refresh:1; url=ShopFreshSignUp.php");
}