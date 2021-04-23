
<html lang="eng" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Shop Fresh - BackStore Page</title>
  <link rel="stylesheet" href="../SFFrontPage.css">
  <link rel="stylesheet" href="../BackStore.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../ShopFreshFrontPage.html">ShopFresh</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
  <!--border-->
  <div class="container-fluid" style="margin-top: 10px">
    <div class="row">
      <div class="col-8">
        <h1>List of Products</h1>
      </div>
      <div class="col-4">
        <a class="btn btn-primary" href="addProduct.php" role="button" style="float: right ">Add</a>
      </div>
    </div>


    <!-- ---------------------------------------------------------------------------------------------------------------  -->

    <?php
    

    $productList= simplexml_load_file("product.xml") or die("Error: Cannot load the file");
    $display = "";
   

    foreach($productList->children() as $product){
      $display = $display . "
      <li>{$product->name}
      <details>
      <ul>
      <li><strong>Quantity = </strong> {$product->quantity}</li>
      <li><strong>Type = </strong> {$product->type}</li>
      <li><strong>Size = </strong> {$product->size}</li>
      </ul>
      </details>

     
      <form  action=\"BackStore_P7.php\" method=\"post\">
      <a class=\"btn btn-primary\" href=\"{$product->name}(P8).php\" role=\"button\">Edit</a>
      <input type=\"hidden\" name=\"name\" value=\"{$product->name}\">
      <input class=\"btn btn-secondary\" type=\"submit\" name=\"submit\" value=\"Delete\" >
      </form>
   </li> ";
    }

    echo "<ul>" . $display . "</ul>";

    //----------------------------------------------------------------------------------
    //Delete xml record + delete php file
    

   if(isset($_POST['submit'])){
     //Store info of the form in variable
     $name = $_POST['name'];
   
     //Create DOM and load file in it
     $xml = new DOMDocument();
     $xml->load("product.xml");

     //Loop through the DOM to find the product and delete it
     $product = $xml->getElementsByTagName("product");
     $prodName = $xml->getElementsByTagName("name");
     
     for($i = 0; $i<$product->length; $i++){
       if($prodName->item($i)->nodeValue == $name){
       $product->item($i)->parentNode->removeChild($product->item($i));
        
       }
     }
     //Save the change to the xml file
     $xml->save("product.xml");
     
     //Delete php file edit page
     $file_pointer = $name . "(P8).php";
     if(file_exists($file_pointer)) {
      unlink($file_pointer);
     }
     
     



   }
   
    ?>
  
      <!--JavaScript sourced for BootStrap-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">

      //---------------------------------------------------------------------------------------------------------------
     
      

    </script>
</body>

</html>