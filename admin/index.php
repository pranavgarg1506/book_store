<html>

<head>
<title> </title>
</head>

<body>


<form action="#" method="post">
usrename: <input type="text" name="username"><br>
password: <input type="password" name="password"><br>
<input type="submit" name="hell">
</form>


<?php
if(isset($_SESSION['uid'])){
header("location:try2.php");
}
?>
<?php
if(isset($_POST['hell']))
{
$use= $_POST['username'];
$pass= $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT username, password FROM admin WHERE username='$use'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc(); 
if (($row['username']==$use) and( $row['password']==$pass))
{
	echo "success";
	session_start();
	$_SESSION['uid']=$use;
	header("location:home.php");

?>
<a href="logout.php">LOGOUT</a>
<?php
}else
{
	echo "enter correct password";
	}

}
 else {
echo "0 results";
}
}
?>



</body>


</html>