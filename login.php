
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


</head>

<body>
<?php
if(isset($_SESSION['uid'])){
header("location:try2.php");
}
?>
<?php


$use= $_POST['un'];
$pass= $_POST['pass'];

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


$sql = "SELECT username, password FROM registration WHERE username='$use'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc(); 
if (($row['username']==$use) and( $row['password']==$pass))
{
	echo "success";
	session_start();
	$_SESSION['uid']=$use;
	header("location:try2.php");

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
?>
</body>
</html>