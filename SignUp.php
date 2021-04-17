<?php
$xml = new DomDocument('1.0');
$xml->preserveWhiteSpace = false;
$xml->formatOutput = true;

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$email = $_POST['email'];
$cEmail = $_POST['confirmEmail'];
$password = $_POST['pw'];
$cPassword = $_POST['confirmPw'];


if($firstName && $lastName && $email && $cEmail && $password && $cPassword) {
    if ($email == $cEmail && $password == $cPassword) {
        echo "<script type='text/javascript'>alert('Account Created!')</script>";
        if(!$xml->load('Users.xml')) {
            $Users = $xml->createElement("Users");
            $xml->appendChild($Users);
        }

        else {
            $xml->load('Users.xml');
        }
        $user = $xml->createElement("user");
        $user->setAttribute("status", 0);

        $userEmail = $xml->createElement("Email", $email);
        $user->appendChild($userEmail);

        $userPassword = $xml->createElement("Password", $password);
        $user->appendChild($userPassword);

        $xml->documentElement->appendChild($user);
        $xml->save('Users.xml') or die("ERROR");

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