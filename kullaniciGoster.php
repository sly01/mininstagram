<?php
/**
 * Created by PhpStorm.
 * User: erkoc
 * Date: 9.04.2014
 * Time: 00:04
 */

require("adminCheck.php");

require("database.php");

$sql = mysql_query("SELECT * from Kullanici") or die("Sorgu Hatasi");
echo "Users"."<br/>";
while($row = mysql_fetch_array($sql)){
    $name = $row["isim"];
    echo "$name"."<br/>";
}

 mysql_close($conn);
?>

<a href="admin.php">Admin Panel</a>