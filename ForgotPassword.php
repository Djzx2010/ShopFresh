<?php
$xml = simplexml_load_file('Users.xml');
$data = $xml->user;
$validEmail = false;
$email = $_POST['email'];
$confirmEmail = $_POST['confEmail'];

if($email == $confirmEmail) {
    foreach ($data as $user) {
        foreach($user->Email as $emails) {
            if($email == $emails) {
                $validEmail = true;
                $userPassword = $user->Password;   
            }
        }
    }
    if ($validEmail){ 
        echo "<script type='text/javascript'>alert('$userPassword')</script>";
        header("Refresh:2; url=ShopFreshLogin.php");
    }
    else {
        echo "<script type='text/javascript'>alert('Invalid Email')</script>";
        header("Refresh:1; url=ShopFreshForgotPassword.php");
    }
}

else {
    echo "<script type='text/javascript'>alert('Entered Emails are not the same')</script>";
    header("Refresh:1; url=ShopFreshForgotPassword.php");
}