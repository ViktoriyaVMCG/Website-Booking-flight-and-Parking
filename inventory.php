<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sttylll.css">
<script src="payment.js" defer></script>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #FFF;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: orange;
   color: white;
    }
  tr:nth-child(even) {background-color: blue}
 </style>
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
  <a  class="active" href="search.php">Book</a>
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
 <table>
 <tr>
  <th>From</th> 
  <th>To</th> 
  <th>Departure Date</th>
  <th>Price</th>
  <th>Seats Total</th>
  <th>Seats Reserved</th>
 </tr>
<?php

 if(!empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['dates'])){
 $From = $_POST['from'];
 $Dest = $_POST['to'];
 $Dates = $_POST['dates'];
 
 $mysqlDate = date("Y-m-d",strtotime($Dates)); 
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
 $query = "SELECT * FROM Flight WHERE Loc_from = '$From' AND Loc_dest = '$Dest' AND Dep_date = '$mysqlDate'";
 $numrows = $conn->query($query);
 if ($numrows->num_rows > 0) {
  // output data of each row
  while($row = $numrows->fetch_assoc()) { 
    $_SESSION['id'] = $row['ID'];
    $_SESSION['table'] = 'Flight';
    $_SESSION['price'] = $row['Price'];
     echo "<tr><td>" . $row["Loc_from"]. "</td><td>" . $row["Loc_dest"]. "</td><td>" .
	  $row["Dep_date"]. "</td><td>" . $row["Price"]. "</td><td>" . $row["Num_seats"]. "</td><td>" . 
	  $row["Reserved_seats"]. "</td><td>" .'<td><form action="cart.php" method="post"><input  class="buttons" type="submit" name="Add" value="Add"></form></td>' . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
}

?>
</table>
</div>
 <h2 class="b">This heading is hidden</h2>
<br>
<br>
</br>

<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>