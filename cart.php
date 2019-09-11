<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sss.css">
<script src="main.js" defer></script>
</head>
<body>
<?php
error_reporting(0);
session_start();
if(!$_SESSION['login']){
   header("location:log.php");
   die;
}else if(isset($_POST['Add'])){
  $_SESSION['cart'][] = array('Id' => $_SESSION['id'], 'type' => $_SESSION['table'], 'parkingtype' => $_SESSION['parktype'], 'price' => $_SESSION['price']);
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
<h1>Cart </h1>
<div class="search">
<h2>Your orders</h2>
<br>
<table id="myTable">
 <tr>
  <th>#</th>
  <th>Category</th> 
  <th>Price</th> 
  <th>Remove</th>
 </tr>
<?php
$count = 1;
$conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
$db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
foreach ($_SESSION['cart'] as $index => $result){
  if($result['type'] == "Flight"){
    $id = $_SESSION['cart'][$index]['Id'];
    $blah = $_SESSION['cart'][$index];
    $query = "SELECT * FROM Flight WHERE ID = '$id'";
    $numrows = $conn->query($query);
    if ($numrows->num_rows > 0) {
    // output data of each row
    while($row = $numrows->fetch_assoc()) { 
      echo "<tr><td>" .$count. "</td><td> Flight </td><td>" . $row["Price"]. "</td><td> <form action=\"delete.php\" method=\"post\">
      <input type=\"hidden\" name=\"cart_id\" value=".$index.">
     <button type='submit' id='btn' class='delete' value=\"Delete\">Delete</button>
 </form>";
      $count++; 
    }
   }
  }else{
    $id = $_SESSION['cart'][$index]['Id'];
    $query = "SELECT * FROM Parking WHERE ID = '$id'";
    $numrows = $conn->query($query);
    if ($numrows->num_rows > 0) {
    // output data of each row
    while($row = $numrows->fetch_assoc()) { 
      $Parktype = $_SESSION['cart'][$index]['parkingtype'];
      if($Parktype == 'vip'){
        echo "<tr><td>" .$count. "</td><td> Parking </td><td>" . $row["Vip_price"]. "</td><td> <form action=\"delete.php\" method=\"post\">
        <input type=\"hidden\" name=\"cart_id\" value=".$index.">
       <button type='submit' id='btn' class='delete' value=\"Delete\">Delete</button></form>";
        $count++;
      }else{
        echo "<tr><td>" .$count. "</td><td> Parking </td><td>" . $row["Normal_price"]. "</td><td> <form action=\"delete.php\" method=\"post\">
        <input type=\"hidden\" name=\"cart_id\" value=".$index.">
       <button type='submit' id='btn' class='delete' value=\"Delete\">Delete</button></form>";
        $count++;
      }
   }
  }


} 

}
echo "</table>";
 
?>
</table>
<a href="payment.php" class="buttons">Checkout</a>
<br>
</div>
<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>