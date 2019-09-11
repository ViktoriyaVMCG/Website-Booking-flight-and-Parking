<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="s.css">
<script src="main.js" defer></script>
</head>
<body>
<?php
session_start();
if($_SESSION['login'] && isset($_POST['cart_id'])){
    $index = $_POST['cart_id'];
    unset($_SESSION['cart'][$index]);
    header("location:cart.php");
}else{
    header("location:log.php");
    die;
}
?>
<div class="navbar">
  <a href="index.php">Home</a>
  <a href="search.php">Book</a>
  <a href="parking.php"> Parking </a>
  <div class="dropdown">
  <a class="active" href="cart.php"><img src="sh1.png"></a>
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

<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>