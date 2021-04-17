<?php
$xml = new DomDocument('1.0');
$xml->preserveWhiteSpace = false;
$xml->formatOutput = true;

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$fullName = $firstName .' '. $lastName;
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
        
        $userEmail = $xml->createElement("Email", $email);
        $user->appendChild($userEmail);

        $userPassword = $xml->createElement("Password", $password);
        $user->appendChild($userPassword);

        $userName = $xml->createElement("Name", $fullName);
        $user->appendChild($userName);

        $status = $xml->createElement("Status", 0);
        $user->appendChild($status);

        $xml->documentElement->appendChild($user);
        $xml->save('Users.xml') or die("ERROR");

        header("Refresh:1; url=ShopFreshLogin.php");
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