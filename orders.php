<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
include('header.php');
?>
<style>
  @font-face{
    font-family: 'Amatic SC', cursive;
    src:url('./css/AmaticSC-Bold.ttf')  format('truetype');
  }
</style>
    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h2 style="color:black;text-align:left;font-family: 'Amatic SC', cursive;font-size:40px; position:relative;border:2px solid black;padding:30px 15px;">My Orders</h2>
        <hr style="height:6px;background-color: black;">

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<p><h4>Order ID - '.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              echo '<p><hr style="height:6px;background-color: black;"></p>';

            }
          }
        ?>
      </div>
    </div>
<?php include('footer.php'); ?>
