<?php
require 'adminCheck.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Admin Sayfasi</title>
</head>
<body>
	<?php
			echo "Hosgeldin ".$_SESSION["user"]."<br/>";
	?>
	<a href="showlist.php">Show List </a><br/>
	<a href="filesUpload.html">Dosya ekleme</a><br/>
	<a href="logout.php">Logout</a>
</body>
</html>