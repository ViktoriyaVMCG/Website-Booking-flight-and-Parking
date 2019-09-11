<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="st.css">
    <script src="register.js" defer></script>
	<form action="r.php" method="POST">
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="search.php">Book</a>
  <a href="parking.php"> Parking </a>
  <div class="dropdown">
  <a href="cart.php"><img src="sh1.png"></a>
   </div>
  <div class="dropdown">
    <button class="dropbtn"><img src="p1.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a class="active" href="r.php">Register</a>
      <a href="log.php">Login</a>
      <a href="profile.php">Profile</a>
    </div>
  </div> 	
</div>




    <div class="container">
	 <fieldset>
    <h1>User Register</h1>

    <p>
      <label for="fullName">Username</label> </br>
      <input name="Username" id="fullName" value="" required="required" placeholder="Full Name" aria-required="true" pattern="(^[A-Za-z]+$){1,}" title="Enter your username without any special characters" type="text"  />
    </p>

    <p>
      <label for="email">Email</label> </br>
      <input name="Email" id="email" value="" required="required" placeholder="Email" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" title="Your email address" type="email" />
    </p>

    <p>
	  <label for="password">Password</label> </br>
      <input type="password" id="password" name="Passwrd"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,20}" required>
    </p>
   
   <p>
      <label for="passwordConfirm">Confirm Password</label> </br>
      <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,20}"  required>
   </p>
   
<div id="formErrors">

<?php

 if(!empty($_POST['Username']) && !empty($_POST['Passwrd']) && !empty($_POST['Email'])){
 $Username = $_POST['Username'];
 $Email = $_POST['Email'];
 $Passwrd = $_POST['Passwrd'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
 $query = mysqli_query($conn, "SELECT * FROM Users WHERE Username='".$Username."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0) {
 $sql = "INSERT INTO Users (Username, Email, Passwrd) VALUES('$Username','$Email','$Passwrd')";
 $result = mysqli_query($conn, $sql);
 if($result){
 echo "Your Account Created Successfully";
 }else{
 echo "That Email already exists! Please try again.";}
 }else {
 echo "That Username already exists! Please try again.";}
 }else{
	 
 ?>

 <?php
 }

?>
	<br/><span id="fullName_error" style="color:red;visibility: hidden;"> *Name is empty or is not valid.</span><br>
	<span id="email_error" style="color:red;visibility: hidden;"> *Email is not valid</span><br>
	<span id="password_empty" style="color:red;visibility: hidden;"> *Password is empty.</span><br>			
	<span id="password_len_error" style="color:red;visibility: hidden;"> *Password must be between 10-20.</span><br>
	<span id="password_upper" style="color:red;visibility: hidden;"> *Password must containat least one uppercase character.</span><br>
	<span id="password_lower" style="color:red;visibility: hidden;"> *Password must containat least one lowercase character.</span><br>
	<span id="password_digit" style="color:red;visibility: hidden;"> *Password must containat least one one digit.</span><br>
	<span id="password_conf" style="color:red;visibility: hidden;"> *Confirm password must match Password.</span><br>
</div>

    <button name="save" id="submit" type="submit" onclick="return checkForm()"> Register</button>
	
	<p id="lol"><a href="log.php">Have an accaunt? Log In.</a></p>
</form>	
  </fieldset>
  
  
  <h2 class="b">This heading is hidden</h2>
  
   <div class="footer">
		<p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
	</div>
</div>
</body>
</html>