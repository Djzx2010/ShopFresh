<!DOCTYPE html>
<html lang="eng" dir="ltr"></html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Fresh - Forgot Password</title>
        <link rel="stylesheet" href="SFSections.css">
    </head>

    <body>
        <!-- header -->
        <header>
            <h1>ShopFresh - Forgot Password</h1>
        </header>
        
        <!-- menu/navigation bar -->
        <ul class="menu">
            <li class="menu"><a href="ShopFreshFrontPage.html">Back to Welcome Page</a></li>  
            <li class="menu"><a href="ShopFreshFruits&VeggiesSection.html">Fruits&Vegetables Aisle</a></li> 
            <li class="menu"><a href="ShopFreshDairy&EggsSection.html">Dairy&Eggs Aisle</a></li> 
            <li class="menu"><a href="ShopFreshFish&MeatSection.html">Fish&Meat Aisle</a></li>
            <li class="menuRight"><a href="ShoppingCart.html">Shopping Cart</a></li>
            <li class="menuRight"><a href="ShopFreshLogin.php">Login</a></li>
        </ul>
    
        <!-- Instructions for user -->
        <p class="instructions">Enter your email below, and your password will be shown temporarily.</p>
        
        <!--User in puts info here-->
        <div class="login">
            <form class="input" method = "post" action = "ForgotPassword.php">
                <input type="email" placeholder="Email" name = "email">
                <input type="email" placeholder="Confirm Email" name = "confEmail">
                <a><button type = "submit" class="submit">Submit</button></a>
                <p class="signUp"><a href="ShopFreshSignUp.php">Sign Up</a></p>
                <p class="forgotP"><a href="ShopFreshLogin.php">Log In</a></p>
            </form>
        </div>

        <!--Footer-->
        <footer>
            <h3>Derek Lam(40132682), Mathieu Morier(40181304), Alexandra Charland(40061073), Jizhou Yang(40033034), Leon Zhang(40175616) , Zebran Kamruzzaman(40065230)</h3>
        </footer>

    </body>