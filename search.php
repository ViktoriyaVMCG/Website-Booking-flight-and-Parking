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
  <a class="active" href="search.php">Book</a>
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

<h1> Book a flight </h1>
<div class="search">
<h2>Please select your trip:</h2>
<form action="inventory.php" method="POST">
<hr>


<label for="Locations" id="loco">Locations</label> 
</br>
<br>

<h3>From</h3><h3 class="b">Arrival rrrrrrrrrDateeeeee</h3> 
	  <h3>To</h3> </br>
	   
                <select name="from" id="dates">
                            <option value="-1"> -none-</option>
                            <option value="Atlanta"> Atlanta</option>
                            <option value="Chicago"> Chicago</option>
                            <option value="Dallas"> Dallas</option>
                            <option value="Los-Angeles"> Los-Angeles</option>
                            <option value="Miami"> Miami</option>
							<option value="New-York"> New-York</option>
						
                        </select>
	  
                        <select name="to" id="dates">
						<option value="-1"> -none-</option>
                            <option value="Atlanta"> Atlanta</option>
                            <option value="Chicago"> Chicago</option>
                            <option value="Dallas"> Dallas</option>
                            <option value="Los-Angeles"> Los-Angeles</option>
                            <option value="Miami"> Miami</option>
							<option value="New-York"> New-York</option>
							
                        </select>
						
	  
<hr>

<label for="dates" id="loco">Dates</label> 
</br>
  
      <h3>Departure Date</h3></br>
	  
      <input type="date" name="dates" id="dates" value="" required="required" placeholder="Departure" />
	  
<hr>	  

<button  class="buttons" type="submit">Search</button>
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