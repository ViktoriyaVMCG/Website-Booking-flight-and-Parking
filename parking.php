<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stt.css">
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
  <a  href="search.php">Book</a>
  <a class="active" href="parking.php"> Parking </a>
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

<h1> Parking </h1>
<div class="search">
<h2>Book the Best Spaces</h2>
<form action="inventory2.php" method="POST">



<label for="location" id="loco">Location</label> 
</br>
<br>
   <select name="location" id="dates">
              <option value="-1"> -none-</option>
              <option value="Atlanta"> Atlanta</option>
              <option value="Chicago"> Chicago</option>
              <option value="Dallas"> Dallas</option>
              <option value="Los-Angeles"> Los-Angeles</option>
              <option value="Miami"> Miami</option>
							<option value="New-York"> New-York</option>
						
 </select>    
	  
<hr>
<label for="numdays" id="loco">Date</label> </br>
	  
      <input type="date" name="dates" id="dates" value="" required="required" placeholder="Departure" />
<hr>

<label for="numdays" id="loco">Days</label> 
</br>
<select name="numdays" id="dates">
              <option value="1"> 1</option>
              <option value="2"> 2</option>
              <option value="3"> 3</option>
              <option value="4"> 4</option>
              <option value="5"> 5</option>
							<option value="6"> 6</option>
							<option value="7"> 7</option>
							<option value="8"> 8</option>
							<option value="9"> 9</option>
							<option value="10"> 10</option>						
 </select> 
 </br>
 <hr>
  <label class="radio-inline">
<input type="radio" name="parkingtype" value="normal" checked="checked">Normal Space<br>
</label>
<label class="radio-inline">
<input type="radio" name="parkingtype" value="vip">VIP<br>
</label>
<br>
<br>  

<button  class="button" type="submit">Search</button>

</form>

</div>
<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>
