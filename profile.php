

<?php  

session_start();
if(!$_SESSION['login']){
   header("location:log.php");
   die;
}else{

 $connect = mysqli_connect("localhost", "root", "", "hayridedb");  
 
}
 ?> 
 
 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="s.css">
<script src="main.js" defer></script>

<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 75%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  margin-top: 100px;
}

.left {
  left: 0;
  background-color: blue;
}

.right {
  right: 0;
  background-color: orange;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: purple;
} 
</style>
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
      <a href="logout.php">Logout</a>
      <a  class="active" href="profile.php">Profile</a>
    </div>
  </div> 	
</div>

 
<div class="split left">
  <div class="centered">
  <h1>Welcome to Your Profile <?=$_SESSION['sess_user'];?> </h1>
  <br /><br />  
    <h2>Name: <?=$_SESSION['sess_user'];?> </h2>       

  <br>
  
  <button  class="btn" type="submit" onclick="window.location.href='logout.php'">Log Out</button>
  <br>
  </div>
</div>

<div class="split right">
  <div class="centered">
  <h1>Your Orders </h1>
	
<table>
  <tr>
    <th>#</th>
    <th>Category </th>
	<th>Place</th>
    <th>Price</th>
  </tr>
  <tr>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
  <td></td>
   <td></td>
    <td></td>
	<td></td>
  </tr>
 
</table>
<br> 
  </div>
</div>




</p>






 
<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>


<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  