<?php include("ShoppingCart/getFromCart.php"); ?>
<?php include("ShoppingCart/changeQuantity.php"); ?>
<?php include("ShoppingCart/delete.php"); ?>

<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Fresh - Shopping Cart</title>
    <link rel="stylesheet" href="shopcart.css">
    <script type="text/javaScript" src="shoppingCartHeader.js"></script>
</head>

<body onload="getFromCart()">

<!-- header -->
<header><h1>ShopFresh - Shopping Cart</h1></header>

<div class=" w1200">
    <div class="continueShopping">
        <p class="CS">
            <a href="ShopFreshFrontPage.html">Continue Shopping</a>
        </p>
    </div>

    <!----------------------------------------------------------------------------------------------------------->
    <div class="itemList">
        <div class="shoppingList" id="itemList"></div>
    </div>

    <script type="text/javaScript" src="shoppingCart.js"></script>

    <!----------------------------------------------------------------------------------------------------------->
    <div class="price">
        <table class="checkOut" style="text-align: right;">
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    Sous-total Items:
                </td>
                <td id="sousTotal">
                </td>
            </tr>
            <tr>
                <td>
                    QST:
                </td>
                <td id="QST">
                </td>
            </tr>
            <tr>
                <td>
                    GST:
                </td>
                <td id="GST">
                </td>
            </tr>
            <tr>
                <td>
                    Price Total:
                </td>
                <td id="pricePlusTaxes">
                </td>
            </tr>
        </table>
    </div>

    <!--Return to Main page-->
    <div class="ReturnHome">
        <p class="RH">
            <a href="ShopFreshFrontPage.html">Home </a>
        </p>
    </div>
</div>

<!-- footer includes student information -->
<footer>
    <h3>Derek Lam(40132682), Mathieu Morier(40181304), Alexandra Charland(40061073), 
        Jizhou Yang(40033034), Leon Zhang(40175616), Zebran Kamruzzaman(40065230)</h3>
</footer>
</body>
</html>