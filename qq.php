<html>


<head>
<title>
</title>

<style>
body{
      margin:0px;
      width:100%;
	  background-color:white;
}
.header{
        width:100%;
		background:#483d8b;
		height:auto;
		position:fixed;
		
}
.container1{
            width:80%;
		   margin-left:8.5%;
		   padding-top:20px;
			
		   padding-left:20px;
		   padding-right:20px;
			
}
.logo{
      float:left;
	  font-size:35;
	  color:white;
	  
}
.logo:hover{color:red; font-size:45;}

.link{	
      float:right;
	  
}
td{
   padding-right:20px;
   background:green;
   
   
   
}
a{color:white; decoration:none;}
.search{
         margin-top:80px;
		 margin-left:180px;
		 padding-bottom:20px;
		 
}
input[type=textarea]{
                     width:70%;
					 height:40px;
					 font-size:20;
					 padding-right:20px;
}
input[type=submit]{
                   width:15%;
				   height:40px;
				   font-size:18px;
				   background:orange;
				   color:white;
}
#space{
width:100%;
height:180px;
background:white;
}





.headerspace{
	width:100%;
	height:20px;
	background:white;
}

.result{
        width:100%;
		min-height:450px;
		margin:0 0;
		background:white;
		padding-top:10px;
		padding-bottom:10px;
}

.show{
      width:80%;
	  padding-top:20px;
	  padding-left:20px;
	  background:green;
	  margin-left:8.5%;
	  height:auto;
	  padding-right:20px;
	  padding-bottom:20px;
	  
}
.box{
	  width:200px;
	  height:400px;
	  background:green;
	  padding-left:20px;
	  padding-top:20px;
	  padding-bottom:20px;
	  
}





.footer{
         width:100%;
		 height:auto;
		 background-color:black;
		 color:white;	 
}
.container3{
            width:80%;
			background:black;
			margin-left:9%;
			padding-left:20px;
			padding-top:10px;
			padding-bottom:20px;
			height:250px;
}

.section{
         float:left;
		 width:220px;
		 margin-left:30px;
		 margin-right:70px;
		 padding-left:20px;
}

</style>		
</head>

<body>

<div class="header">
      
       <div class="container1">
	   
	        <div class="logo">
		                  MY PAL 
			</div>
			
			<div class="link">
			     <table border=".2">
				     <tr>
					     <td> <a href="try2.php" style="text-decoration:none"> HOME </a> </td>
						 <?php
						
						session_start();
						if(isset($_SESSION['uid'])){
						$uid=$_SESSION['uid'];
						?> 
						     <td><a href="http://localhost/mac/logout.php" style="text-decoration:none">LOGOUT</a></td>
						<?php
						}
						else{
						?>
						      <td> <a href="http://localhost/mac/register.html" style="text-decoration:none"> REGISTRATION </a></td>
						
						       <td> <a href="http://localhost/mac/login1.php"  style="text-decoration:none" > LOG IN </a> </td>
						<?php 
						}
						?>
					 </tr>
				       
				 </table>
			</div>
			
			<div class="search">
			  <form action="qq.php" method="post">
			  <input type="textarea" name="search" placeholder="Enter the Keyword..." />
			  <input type="submit" name="button">
			  
			  </form>
			</div>
			
			
			
			
			 
	   </div>
	   
	   <div class="headerspace">
	   </div>
</div>


<div id="space"></div>



<div class="result">
                    <div class="show">
					
<br>
 	
					
<?php

$con=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('employee');


if(isset($_POST['button']))
{    //trigger button click

  $search=$_POST['search'];

  $query=mysql_query("select * from employeess where first_name like '%{$search}%' || last_name like '%{$search}%' ");

if (mysql_num_rows($query) > 0)
{
	
	
	
	?>
	
						<table border="2" width="80%" align="center" height="50px" >

 <tr>
    <th><h2>Book Name</h2></th>
    <th><h2>Author<h2></th> 
    
  </tr>
	
	<?php
  while ($row = mysql_fetch_array($query))
	  {
	  ?><tr>
	            <td height="30px" width="68%"> <a href='book\<?php echo $row['first_name'];?>.php'><?php echo $row['first_name'];?> </a>     </td>
                <td style="padding-left:20px"> <b> <?php echo $row['last_name']; ?> </b><br>    </td>				
	  
	    </tr>
		
	    
	 <?php
	  }
}
else
     {
           echo "<b>No book Found!</b><br><br>";
     }

}else{                          //while not in use of search  returns all the values
  $query=mysql_query("select * from employeess");

  while ($row = mysql_fetch_array($query)) {
    echo $row['first_name']."&nbsp;".$row['last_name']."<br>";
  }
}

mysql_close();
?>
					
					</table>
					
					</div>
</div>





<div class="footer">
    <div class="container3">
			<div class="section">
			        <h2> ABOUT US</h2>
							   
			</div>
			
			<div class="section">
			             <h2>Contact Us</h2>  <font size="4">  Mobile no:9875269475 <br> Email:abc@gmail.com </font>
			</div>
	    
        <div class="section">
		       
			   <h2> Follow Us </h2>
			   
			    <a href="https://www.facebook.com/"><img src="http://localhost/mac/facebook.png" alt="Avatar" class="avatar"  height="20"></a>&nbsp;&nbsp;&nbsp;
			   <a href="https://www.twitter.com/"><img src="http://localhost/mac/twitter.png" alt="Avatar" class="avatar"  height="20"></a>&nbsp;&nbsp;&nbsp;
			   <a href="https://plus.google.com/"><img src="http://localhost/mac/google.png" alt="Avatar" class="avatar"  height="20">&nbsp;&nbsp;&nbsp;
			   <a href="https://www.linkedin.com/"><img src="http://localhost/mac/linkedin.png" alt="Avatar" class="avatar"  height="20">&nbsp;&nbsp;&nbsp;
			   
		    
		</div>
		
		
	</div>	
  
</div>


</body>

</html>
















