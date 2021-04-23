<?php include("ShoppingCart/addToCart.php"); ?>

<!DOCTYPE html>
<html lang="en-CA">
    
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ShopFresh - Milk</title>
        <link rel="stylesheet" href="../ResponsiveProductPages.css">
        <script type="text/javaScript" src=productScripts.js></script>
    </head>
    
    <body onload="refresh('Milk')">
        <!-- header -->
        <header>
            <h1>ShopFresh - Dairy&Eggs</h1>
        </header>
        
        <!-- menu/navigation bar -->
        <ul class="menu">
            <li class="menu"><a href="../ShopFreshFrontPage.html">Back to Welcome Page</a></li>  
            <li class="menu"><a href="../ShopFreshFruits&VeggiesSection.html">Fruits&Vegetables Aisle</a></li> 
            <li class="menu"><a href="../ShopFreshDairy&EggsSection.html">Dairy&Eggs Aisle</a></li> 
            <li class="menu"><a href="../ShopFreshFish&MeatSection.html">Fish&Meat Aisle</a></li>
            <li class="menuRight"><a href="../ShoppingCart.php">Shopping Cart</a></li>
            <li class="menuRight"><a href="../ShopFreshLogin.php">Login</a></li>
        </ul>
        
        <!-- variable page content, different for all products -->
        <div>
            <!-- image of the product -->
            <img class="ProductImage" src="images/MilkImage.jpg" alt="Milk in a jar.">
        </div>
        <!-- description of the product -->
        <div class="description">
        <p>
        <h1>Milk &nbsp;&nbsp;&nbsp;&nbsp; <button id="btn" onclick="moreInfo('Milk')">More info</button></h1>
        <p><span id="info">Fresh 2% pasteurized milk from the local farm.</span></p>
        <h3>Local ShopFresh Brand</h3>
        2L<br><br>
        <h1 class="price" id="productPrice">$5.49</h1>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <!-- Adding to cart -->
        <form class="add">
            <select id="quantity" onchange="calculate('Milk')">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp; 
            <button onclick="addToCart('Milk', 5.49)">Add to Cart</button>
        </form>
        </p>
        </div>
        
       <!-- footer includes student information -->
        <footer>
            <h4>Derek Lam(40132682), Mathieu Morier(40181304), Alexandra Charland(40061073), Jizhou Yang(40033034), Leon Zhang(40175616), Zebran Kamruzzaman(40065230)</h4>
        </footer>
        
    </body>
    

</html>
