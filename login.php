<?php
include("config.php");
require("database.php");
session_start();
$user = $_POST["username"];
$sifre = $_POST["password"];
$sql = mysql_query("SELECT * from Kullanici WHERE (isim = '".$user."') AND (password = '".$sifre."')") or die(mysql_error());
if(mysql_num_rows($sql) != 0){
    $_SESSION["login"] = "true";
    $_SESSION["user"] = "$user";
    header("Location:admin.php");
}
else{
    header("Location:index.php");

}
/*if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
//echo "<center>Username or password is wrong.<br>";
//echo "You are redirecting to index page.</center>";
header("Location:index.php");
}
*/
?>