<html>
<head>

<title> </title>
</head>

<body>

<?php

$conn=mysql_connect("localhost","root","");

if($conn!=True)
	echo "Not connected";



$sql = "SELECT id, name, contact, email, username, password
        FROM   registration";
		
mysql_select_db('employee');

$result = mysql_query($sql);

?>

						<table border="2" width="80%" align="center" height="50px" >

 <tr>
    <th><h2>S.NO </h2></th>
    <th><h2>Name</h2></th>
    <th><h2>Contact</h2></th> 
	<th><h2>Email</h2></th>
	<th><h2>username</h2></th>
	<th><h2>password</h2></th>
    
  </tr>
  
  <?php

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

while ($row = mysql_fetch_assoc($result))
{
	?>
	

	
    	<tr>
	            <td height="30px" width="6%"> <?php echo $row['id'];?>     </td>
                <td style="padding-left:20px">  <?php echo $row['name']; ?> <br>    </td>	
                <td style="padding-left:20px">  <?php echo $row['contact']; ?> <br>    </td>	
<td style="padding-left:20px">  <?php echo $row['email']; ?> <br>    </td>
<td style="padding-left:20px">  <?php echo $row['username']; ?> <br>    </td>
<td style="padding-left:20px">  <?php echo $row['password']; ?> <br>    </td>				
	  
	    </tr>
	
	
	<?php
	
}

mysql_close($conn);





?>
</body>

</html>