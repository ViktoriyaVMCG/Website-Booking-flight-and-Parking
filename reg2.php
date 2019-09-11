<!doctype html>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" href="css/st.css">
</head>
<body>
<p>User Registration</p>
<form action="" method="post">
<p class="a">Username :</p><input type="text" name="user"><br/><br/>
<p class="a">Password:</p><input type="password" name="pass"><br/><br/>
<input type="submit" value="Register" name="submit" class="registerbtn"><br/><br/>
<!-- Login Link -->
<a href="login.php">Login</a>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'test') or die("DB Error"); 
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0) {
 $sql = "INSERT INTO userpass(user,pass) VALUES('$user','$pass')";
 $result = mysqli_query($conn, $sql);
 if($result){
 echo "Your Account Created Successfully";
 }else{
 echo "Failure!";}
 }else {
 echo "That Username already exists! Please try again.";}
 }else{
 ?>
 <script>alert('Required all felds');</script>
 <?php
 }
}
?>
</body>
</html>