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
		<form class= my-form action="Firweb.php">
			<div class="msg"></div>
			<div class="box-1">
				<label>Name</label>
				<input type="text" id="Name">
			</div>
			<div class="box-1">
				<label>Address</label>
				<input type="text" id="address">
			</div>
			<div class="box-1">
				<label>Email</label>
				<input type="email" id="email">
			</div>
			<div class="box-1">
				<label>Password</label>
				<input type="password" id="password">
			</div>
			<div class="box-1">
				<label>Phone Number</label>
				<input type="text" id="phone">
			</div>
			<div class="box-1">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
		
	<footer id="main-footer">
		<p>Copyright &copy; 2019 I-Ling Store</p>
	</footer>
	
	<script src="adduser.js"></script>
</body>
</html>