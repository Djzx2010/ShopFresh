<!DOCTYPE html>
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
    <!--Outer Division-->
    <div class="container-fluid" style="margin-top: 10px">
        <div class="row">
            <div class="col-8">
                <h1>List of orders</h1>
            </div>
            <div class="col-4">
                <a class="btn btn-primary" href="BackStore_P12.html" role="button" style="float: right ">Add</a>
            </div>
        </div>

        <?php
    

        $orderList= simplexml_load_file("orders.xml") or die("Error: Cannot load the file");
        $display = "";
       
    
        foreach($orderList->children() as $users){
          $display = $display . "

          <li class=\"list-group-item\"><data value=\"01\">
                    <h3>{$users->username}</h3>
                </data>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>
                            <ul> "

                            foreach($orderList->children() as $products){
                                $display = $display . "<li>x{$products->productquantity} {$products->productname}</li>
"
                            }

                            "</ul>
                        </p>
                    </div>
                    <div class=\"col-md-6\">

                        <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                            <a class=\"btn btn-primary\" href=\"BackStore_P12.html\" role=\"button\">Edit</a>
                            <button class=\"btn btn-secondary\" type=\"button\">Delete</button>

                        </div>
                    </div>
                </div>
            </li>
          "
    

        echo "<ul>" . $display . "</ul>";
    
        //----------------------------------------------------------------------------------
        //Delete xml record + delete php file
        
    
       if(isset($_POST['submit'])){
         //Store info of the form in variable
         $name = $_POST['name'];
       
         //Create DOM and load file in it
         $xml = new DOMDocument();
         $xml->load("orders.xml");
    
         //Loop through the DOM to find the product and delete it
         $product = $xml->getElementsByTagName("users");
         $prodName = $xml->getElementsByTagName("username");
         
         for($i = 0; $i<$users->length; $i++){
           if($prodName->item($i)->nodeValue == $username){
           $users->item($i)->parentNode->removeChild($users->item($i));
            
           }
         }
         //Save the change to the xml file
         $xml->save("orders.xml");
         
         
         }
         
    
       }
       
        ?>


    </div>
    <!--JavaScript sourced for BootStrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>