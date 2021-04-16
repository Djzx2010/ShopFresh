<!DOCTYPE html>
<html lang="eng" dir="ltr"></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Fresh - SignUp</title>
    <link rel="stylesheet" href="SFSections.css">
    
</head>
<body>
    <!--border-->
    <div class="BorderDiv"> 
        <!--Header-->
        <div class="Header">
            <h1>Sign Up</h1>
        </div>
        <!--Box for Signing up-->
        <div class="SignUpBorder">
            <!--User in puts info here-->
            <form class="LoginForm"  method ="post" action = "SignUp.php">
                <h2>Fill in the details below</h2>
                <label for="fName">First Name: </label>
                <input type="text" class="FirstName" name="fName" value ="" placeholder="Enter first name">
                <br>
                <label for="lName">Last Name: </label>
                <input type="text" class="LastName" name="lName" value ="" placeholder="Enter last name">
                <br>
                Select Gender:
                <select class="" name="gender">
                    <option value="blank"></option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="NA">Do not want to specify</option>
                </select>
                <br>
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                <br>
               
                <label for="confirmEmail">Confirm Email:</label>
                <input type="email" class="form-control" id="confirmEmail" placeholder="Enter email again" name="confirmEmail">
                <br> 
                <label for="pw">Password:</label>
                <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
                
                <br>
                <label for="confirmPw">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPw" placeholder="Enter password again" name="confirmPw">
                <br>
                
                <button type="submit" onclick='SignUp.php'>Submit</button>
                <button type="reset" onclick ="alert('Reset Selected.')">Reset</button>
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