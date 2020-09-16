2
<?php
include('./data.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "".$shop_name; ?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style>
    	@font-face{
		font-family: 'Amatic SC', cursive;
		src:url('./css/AmaticSC-Bold.ttf')  format('truetype');
	}
</style>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation" style="height:100px;padding:70px 15px;margin-top:-15px;">
      <ul class="title-area" style="margin-top:15px;">
        <li class="name">
          <!--h1><a href="index.php"><php echo "".$shop_name; ?></a></h1-->
          <a href="index.php"><img src="images/logo10.jpg" style="width:70px;height:63px;margin-left:50px;margin-top:-40px;background-color: transparent;">    <b style="color:white;font-family: 'Amatic SC', cursive;font-size:24px;padding:70px 15px;padding-left:20px;"> E-CAMERA BAZAAR </b></a>
        </li>	
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section" style="margin-top:-45px;margin-right:20px;height:60px;">
      <!-- Right Nav Section -->
        <ul class="right" style="height:100px;">
        	<li><a href="index.php"><img src="./images/home3.png" style="width:37px; height:47px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: 'Amatic SC', cursive;font-size:14px;">Home</b></a></li>	
          <li><a href="products.php"><img src="./images/products2.png" style="width:30px; height:40px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: 'Amatic SC', cursive;font-size:14px;">Products</b></a></li>
          <li><a href="orders.php"><img src="./images/box2.png" style="width:40px; height:50px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: 'Amatic SC', cursive;font-size:14px;">My Orders</b></a></li>
          <li><a href="cart.php"><img src="./images/cart3.png" style="width:35px; height:45px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: 'Amatic SC', cursive;font-size:14px;">View Cart</b></a></li>
          <?php
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php"><img src="./images/account.jpg" style="width:30px; height:40px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: Amatic SC, cursive;font-size:14px;">My Account</b></a></li>';
            echo '<li><a href="logout.php"><img src="./images/logout.png" style="width:35px; height:45px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: Amatic SC, cursive;font-size:14px;">Log Out</b></a></li>';
          }
          else{
            echo '<li><a href="login.php"><img src="./images/login7.png" style="width:32px; height:42px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: Amatic SC, cursive;font-size:14px;">Log In</b></a></li>';
            echo '<li><a href="register.php"><img src="./images/reg4.png" style="width:32px; height:42px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: Amatic SC, cursive;font-size:14px;">Register</b></a></li>';
          }
          ?>
          <li><a href="contact.php"><img src="./images/contact.png" style="width:33px; height:43px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: 'Amatic SC', cursive;font-size:14px;">Contact Us</b></a></li>
          <li><a href="about.php"><img src="./images/about5.webp" style="width:35px; height:45px; background-color: transparent;padding:10px 5px;"><b style="color:white;font-family: 'Amatic SC', cursive;font-size:14px;">About</b></a></li>
        </ul>
      </section>
    </nav>