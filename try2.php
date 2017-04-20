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
background:white;
}







.container2{
           width:1080px;
		   margin:0 auto;
		   background-color:white;
		   height:1180px;
		   color:#888551;
		   
}



.part{
      background:;
	  height:auto;
	  width:%;
	  float:right;
	  padding-bottom:30px;
}
.block{
    background-color:#ffd700;
	float:left;
    width: 200px;
	height:300px;
    border: 2px black;
    padding-right:25px;
    margin-top:3px;
	margin-left:5px;
	margin-right:35px;
	color:black;
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

<div class="header" >
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

<div class="container2">
    
	     <h2>  UPCOMING NOVELS </h2>
	     
		 <div class="part">
		    <div class="block">
			          <a href="http://localhost/mac/book/Places No One Knows.php"><img src="http://localhost/mac/book/u1.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">Places No one Knows<br>Rs 200</center></font>
					  
			</div>
			
			<div class="block">
			               <a href="http://localhost/mac/book/The Delirium Brief.php"><img src="http://localhost/mac/book/u2.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">The Delirium Brief<br>Rs 250</center></font>
			</div>
			
			<div class="block">
			                     <a href="http://localhost/mac/book/The Myth Gap.php"><img src="http://localhost/mac/book/u3.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">The Myth Gap<br>Rs 200</center></font>
			</div>
			
			<div class="block">
			                     <a href="http://localhost/mac/book/When Crime Pays Money and Muscle in Indian Politics.php"><img src="http://localhost/mac/book/u4.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">When Crime Pays Money <br>Rs 200</center></font>
			</div>
		 </div>
		 
		 
		 
		 <h2>  BEST SELLER </h2>
	     
		 <div class="part">
		    <div class="block">
			                       <a href="http://localhost/mac/book/The Alchemist.php"><img src="http://localhost/mac/book/b1.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">The Alchemist<br>Rs 154</center></font>
			
			</div>
			
			<div class="block">
			                                 <a href="http://localhost/mac/book/Half Boyfriend.php"><img src="http://localhost/mac/book/b2.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">Half Boyfriend<br>Rs 132</center></font>
			</div>
			
			<div class="block">
			                     <a href="http://localhost/mac/book/Insurgent.php"><img src="http://localhost/mac/book/b5.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">Insurgent<br>Rs 279</center></font>
			</div>
			
			<div class="block">
			               <a href="http://localhost/mac/book/The Monk Who Sold His Ferrari.php"><img src="http://localhost/mac/book/b6.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">Monk Who Sold His Ferrari<br>Rs 250</center></font>
			</div>
		
		 </div>
		
		 
		 
		 <h2>  LATEST NOVELS </h2>
	     
		 <div class="part">
		    <div class="block">
			                       <a href="http://localhost/mac/book/Promise Me a Million Times.php"><img src="http://localhost/mac/book/l1.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">Promise Me a Million Times<br>Rs 87</center></font>
			
			</div>
			
			<div class="block">
			                                 <a href="http://localhost/mac/book/End of Watch.php"><img src="http://localhost/mac/book/l2.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">End of Watch<br>Rs 559</center></font>
			</div>
			
			<div class="block">
			                     <a href="http://localhost/mac/book/Sons and Daughters of Ease and Plenty.php"><img src="http://localhost/mac/book/l3.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">Sons and Daughters of Ease <br>Rs 200</center></font>
			</div>
			
			<div class="block">
			               <a href="http://localhost/mac/book/I Am No One.php"><img src="http://localhost/mac/book/l4.jpg" alt="Mountain View" style="width:225px;height:260px;">
					 </a><font size="3"><center><bgcolor="blue">I Am No One<br>Rs 250</center></font>
			</div>
		
		 </div>
		 
		  

 

</div>

<div class="footer">
    <div class="container3">
			<div class="section">
			        <h2> ABOUT US</h2>
						MY PAL is an intelligible site for bibliophiles having unfathomable amount of books. 
						
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