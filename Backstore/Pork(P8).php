
<?php
if($_POST){
$quantity = $_POST["quantity"];
$type = $_POST["type"];
$size = $_POST["size"];

$xml = new DOMDocument();
$xml->load("product.xml");

$name = $xml->getElementsByTagName("name");
$q = $xml->getElementsByTagName("quantity");
$t = $xml->getElementsByTagName("type");
$s = $xml->getElementsByTagName("size");

for($i =0; $i<$name->length; $i++){
  if($name->item($i)->nodeValue == "Pork") {
    $q->item($i)->nodeValue = $quantity;
    $t->item($i)->nodeValue = $type;
    $s->item($i)->nodeValue = $size;
  }
    
    }
    $xml->save("product.xml");
    //Return to P7
    header("Refresh:0; url=BackStore_P7.php");
}




?>

<html lang="eng" dir="ltr">
   <head>
    <meta charset="utf-8">
    <title>Shop Fresh - BackStore Page</title>
    <link rel="stylesheet" href="../BackStore.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   </head>
   <body>
      <!--Container div-->
     <div id="container">
      <!--Header-->
      <div class="Header">
         <h1>Backstore</h1>
         <h2>Edit product</h2>
      </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#95d097">
       <div class="container-fluid">
         <a class="navbar-brand" href="../ShopFreshFrontPage.html">ShopFresh</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav">
             <a class="nav-link" href="../BackStorePage.html">BackStore</a>
             <a class="nav-link" href="../ShoppingCart.html">Shopping Cart</a>
           </div>
         </div>
       </div>
     </nav>
      <div class="borderForm">
      <div class="editForm">
       <h3>Pork</h3>  
       <form action=" Pork(P8).php " method="post">
        <label for="quantity">Quantity</label><br>
        <input type="text" id="quantity" name="quantity" value=""><br>
        <label for="type">Type</label><br>
        <input type="text" id="type" name="type" value=""><br>
        <label for="size">Size</label><br>
        <input type="text" id="size" name="size" value=""><br><br>
        <input type="submit" value="Save">
       </form> 
      </div>
      </div>
     </div>
   </body>
</html>
