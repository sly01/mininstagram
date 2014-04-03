<?php
include("config.php");
session_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
//echo "<center>Username or password is wrong.<br>";
//echo "You are redirecting to index page.</center>";
header("Location:index.php");
}
?>