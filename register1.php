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

$name= $_POST['name'];
$contact= $_POST['contact'];
$email= $_POST['email'];
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

$sql = "INSERT INTO registration (name, contact, email, username, password)
VALUES ('$name', '$contact', '$email', '$use', '$pass')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
session_start();
	$_SESSION['uid']=$use;
	header("location:try2.php");

}
 else 
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>
</body>
</html>