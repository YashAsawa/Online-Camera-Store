<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include('header.php');
?>
<style>
	@font-face{
		font-family: 'Amatic SC', cursive;
		src:url('./css/AmaticSC-Bold.ttf')  format('truetype');
	}
	body{
		background-image: url("./images/bg5.jpg");
	}
</style>
	
    <h1 style="color:white;text-align:center;font-family: 'Amatic SC', cursive;font-size:50px; position: relative;top:250px;">CAPTURE THE BEST</h1>
    <h2 style="color:white;text-align:center;font-family: 'Amatic SC', cursive;font-size:40px; position: relative;top:300px;">REDEFINE YOUR IMAGES</h2>
    <h2 style="color:white;text-align:center;font-family: 'Amatic SC', cursive;font-size:40px; position: relative;top:350px;">LOVE OUR CAMERAS</h2>
    <br>
    <img src="./images/bg5.jpg" style="z-index:1;margin-left:175px;margin-right:50px;margin-top:-100px;height:600px;width:1600px;border:2px solid black;border-radius:5px;">
    

   <?php 
   include('footer.php');
   ?>