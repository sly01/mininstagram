<?php
session_start();

if(!isset($_SESSION["login"])){ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="refresh" content="3;URL=login.php"> 
</head>
<body>
	<p align="center">Please Login in First</p>
	<p align="center">You are redirecting to Login Page</p><br/>
</body>
</html>
<?php 
die();
} ?>