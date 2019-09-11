<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styll.css">
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
}else{
  $Parkingtype = $_POST['parkingtype'];
}
?>
<div class="navbar">
  <a href="index.php">Home</a>
  <a href="search.php">Book</a>
  <a class="active"href="parking.php"> Parking </a>
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
 <th>Location</th>
 <?php
 if($Parkingtype == "vip")
  echo "  <th>Vip Price</th> 
  <th>Vip total available</th>
  <th>Vip total reserved</th>";
  else{
    echo "  <th>Normal Price</th>
    <th>Normal total availablel</th>
    <th>Normal total reserved</th>";
  }
 ?>
 <th> </th>

 </tr>

<?php

 if(!empty($_POST['location']) && !empty($_POST['numdays'] && !empty($_POST['parkingtype']))){
 $Location = $_POST['location'];
 $Numdays = $_POST['numdays'];
 
 
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
 $query = "SELECT * FROM Parking WHERE Locale = '$Location'";
 $numrows = $conn->query($query);
 if ($numrows->num_rows > 0) {
  // output data of each row  Vip_price, Normal_price, Num_vip_total, Num_vip_reserved, Num_normal_total, Num_normal_reserved
  while($row = $numrows->fetch_assoc()) { 
    $_SESSION['id'] = $row['ID'];
    $_SESSION['table'] = 'Parking';
    $_SESSION['parktype'] = $Parkingtype;
    if($Parkingtype == "vip"){
      $_SESSION['price'] = $row['Vip_price'];
      echo "<tr><td>" . $row["Locale"]. "</td><td>" . $row["Vip_price"]. 
      " </td><td>" . $row["Num_vip_total"]. " </td><td> " . $row["Num_vip_reserved"]. '<td><form action="cart.php" method="post"><input  class="buttons" type="submit" name="Add" value="Add"></form></td>' ."</td></tr>";
    }else{
      $_SESSION['price'] = $row['Normal_price'];
	  echo " <tr><td> " . $row["Normal_price"]. "</td><td> " . $row["Normal_price"]. 
      " </td><td> " . $row["Num_normal_total"]. "</td><td>" . $row["Num_normal_reserved"]. "</td><td>" .'<td><form action="cart.php" method="post"><input  class="buttons" type="submit" name="Add" value="Add"></form></td>' . "</td></tr>";
    }
  } 
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