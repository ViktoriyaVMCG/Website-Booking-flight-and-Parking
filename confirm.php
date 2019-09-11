<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sttyll.css">
<script src="main.js" defer></script>
</head>
<body>
<?php
session_start();
if(!$_SESSION['login']){
   header("location:log.php");
   die;
}
?>
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
      <a href="logout.php">Logout</a>
      <a href="profile.php">Profile</a>
    </div>
  </div> 	
</div>
<br>
<br>
<br>
<br>
<br>
 <div class="search">
<h1>Successfull</h1> 
<h2> Thank you for your purcashe </h2>
<p style="strong"> To see your purcashe items please click on the button.</p>
<br>
<a href="profile2.php" class="buttons">Check Reservation</a>
</form>

 <h2 class="b">This heading is hidden</h2>
<br>
<br>
</br>

<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>


</body>
</html>