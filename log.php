<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <script src="register.js" defer></script>
    <form action="log.php" method="POST">
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
	  <a href="r.php">Register</a>
      <a class="active" href="log.php">Login</a>
      <a href="profile.php">Profile</a>
    </div>
  </div> 	
</div>


    <div class="container">
	 <fieldset>
    <h1>Log In</h1>

    <p>
      <label for="username">Username</label> </br>
      <input name="username" id="username" value="" required="required" placeholder="Username" aria-required="true" pattern="(^[A-Za-z]+$){1,}" title="Your username" />
    </p>

    <p>
      <input type="password" id="password" value="" name="password"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,20}" required>
    </p>
   
<div id="formErrors">
<?php

if(!empty($_POST['username']) && !empty($_POST['password'])){
 $Username = $_POST['username'];
 $Passwrd = $_POST['password'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
 $query = mysqli_query($conn, "SELECT * FROM Users WHERE Username='".$Username."'");
 $numrows = mysqli_num_rows($query);
 if($numrows > 0) {
 while($row = mysqli_fetch_assoc($query)){
 $dbusername=$row['Username'];
 $dbpassword=$row['Passwrd'];
 echo "Username: " .$dbusername. "<br>";
 }if($Username == $dbusername && $Passwrd == $dbpassword){
 session_start(); 
 $_SESSION['login'] = true;
 $_SESSION['sess_user']=$Username;
 $_SESSION['id'];
 $_SESSION['table'];
 $_SESSION['parktype'] = "normal";
 $_SESSION['cart'] = array();
 $_SESSION['total'] = 0;
 header("Location:profile.php");
 }
 }else{
 echo "Invalid Username or Password!";
 }
 }else{
 echo "Required All fields!";
 }

?>
	<span id="email_error" style="color:red;visibility: hidden;"> *Email is not valid</span><br>
	<span id="password_empty" style="color:red;visibility: hidden;"> *Password is not valid.</span><br>			
</div>

 
	<input type="submit" value="Login" name="save" id="submit"><br/>
	
	<p id="lol"><a href="r.php">Don't have an accaunt? Register.</a></p>
</form>
	
	<div class="footer">
     <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
    </div>

  </fieldset>
</div>



</body>
</html>