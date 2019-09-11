<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylll.css">
	 <link rel="stylesheet" type="text/css" href="styllll.css">
    <form action="confirm.php" method="POST">
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

<h1> Total </h1>
    <div class="container-fluid">
        <div class="creditCardForm">
            <div>
			<br>
<div class="center">
                    <?php
                   
                    echo "Discount   :  10% <br>";
                    echo "Total Price:  180 <br>";
                 
					?>
	
</div>					
<br>
                    <div class="form-group" id="pay-now">
                        <!-- <button type="submit" class="btn-default">Confirm</button> -->
                        <button  class="button" type="submit">Confirm</button>
                    </div>
					<br>
					<div class="form-group" id="pay-now">
                        <button  class="buttons" type="submit">Back</button>
                    </div>
					<br>
	<h3 class="b">Arrrrr</h3>
	<br>
                </form>
            </div>
        </div>

    </div>
	<br>
	<h3 class="b">Arrrrr</h3>
	<br>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.payform.min.js" charset="utf-8"></script>
    <script src="payment.js"></script>
	<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>





<?php
 
 if(!empty($_POST['Street']) && !empty($_POST['City']) && !empty($_POST['State']) && !empty($_POST['Zipcode'])){
 $Street = $_POST['Street'];
 $City = $_POST['City'];
 $State = $_POST['State'];
 $Zipcode = $_POST['Zipcode'];
 $Username = $_SESSION['sess_user'];
 $Fname = $_POST['fname'];
 $Lname = $_POST['lname'];
 $Phonenum = $_POST['Phone_num'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
 $query = mysqli_query($conn, "SELECT * FROM Users WHERE Username='".$Username."'");
 $numrows = mysqli_num_rows($query);
 if($numrows > 0) {
    $sql = "INSERT INTO Users (Fname, Lname, Phone_num, Street, City, $state, Zipcode) VALUES('$Fname','$Lname','$Phonenum','$Street','$City','$State','$Zipcode')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Your Billing address added successfully!";
    }else{
        echo "That Address already exists.";}
 }else {
     echo "That Username already exists! Please try again.";}
 }else{
	 
 ?>

 <?php
 }

?>

<!-- <script type="text/javascript">
  function submitForm(action) {
    var form = document.getElementById('form1');
    form.action = action;
    form.submit();
  }
</script> -->


</body>
</html>
