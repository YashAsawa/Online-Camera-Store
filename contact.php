<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include('header.php');
?>
    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:30px; position: relative;">CONTACT US</h1>
        <hr style="height:6px;background-color: black;">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:25px; position: relative;">E-MAIL</h1>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;">Our working hours are Monday through Friday.<br>All messages will be responded in 12-24 hours of receipt. We will get back to you as we can.</p>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;">To Contact us. please mail to us at <a href="mailto:support@ecamerastore.com">support@ecamerastore.com</a></p>
        <hr style="height:6px;background-color: black;">
        <h1 style="color:black;font-family: 'Amatic SC', cursive;font-size:25px; position: relative;">OFFICE ADDRESS</h1>
        <p style="color:black;font-family: 'Amatic SC', cursive;font-size:15px; position: relative;">1208/Q<br>Beverly Hills<br>7 Race Course Road<br>Bangalore<br>India<br>PIN-462037</p>
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
