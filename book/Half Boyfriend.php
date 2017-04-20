<html>

<head>
<title> </title>

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
td:hover{ font-size:30;background:brown;}
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
background:#e7feff;
}
.div1 {
       float:left;
       width:450px;
       height:540px;
       margin-left:30px;
	   margin-top:30px;
       border:3px  #73AD21;
	   
}

.div2 {
        border: 1px  red;
		width:50%;
		height:540px;
		margin-left:40%;
		padding-top:100px;
		padding-left:10px;
}
.block{
        border:1px  red;
		width:350px;
		margin-left:50px;
		height:480px;
		margin-top:25px;
		background-color:pink;
}
button{
		background-color: #4CAF50;
		width:180px;	
		margin-top:30px;
		margin-left:30px;
		height:40px;
		font-size:17;
		font-family:veranda;
		
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
					     <td> <a href="http://localhost/mac/try2.php" style="text-decoration:none"> HOME </a> </td>
					
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
			<form action="http://localhost/mac/qq.php" method="post">
			  <input type="textarea" name="search" placeholder="Enter the Keyword..." />
			  <input type="submit" name="button">
			  
			</form>
		</div>
		  
			
			
	</div>
</div>
<div id="space"></div>




<div class="div1">
    <div class="block">
	<img src="b2.jpg" alt="Mountain View" style="width:350px;height:480px;">
					
	      
	</div>
	<?php 
	if(isset($_SESSION['uid'])){
	?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="buy.php"><button type="submit">BUY NOW</button></a>
	<?php
	}
	else{
	?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/mac/register.html"><button type="submit">BUY NOW</button></a>
	<?php
	}
	?>
</div>
<div class="div2">
     <h2> Half Boyfriend </h2> <h3> ( English, Judy Balan and Kishore Manohar ) </h3><p>
	Village boy meets pretty girl in city college. Since we live in dramatic times, this can no longer go unnoticed. He decides to marry her. She runs away as fast as possible. He, however, has recently read a similar sounding book that tells him that this is all part of the game. Emboldened, he doesn�t give up. She doesn't give up either. A chase that takes them across the world ensues</p>
                <p><h3> <span style="color:#800000">Rs.132&nbsp; </span><strike><span style="color:cd8f3f">Rs.199</span></strike></h3></p>
				<h4>You Save:&nbsp;<span style="color:#800000">Rs.67(33%)</span></h4>
				<h4><span style="color:#800000">Author</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#cd8f3f"> Judy Balan and Kishore Manohar</span></h4>
				Pages:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;265
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
