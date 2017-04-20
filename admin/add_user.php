<?php



$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];



$conn=mysql_connect("localhost","root","");
if($conn!=true)
	echo "not connected";


$sql = "INSERT INTO registration (name, contact, email, username, password)
VALUES ('$name', '$contact', '$email', '$username', '$password')";

mysql_select_db('employee');

$result=mysql_query($sql,$conn);



if ($result === TRUE) {
echo "New record created successfully";
session_start();
	$_SESSION['uid']=$use;
	header("location:home.php");

}
 else 
{
echo "Error: " . $sql . "<br>";
}

mysql_close($conn);



?>
