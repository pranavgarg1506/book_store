<?php



$bookname=$_POST['book_name'];
$author=$_POST['author'];




$conn=mysql_connect("localhost","root","");
if($conn!=true)
	echo "not connected";


$sql = "INSERT INTO employeess (first_name, last_name)
VALUES ('$bookname', '$author')";

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
