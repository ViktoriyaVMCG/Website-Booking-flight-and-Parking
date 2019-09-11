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

<h1> Payment </h1>
    <div class="container-fluid">
        <div class="creditCardForm">
            <div>
                
				<h2> Card Information </h2>
                    <div class="owner">
					 
                        <label for="owner"><h3> Name of Card Holder</h3></label><h3 class="b">Arrrrr</h3> 
						<label for="cvv"><h3>CVV</h3></label> </br>
                        <input type="text" class="form-control" id="owner">
                        <input type="text" class="form-control1" id="cvv">
                    </div>
		           
                    <div class="form-group" id="card-number-field">
                        <label id="number" for="cardNumber"><h3>Card Number</h3></label></br>
                        <input type="text" class="form-control2" id="cardNumber">
                    </div>
                    <div class="form">
                        <label><h3 class="a">Expiration Date</h3></label></br>
                        <select id="expiration-date">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select id="expiration-date">
                            <option value="16"> 2019</option>
                            <option value="17"> 2020</option>
                            <option value="18"> 2021</option>
                            <option value="19"> 2022</option>
                            <option value="20"> 2023</option>
                            <option value="21"> 2024</option>
                        </select>
                       <h3 class="b">Arrrrr</h3>
					   <br>
                       <div class="center">
                        <img src="visa.jpg" id="visa">
                        <img src="mastercard.jpg" id="mastercard">
                        <img src="amex.jpg" id="amex">
						</div>
                    </div>
					<hr>
					
				  <h2> Passanger Information </h2>
					<div class="owner">
					    <label for="owner"><h3> First Name</h3></label>
						<input type="text" class="form-control2" id="owner" name="fname">
						<label for="cvv"><h3>Last Name</h3></label> </br>
                        <input type="text" class="form-control2" id="owner" name="lname">
                        
                    </div>
					<hr>
					<h2> Billing Address Information </h2>
					<div class="address">
                        <label for="address" name="Street"><h3> Billing Address</h3></label> 
                        <input type="text" class="control" id="address">
						<label for="city" name="City"><h3>City</h3></label> 
						<label for="state" name="State"><h3 class="c">State</h3></label> 
						<label for="zipcode" name="Zipcode"><h3 class="d">ZipCode</h3></label> </br>
                        <input type="text" class="control1" id="city">
                        <select name="State" id="expiration-date1">
                            <option value="-1"> -none-</option>
                            <option value="AL"> Alabama</option>
                            <option value="AK"> Alaska</option>
                            <option value="AZ"> Arizona</option>
                            <option value="AR"> Arkansas</option>
                            <option value="CA"> California</option>
							<option value="CO"> Colorado</option>
							<option value="CT"> Connecticut</option>
							<option value="DE"> Delaware</option>
							<option value="FL"> Florida</option>
							<option value="GA"> Georgia</option>
							<option value="HI"> Hawaii</option>
							<option value="ID"> Idaho</option>
							<option value="IL"> Illinois</option>
							<option value="IN"> Indiana</option>
							<option value="IA"> Iowa </option>
							<option value="KS"> Kansas</option>
							<option value="KY"> Kentucky</option>
							<option value="LA"> Louisiana</option>
							<option value="ME"> Maine</option>
							<option value="MD"> Maryland</option>
							<option value="MA"> Massachusetts</option>
							<option value="MI"> Michigan</option>
							<option value="MN"> Minnesota</option>
							<option value="MS"> Mississippi</option>
							<option value="MO"> Missouri</option>
							<option value="MT"> Montana</option>
							<option value="NE"> Nebraska</option>
							<option value="NV"> Nevada </option>
							<option value="NH"> New Hampshire</option>
							<option value="NJ"> New Jersey</option>
							<option value="NM"> New Mexico</option>
							<option value="NY"> New York</option>
							<option value="NC"> North Carolina</option>
							<option value="ND"> North Dakota</option>
							<option value="OH"> Ohio</option>
							<option value="OK"> Oklahoma</option>
							<option value="OR"> Oregon</option>
							<option value="PA"> Pennsylvania</option>
							<option value="RI"> Rhode Island</option>
							<option value="SC"> South Carolina</option>
							<option value="SD"> South Dakota</option>
							<option value="TN"> Tennessee</option>
							<option value="TX"> Texas</option>
							<option value="UT"> Utah</option>
							<option value="VT"> Vermont</option>
							<option value="VA"> Virginia</option>
							<option value="WA"> Washington</option>
							<option value="WV"> West Virginia</option>
							<option value="WI"> Wisconsin</option>
							<option value="WY"> Wyoming</option>
                        </select>
						<input type="text" class="control2" id="country">
                    </div>
					<hr>
					<div class="address">
                        <label for="number"><h3> Phone Number</h3></label> 
                        <input type="tel" class="control2" id="phone" name="Phone_num">
					</div>
					<div class="discount">
                        <label for="number"><h3> Discount or Coupon </h3></label> 
                        <input type="text" class="control3" id="discount" name="discount">
                        <a class="btn-def"  href="payment2.php">Apply Discount</a> 
					</div>
					
<div class="center">
                    <?php
                    if (empty($_POST['discount'])){
                    $total = 0;
                    foreach ($_SESSION['cart'] as $index => $result){
                        $price =  $_SESSION['cart'][$index]['price'];
                        $total = $total + $price;
                    }
                    $_SESSION['total'] = $total;
                    echo "Discount   :  0% <br>";
                    echo "Total Price: " .$total. "<br>";
                    }else{
                        $total = 0;
                        foreach ($_SESSION['cart'] as $index => $result){
                            $price =  $_SESSION['cart'][$index]['price'];
                            $total = $total + $price;
                        }
                        $total = $total *.10;
                        $_SESSION['total'] = $total;
                        echo "Discount   :  10% <br>";
                        echo "Total Price: " .$total. "<br>";
                    }
                    ?>
                    <br>
	
</div>					
                    <div class="form-group" id="pay-now">
                        <!-- <button type="submit" class="btn-default">Confirm</button> -->
                        <input type="button" class="btn-default "onclick="submitForm('confirm.php')" value="Confirm" />
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
