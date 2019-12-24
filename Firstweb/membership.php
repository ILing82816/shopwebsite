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
	<nav id="navbar">
		<div class="container">
			<ul>
				<li><a href="management.php">Back</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">	
		<form class= my-form action="management.php">
			<div class="msg"></div>
			<div class="box-1">
				<label>Name</label>
				<input type="text" id="Name" placeholder="Enter member's name you want to delete">
			</div>
			<div class="box-1">
				<input type="submit" value="delete">
			</div>
		</form>
	</div>
			
	<footer id="main-footer">
		<p>Copyright &copy; 2019 I-Ling Store</p>
	</footer>
	<script src="deletemember.js"></script>
</body>
</html>