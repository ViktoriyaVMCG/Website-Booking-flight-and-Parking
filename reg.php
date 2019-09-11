<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>



 <?php
 echo "TESTING";

    echo "TESTING";
 if(!empty($_POST['Username']) && !empty($_POST['Passwrd']) && !empty($_POST['Email'])){
 $Username = $_POST['Username'];
 $Email = $_POST['Email'];
 $Passwrd = $_POST['Passwrd'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'hayridedb') or die("DB Error"); 
 $query = mysqli_query($conn, "SELECT * FROM Users WHERE Username='".$Username."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0) {
 $sql = "INSERT INTO Users (Username, Email, Passwrd) VALUES('$Username','$Email','$Passwrd')";
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

?>

</body>
</html>