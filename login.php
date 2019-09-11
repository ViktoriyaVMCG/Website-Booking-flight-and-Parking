<!doctype html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/st.css">
</head>
<body>
<p>Login</p>
<form action="" method="post">
<p class="a">Username:</p><input type="text" name="user"><br/>
<p class="a">Password:</p><input type="password" name="pass"><br/>
<input type="submit" value="Login" name="submit" class="registerbtn"><br/>
<h3><a href="reg.php">New User Registeration!</a></h3>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
 $db = mysqli_select_db($conn, 'test') or die("databse error");
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0){
 while($row = mysqli_fetch_assoc($query)){
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }if($user == $dbusername && $pass == $dbpassword){
 session_start();
 $_SESSION['sess_user']=$user;
 header("Location:welcome.php");
 }
 }else{
 echo "Invalid Username or Password!";
 }
 }else{
 echo "Required All fields!";
 }
}
?>
<a href="alog.php" style="color:black"> Welcome!!!.</a>
</body>
</html>