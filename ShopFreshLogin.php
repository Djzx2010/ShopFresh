<!DOCTYPE html>
<html lang="eng" dir="ltr"></html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Fresh - Login</title>
    <link rel="stylesheet" href="SFSections.css">
</head>
<body>
    <!--border-->
    <div class="BorderDiv"> 
        <!--Header-->
        <div class="Header">
            <h1>Login</h1>
        </div>

        <!--Box for Logging in-->
        <div class="LoginBorder">
            <!--User in puts info here-->
            <form class="LoginForm"  method ="post" action ="SignIn.php">
                <h2>Sign in</h2>
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

                <br>
                
                <label for="pw">Password:</label>
                <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">

                <br>
                
                <a href="ShopFreshForgotPassword.php">Forgot Password?</a>
                
                <br>
                <button type="login">Login</button>
            </form>
        </div>

         <!--to Sign Up Page-->
         <div class="SignUp">
            <p class="SU"><a href="ShopFreshSignUp.php"><h2>Create Account</h2></a></p>
        </div>

        <!--Return to Main page-->
        <div class="ReturnHome">
            <p class="RH"><a href="ShopFreshFrontPage.html"><h2>Home</h2></a></p>
        </div>

        <!--Footer-->
        <div class="Footer">
            <h3>Derek Lam(40132682), Mathieu Morier(40181304), Alexandra Charland(40061073), Jizhou Yang(40033034), Leon Zhang(40175616) , Zebran Kamruzzaman(40065230)</h3>
        </div>
</body>