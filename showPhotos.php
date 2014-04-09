<?php
/**
 * Created by PhpStorm.
 * User: erkoc
 * Date: 9.04.2014
 * Time: 02:12
 */
require("adminCheck.php");
require("database.php");

$sql = mysql_query("Select filename from List") or die(mysql.error());
while($row = mysql_fetch_array($sql)){
    $filename=$row["filename"];
    $directory = "../../upload/"."$filename";
    echo '<img src="'.$directory.'"/>';


}
echo '<br/><a href="admin.php"><h3>Admin Panel</h3></a>';
mysql_close($conn);

