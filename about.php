<?php
include('./data.php');
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}
include('./header.php');

?>
<style>
      @font-face{
    font-family: 'Amatic SC', cursive;
    src:url('./css/AmaticSC-Bold.ttf')  format('truetype');
  }
</style>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:30px; position: relative;">ABOUT</h1>
        <hr style="height:6px;background-color: black;">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:25px; position: relative;">REDEFINE YOUR IMAGES</h1>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;">E-Camera Bazaar is an online retailer offering an extensive range of photographic products. We are top-rated seller on eBay.com in the United Kingdom and Australia. We were awarded the Best Paypal Cross-sell Award in 2011.</p>
        <hr style="height:6px;background-color: black;">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:25px; position: relative;">LOVE OUR CAMERAS</h1>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;">E-Camera Bazaar loves cameras just as you do. We love sharing shooting adventures and interesting photo stories with the world and same as you, everyone in E-Camera Bazaar is photo-enthusiastic. We desire to capture every unique and precious moment happening in our everyday life. We are devoted to offering you the most-fit camera at its best price such that your passion in photography can be fulfilled without boundries.</p>
        <hr style="height:6px;background-color: black;">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:25px; position: relative;">KNOW YOUR NEEDS</h1>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;">E-Camera Bazaar drives to offer exceptionally-high standard of service to our customers by its price and quality of service. Not only are our products genuine-branded and in their brand new condition, they are offered to you at unbeatable competitive prices. Furthermore, our customer service team endeavours to give you peace of mind along your online purchase journey by handling all enquiries of yours promtly and efficiently. With E-Camera Bazaar, you can be rest assured that you are getting the best value from our amazing deals.</p>
        <hr style="height:6px;background-color: black;">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:25px; position: relative;">OUR PROJECT</h1>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;"><?php echo "".$shop_name; ?> is a project on E-Commerce Website.  
        <br>This project just gives a preview to what a real world implementation of an E-Camera Store Website would look like.</p>
        <hr style="height:6px;background-color: black;">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; <?php echo "".$shop_name; ?>. All Rights Reserved.</p>
        </footer>

      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
