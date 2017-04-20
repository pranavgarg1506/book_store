<html>

<head>

<title>  </title>

<style>
body{
	   margin:0px;
	   width:100%;
	   background-color:white;
	   
}


.header{
        width:100%;
		background:#483d8b;
		height:100px;
		position:fixed;
}
.container1{
            width:80%;
		   margin-left:8.5%;
		   padding-top:20px;
		   background:#483d8b;
		   padding-left:20px;
		   padding-right:20px;
		   height:80px;
			
}
.logo{
      float:left;
	  font-size:35;
	  color:white;
	  
}
.logo:hover{color:red; font-size:45;}
td:hover{ font-size:30;background:brown;}
.link{	
      float:right;
	  
}
td{
   padding-right:20px;
   background:green;
   
   
   
}
a{color:white;}



#space{
width:100%;
height:120px;
background:white;
}


form {
    border: 5px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 5px;
    margin: 10px 0;
    display: inline-block;
    border: 1.5px solid #aaa;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
.info{
       padding:16px; 
}
.img {
    text-align: center;
    margin: 6px 0 12px 0;
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

<?php
if(isset($_SESSION['uid'])){
header("location:try2.php");
}
?>
<div class="header">
      
       <div class="container1">
	   
	        <div class="logo">
		                  MY PAL 
			</div>
			
			<div class="link">
			     <table border=".2">
				     <tr>
					     <td> <a href="try2.php" style="text-decoration:none"> HOME </a> </td>
						 <td> <a href="register.html" style="text-decoration:none"> REGISTRATION </a></td>
						 
					 </tr>
				       
				 </table>
			</div>
			
			
			 
			 
	   </div>
</div>


<div id="space"></div>

<div class="container">	
<form action="login.php" method="post">
 <div class="img">
    <img src="login.png" alt="Avatar" class="avatar"  height="300">
  </div>
   <div class="info">
   <center>
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="un" required><br>

    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required><br>
        
    <button type="submit">Login</button><br></center>
    
  </div>


</form>


</div>

<div id="space"></div>

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
			   
			   <a href="https://www.facebook.com/"><img src="facebook.png" alt="Avatar" class="avatar"  height="20"></a>&nbsp;&nbsp;&nbsp;
			   <a href="https://www.twitter.com/"><img src="twitter.png" alt="Avatar" class="avatar"  height="20"></a>&nbsp;&nbsp;&nbsp;
			   <a href="https://plus.google.com/"><img src="google.png" alt="Avatar" class="avatar"  height="20">&nbsp;&nbsp;&nbsp;
			   <a href="https://www.linkedin.com/"><img src="linkedin.png" alt="Avatar" class="avatar"  height="20">&nbsp;&nbsp;&nbsp;
			   
		    
		</div>
		
		
	</div>	
  
</div>


</body>
</html>