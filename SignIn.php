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
//test code , can delete when finished
// $validEmail=true;
// $validPassword=true;
// $clientName =$email;
// $userStatus = 1;

if($validEmail && $validPassword) {
    echo "<script type='text/javascript'>alert('Welcome $clientName')</script>";
    //login success  write the cookies
    writeUserCookies($clientName,$userStatus);
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

//set the user Cookies
function  writeUserCookies($clientName,$userStatus){
    setcookie('clientName',$clientName);
    setcookie('userStatus',$userStatus);
    setcookie('isLogin',true);
}