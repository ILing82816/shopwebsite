<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>I-Ling Store</title>
	<link href="style.css" rel="stylesheet" type="text/css">		
</head>
<body>
	<header id="main-header">
		<div class="container">
			<h1>I-Ling Store</h1>
		</div>
	</header>
	
	<div class="container">	
		<form class= my-form action="Firweb2.php">
			<div class="msg"></div>
			<div class="box-1">
				<label>Name</label>
				<input type="text" id="Name" placeholder="Enter your name">
			</div>
			<div class="box-1">
				<label>Address</label>
				<input type="text" id="address" placeholder="Enter original one or you want to change">
			</div>
			<div class="box-1">
				<label>Email</label>
				<input type="email" id="email" placeholder="Enter original one or you want to change">
			</div>
			<div class="box-1">
				<label>Password</label>
				<input type="password" id="password" placeholder="Enter original one or you want to change">
			</div>
			<div class="box-1">
				<label>Phone Number</label>
				<input type="text" id="phone" placeholder="Enter original one or you want to change">
			</div>
			<div class="box-1">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
		
	<footer id="main-footer">
		<p>Copyright &copy; 2019 I-Ling Store</p>
	</footer>
	
	<script src="updateuser.js"></script>
</body>
</html>