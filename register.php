<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}

include('header.php');
?>

<?php
 $fnameErr = $lnameErr= $addressErr=$cityErr=$pinErr=$emailErr="";
 $fname = $lname= $address=$city=$pin=$email=$password="";

 $result = 1;
 if($_SERVER["REQUEST_METHOD"]== "POST" && (isset($_POST['submit'])))
 {

 $fname = test_input($_POST["fname"]);
 $lname = test_input($_POST["lname"]);
 $address = test_input($_POST["address"]);
 $city = test_input($_POST["city"]);
 $pin = test_input($_POST["no_pin"]);
 $email = test_input($_POST["email"]);
 $password = test_input($_POST["password"]);

 $fname = test_input($_POST["fname"]);
 if(empty($_POST["fname"])) {
 $fnameErr = "First Name Required";
 $result = 1;

 }
 else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"])){
 $fnameErr = "Only alphabets Required";
}

 $lname = test_input($_POST["lname"]);
 if(empty($_POST["lname"])) {
 $lnameErr = "Last Name Required";
 $result = 1;
 }
 else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"])){
 $lnameErr = "Only alphabets Required";

 }

 $address = test_input($_POST["address"]);
 if(empty($_POST["address"])) {
 $addressErr = "Address Required";
 $result = 1;
 }
 else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["address"])){
 $addressErr = "Only alphabets Required";

}

 $city = test_input($_POST["city"]);
 if(empty($_POST["city"])) {
 $cityErr = "City Required";
 $result = 1;
 }
 else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["city"])){
 $cityErr = "Only alphabets Required";

}

if(empty($_POST["no_pin"])) {
 $pinErr = "Pin Code Required";
 $result = 1;
 }


 else if(!preg_match("/^[1-9][0-9]{6}$/",$_POST["no_pin"])){
 $pinErr = "Please enter a valid Pin Code";
 $result = 1;
 }

 $email = test_input($_POST["email"]);
 if(empty($_POST["email"])) {
 $emailErr = "Email Required";
 $result = 1;
 }

 else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
 $emailErr = "Please enter a valid email Id";
 $result = 1;
 }
 
 $myfile = fopen("file_save.txt", "w") or die("Unable to open file!");

 $result = $id.$fname.$lname.$address.$city.$pin.$email.$password;
 fwrite($myfile, $result);
 fclose($myfile);

 }

 if($result==0){
 echo "<script> location.href='register.php'; </script>";
 exit;
 }


 function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }

 ?>

    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Nayan" name="fname" required="required" data-error="Firstname is required.">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Seth" name="lname" required="required" data-error="Lastname is required.">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Infinite Loop" name="address" required="required" data-error="Address is required.">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Mumbai" name="city" required="required" data-error="City is required.">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="400056" name="pin" required="required" data-error="Enter Valid PinCode ">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="email" required="required" data-error="Enter Valid Email Id ">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd" required="required" data-error="Enter Valid Password ">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>
<?php include('footer.php'); ?>
