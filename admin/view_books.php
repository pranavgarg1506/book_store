<html>
<head>

<title> </title>
</head>

<body>

<?php

$conn=mysql_connect("localhost","root","");

if($conn!=True)
	echo "Not connected";



$sql = "SELECT  sno,first_name, last_name
        FROM   employeess";
		
mysql_select_db('employee');

$result = mysql_query($sql);

?>

						<table border="2" width="80%" align="center" height="50px" >

 <tr>
    <th><h2>S.NO </h2></th>
    <th><h2>Book Name</h2></th>
    <th><h2>Author<h2></th> 
    
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
	            <td height="30px" width="6%"> <?php echo $row['sno'];?>     </td>
                <td style="padding-left:20px">  <?php echo $row['first_name']; ?> <br>    </td>	
                <td style="padding-left:20px">  <?php echo $row['last_name']; ?> <br>    </td>					
	  
	    </tr>
	<?php
}

mysql_close($conn);





?>
</body>

</html>