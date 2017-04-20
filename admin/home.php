<html>


<head>
<title> </title>

<style>
body{
	width:100%;
	margin:0 0;
	background-image:url("back.jpg");
}
.welcome{
	width:80%;
	height:100px;
	margin:0 0;
	padding-left:120px;
	padding-top:80px;
	font-size:40;
    color:blue;	
}
.container{
	width:78%;
	margin-left:10%;
	height:250px;
	
	padding-left:10px;
	padding-top:30px;
	
}
form{
	border:1px solid black;
	height:220px;
	width:220px;
	border-radius:190px;
	float:left;
	margin-right:90px;
	margin-left:30px;
	background:#73c12e;
	
}
.text{
	width:50px;
	
	margin-top:60px;
	margin-left:62px;
	font-size:30;
	height:100px;
}
a{
	text-decoration:none;
}

</style>
</head>

<body>

<div class="welcome">
    Welcome     &nbsp;&nbsp;&nbsp;PRANAVKRIYA
</div>

<div class="container">




    <form>
	    <div class="text">
		     <a href="view_user.php">VIEW USER</a>
		</div>
	</form>
	
	<form>
	    <div class="text">
		   <a href="add_user.html">ADD USER</a>
		</div>
	</form>
	
	<form>
	    <div class="text" style="margin-left:55px">
		    UPDATE &nbsp;&nbsp;USER
		</div>
	</form>
	
</div>
<div class="container">	
	<form>
	    <div class="text">
		    &nbsp;<a href="view_books.php">VIEW BOOKS</a>
		</div>
	</form>
	
	<form>
	    <div class="text">
		    &nbsp;&nbsp;<a href="add_books.html">ADD BOOKS</a>
		</div>
	</form>
	
	<form>
	    <div class="text" style="margin-left:55px">
		    UPDATE &nbsp;BOOKS
		</div>
	</form>
	
	
</div>



</body>


</html>