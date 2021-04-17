<!DOCTYPE html>
<html lang="eng" dir="ltr"></html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Fresh - Forgot Password</title>
    <link rel="stylesheet" href="SFSections.css">
</head>
<body>
    <!--border-->
    <div class="BorderDiv"> 
        <!--Header-->
        <div class="Header">
            <h1>Login</h1>
        </div>

        <!--Box for Forgot Password-->
        <div class="LoginBorder">
            <!--User in puts info here-->
            <form class="LoginForm" action="ForgotPassword.php" method ="post">
                <h2>Enter your email below, and your password will be shown temporarily.</h2>
                <div class="formGroup1">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="formGroup2">
                    <label for="confirmEmail">Confirm email:</label>
                    <input type="cEmail" class="form-control" id="pw" placeholder="Enter email again" name="confEmail">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>

        <!--Return to Main page-->
        <div class="ReturnHome">
            <p class="RH"><a href="ShopFreshFrontPage.html"><h2>Home</h2></a></p>
        </div>

        <!--Footer-->
        <div class="Footer">
            <h3>Derek Lam(40132682), Mathieu Morier(40181304), Alexandra Charland(40061073), Jizhou Yang(40033034), Leon Zhang(40175616) , Zebran Kamruzzaman(40065230)</h3>
        </div>
    </div>
</body>