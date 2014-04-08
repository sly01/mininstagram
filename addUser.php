<?php
/**
 * Created by PhpStorm.
 * User: erkoc
 * Date: 8.04.2014
 * Time: 23:12
 */

require("adminCheck.php");

require("database.php");

$username = $_GET["username"];
$password = $_GET["password"];

  $sql = "INSERT INTO Kullanici (isim, password) VALUES('$username','$password')";
mysql_query($sql,$conn) or die("Sorgu hatali");
mysql_close($conn);
echo "User added successfuly"."<br/>";
?>

<a href="admin.php">Admin Panel</a>