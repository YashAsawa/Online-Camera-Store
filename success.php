<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include('header.php');
?>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <p>Success. Whatever task you performed, has been executed successfully. Congrats!</p>
        <p>In case you purchased a product, then please check your spam in email for the receipt.</p>


        <footer style="margin-top:10px;">
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
