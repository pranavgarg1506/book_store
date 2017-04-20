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
height:100px;
background:white;
}
form{
	  border:1px  black;
	  width:1220px;
	  height:500px;
	  margin:0 auto;
	  
}
input[type=text], input[type=password], input[type=number], input[type=email] {
    width: 50%;
    padding: 12px 15px;
    margin: 20px 20px;
    display: inline-block;
    border: .5px solid #0000ff;
    box-sizing: border-box;
	height:50px;
}
textarea{
         padding: 12px 10px;
		 margin: 20px 22.5px;
		 border: .5px solid #0000ff;
		 font-size:17;
}
input[type=radio]{
    
	margin-left:17px;
	margin-top:10px;
	margin-bottom:10px;

}

button {
    background-color: #4CAF50;
    
    padding: 14px 20px;
    margin: 12px 15px;
    border: none;
    cursor: pointer;
    
	
}
.title{
	    color:red;
		margin-left:150px;
		
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
						 
					 </tr>
				       
				 </table>
			</div>
			
			
			 
			 
	   </div>
</div>
<div id="space"></div>


<?php
mysql_connect("localhost","root","") or die("bc");
mysql_select_db("employee");
session_start();
$un=$_SESSION['uid'];
$se=mysql_query("select * from registration where username='$un'");
$inf=mysql_fetch_array($se);
?>
    <div class="title">
		<h1>  DELIVERY ADDRESS </h1>
	</div>
   
        <input type="text" name="name" value="<?php echo $inf['name'];?>" placeholder="Name" readonly><br>
		<input type="number" name="contact"  placeholder="Contact" required><br>
		<input type="email" name="email" value="<?php echo $inf['email'];?>" placeholder="E-mail" readonly><br>
		<input type="radio" name="gender" value="male" checked> Cash On Delivery
		<input type="radio" name="gender" value="male"> Net Banking
		<br>
		<textarea rows="4" cols="80" name="comment" form="usrform" placeholder="Address" required></textarea>
		
	
		<button type="submit" onclick="mac()" name="sub" style="width: 50%" style="color: white;"> <font size="6">Submit</font></button><br>

<script type="text/javascript">
function mac(){
alert("Successful Insertion");
}
</script>

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
			   
			    <a href="https://www.facebook.com/"><img src="http://localhost/mac/facebook.png" alt="Avatar" class="avatar"  height="20"></a>&nbsp;&nbsp;&nbsp;
			   <a href="https://www.twitter.com/"><img src="http://localhost/mac/twitter.png" alt="Avatar" class="avatar"  height="20"></a>&nbsp;&nbsp;&nbsp;
			   <a href="https://plus.google.com/"><img src="http://localhost/mac/google.png" alt="Avatar" class="avatar"  height="20">&nbsp;&nbsp;&nbsp;
			   <a href="https://www.linkedin.com/"><img src="http://localhost/mac/linkedin.png" alt="Avatar" class="avatar"  height="20">&nbsp;&nbsp;&nbsp;
			   
		    
		</div>
		
		
	</div>	
  
</div>
</body>

</html>
