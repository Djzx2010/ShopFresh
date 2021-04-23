<?php
  //client use logout

  //Set the cookie expiration time to the past 1 hour
   setcookie("clientName", "", time()-3600);
   setcookie("userStatus", "", time()-3600);
   setcookie("isLogin", "", time()-3600);
   //direct to the login page
   echo "<script type='text/javascript'>alert('User logout.')</script>";
   header("Refresh:1; url=ShopFreshLogin.php");
?>