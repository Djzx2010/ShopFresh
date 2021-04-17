<?php
$xml = simplexml_load_file('Users.xml');
$data = $xml->user;
$validEmail = false;
$validPassword = false;
$userStatus = 0;
$email = $_POST['email'];
$password = $_POST['pw'];

foreach ($data as $user) {
    foreach($user->Email as $emails) {
        if($email == $emails) {
            $validEmail = true;
            if($password == $user->Password)
            {
                $validPassword = true;
                $clientName = $user->Name;
                $userStatus = $user->Status;
            }
        }
    }
}

if($validEmail && $validPassword) {
    echo "<script type='text/javascript'>alert('Welcome $clientName')</script>";

    if($userStatus == 1) {
        header("Refresh:1; url=BackStorePage.html");
    }
    else {
        header("Refresh:1; url=ShopFreshFrontPage.html");
    }
}

else {
    if($validEmail) {
        echo "<script type='text/javascript'>alert('Invalid Password.')</script>";
        header("Refresh:1; url=ShopFreshLogin.php");
    }
    else {
        echo "<script type='text/javascript'>alert('Invalid Email.')</script>";
        header("Refresh:1; url=ShopFreshLogin.php");
    }
}
