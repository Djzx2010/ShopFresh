<!DOCTYPE html>
<html lang="eng" dir="ltr">

</html>

<head>
    <meta charset="utf-8">
    <title>Shop Fresh - BackStore Page</title>
    <!-- <link rel="stylesheet" href="../SFFrontPage.css">
    <link rel="stylesheet" href="../BackStore.css"> -->

    <link rel="stylesheet" href="../SFFrontPage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../BackStore.css?v=<?php echo time(); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light">
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
    <!--Outer Division-->
    <div class="container-fluid" style="margin-top: 10px">
        <div class="row">
            <div class="col-8">
                <h1>List of users</h1>
            </div>
            <div class="col-4">
                <a class="btn btn-primary" href="BackStore_P10.html" role="button" style="float: right ">Add</a>
            </div>
        </div>

            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                       <tbody>
                        <?php
                        $xml = simplexml_load_file('Users.xml');
                        $i = 1;
                        foreach ($xml->children() as $user) {
                            if($user->Status==0){
                                echo "<th scope='row'>" . $i++ .  "</th>
                                            <td scope='col'>$user->Name</td>
                                              <td scope='col' class='name'>$user->Email</td>
                                            <td scope='col'>$user->Password</td>

                                            <td scope='col'>
                                                <a class='btn btn-success role='button' onclick='edit(this)'>Edit</a>
                                                <a class='btn btn-danger role='button' onclick='deleteUser(this)'>Delete</a>
        
                                             </td>
                                        </tr>";
                                    }
                                }
                       ?>
                    </tbody>
            </table>


    </div>
    <!--JavaScript sourced for BootStrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="BackStore_P9.js"></script>
</body>